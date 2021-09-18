<?php

namespace App\Providers;

use App\Events\PublishProcessor;
use App\Listeners\MessageQueueSubscriber;
use App\Listeners\MessageSubscriber;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{

    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    //デフォルトで用意されているlistenプロパティで指定する場合
    protected $listen = [
        PublishProcessor::class => [
            MessageSubscriber::class,
            MessageQueueSubscriber::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
        //Facadeを利用した例
        // Event::listen(
        //     PublishProcessor::class, MessageSubscriber::class
        // );
        //フレームワークのDIコンテナにアクセスする場合
        // $this->app['events']->listen(
        //     PublishProcessor::class,
        //     MessageSubscriber::class
        // );
    }
}
