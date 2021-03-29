<?php

namespace LarasoftIo\CookiePopup;

use Illuminate\Support\Facades\View;
use LarasoftIo\CookiePopup\Composers\ViewComposer;
use \Illuminate\Support\ServiceProvider;

class CookiePopupServiceProvider extends ServiceProvider
{
    const CONFIG_PATH = __DIR__ . '/../config/cookie-popup.php';

    public function boot()
    {
        $this->publishes([
            self::CONFIG_PATH => config_path('cookie-popup.php'),
        ], 'config');

        $this->loadViewsFrom(__DIR__.'/resources/views', 'CookiePopup');

        View::composer('CookiePopup::cookie_popup', ViewComposer::class);
    }

    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_PATH,
            'cookie-popup'
        );

        $this->app->bind('cookie-popup', function () {
            return new CookiePopup();
        });
    }
}
