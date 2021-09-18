<?php

namespace App\Listeners;

use App\Events\PublishProcessor;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class MessageQueueSubscriber implements ShouldQueue
{
    use InteractsWithQueue;
    public function handle(PublishProcessor $event)
    {
        // var_dump($event->getLog());
        Log::info($event->getLog());
    }
}
