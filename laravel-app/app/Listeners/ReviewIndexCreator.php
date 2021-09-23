<?php

namespace App\Listeners;

use App\DataProveder\AddReviewIndexProviderInterface;
use App\Events\ReviewRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ReviewIndexCreator implements ShouldQueue
{

    use InteractsWithQueue;
    private $provider;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(
        AddReviewIndexProviderInterface $provider
    )
    {
        $this->provider=$provider;
    }

    /**
     * Handle the event.
     *
     * @param  ReviewRegistered  $event
     * @return void
     */
    public function handle(ReviewRegistered $event)
    {
        $this->provider->addReview(
            $event->getId(),
            $event->getTitle(),
            $event->getContent(),
            $event->getCreatedAtEpoch(),
            $event->getTags(),
            $event->getUserId()
        );
    }
}
