<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Knp\Snappy\Pdf;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(Pdf::class, function(){
            return new Pdf('/var/www/app/vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64');
        });
    }
}
