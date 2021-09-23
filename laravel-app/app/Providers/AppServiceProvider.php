<?php

namespace App\Providers;

use App\DataProveder\RegisterReviewProviderInterface;
use App\DataProvider\Database\RegisterReviewDataProvider;
use App\Foundation\ElasticsearchClient;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Application;
use Knp\Snappy\Pdf;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        // $this->app->bind(Pdf::class, function(){
        //     return new Pdf('/var/www/app/vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64');
        // });
        $this->app->singleton(ElasticsearchClient::class,function(Application $app){
            $config=$app['config']->get('elasticsearch');
            return new ElasticsearchClient($config['hosts']);
        });
        $this->app->bind(RegisterReviewProviderInterface::class, function(){
            return new RegisterReviewDataProvider();
        });
    }
}
