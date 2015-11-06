<?php

/**
 * Podio integration for Laravel 5.1
 *
 * @license MIT
 * @package SpotOnLive\LaravelPodio
 */

namespace SpotOnLive\LaravelPodio;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Application;

class LaravelPodioProvider extends ServiceProvider
{
    /**
     * Publish config
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../config/config.php' => config_path('podio.php'),
        ]);
    }

    /**
     * Register package
     */
    public function register()
    {
        $this->mergeConfig();
    }

    /**
     * Merge config
     */
    private function mergeConfig()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/config.php',
            'podio'
        );
    }
}