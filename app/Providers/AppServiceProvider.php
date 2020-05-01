<?php

namespace App\Providers;

use App\Http\Models\McEmojiDownloads;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(McEmojiDownloads::class, function($app) {
            return new McEmojiDownloads();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
