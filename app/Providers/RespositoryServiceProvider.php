<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\MyInterface\StatsInterface;
use App\MyRepository\StatsRepository;


use App\MyInterface\VideoInterface;
use App\MyRepository\VideoRepository;

class RespositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(StatsInterface::class,StatsRepository::class);
        $this->app->bind(VideoInterface::class,VideoRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
