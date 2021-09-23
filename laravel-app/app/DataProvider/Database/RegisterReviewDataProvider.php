<?php

namespace App\DataProvider\Database;

use App\DataProveder\RegisterReviewProviderInterface;
use App\Events\ReviewRegistered;
use Illuminate\Support\Facades\DB;

class RegisterReviewDataProvider implements RegisterReviewProviderInterface
{
    public function registerReview(
        string $title,
        string $content,
        int $userId,
        string $createdAt,
        array $tags
    ): int {
        return DB::transaction(
            function () use ($title, $content, $userId, $tags, $createdAt) {
                $reviewId = $this->createReview($title, $content, $userId, $createdAt);
                foreach ($tags as $tag) {
                    $this->createReviewTag(
                        $reviewId,
                        $this->createTag($tag, $createdAt),
                        $createdAt
                    );
                }
                event(new ReviewRegistered(
                    $reviewId,
                    $title,
                    $content,
                    $userId,
                    $createdAt,
                    $tags
                ));
                return $reviewId;
            }
        );
    }

    protected function createTag(string $name, string $createdAt)
    {
        $result = Tag::firstOrCreate([
            'tag_name' => $name
        ], [
            'created_at' => $createdAt
        ]);
        return $result->id;
    }

    protected function createReview(
        string $title,
        string $content,
        int $userId,
        string $createdAt
    ): int {
        $result = Review::firstOrCreate([
            'user_id' => $userId,
            'title' => $title,
        ], [
            'content' => $content,
            'created_at' => $createdAt,
        ]);
        return $result->id;
    }

    protected function createReviewTag(int $reviewId, int $tagId, string $createdAt)
    {
        ReviewTag::firstOrCreate([
            'tag_id' => $tagId,
            'review_id' => $reviewId,
        ], [
            'created_at' => $createdAt,
        ]);
    }
}
