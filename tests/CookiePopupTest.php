<?php

namespace LarasoftIo\CookiePopup\Tests;

use LarasoftIo\CookiePopup\Facades\CookiePopup;
use LarasoftIo\CookiePopup\CookiePopupServiceProvider;
use Orchestra\Testbench\TestCase;

class CookiePopupTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [CookiePopupServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'cookie-popup' => CookiePopup::class,
        ];
    }

    public function testExample()
    {
        $this->assertEquals(1, 1);
    }
}
