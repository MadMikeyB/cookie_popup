<?php

namespace LarasoftIo\CookiePopup\Facades;

use Illuminate\Support\Facades\Facade;

class CookiePopup extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'cookie-popup';
    }
}
