<?php

namespace App\Providers;

use App\Repositories\Contracts\IPostRepository;
use App\Repositories\Eloquent\PostRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(IPostRepository::class, PostRepository::class);
    }
}
