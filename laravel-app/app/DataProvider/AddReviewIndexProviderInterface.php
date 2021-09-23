<?php

declare(strict_types=1);

namespace App\DataProveder;

interface AddReviewIndexProviderInterface
{
    public function addReview(
        string $id,
        string $title,
        string $content,
        string $epoch,
        array $tags,
        int $userId
    ): array;
}