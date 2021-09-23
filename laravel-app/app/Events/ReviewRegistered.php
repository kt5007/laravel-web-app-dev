<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ReviewRegistered
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private $id;
    private $title;
    private $userId;
    private $tags = [];
    private $createdAt;

    public function __construct(
        int $id,
        string $title,
        string $content,
        int $userId,
        string $createdAt,
        array $tags
    )
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->userId = $userId;
        $this->createdAt = $createdAt;
        $this->tags = $tags;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getCreatedAtEpoch(): string
    {
        $datetime = new \DateTime($this->createdAt);
        return $datetime->format('U');
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTags(): array
    {
        return $this->tags;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

}
