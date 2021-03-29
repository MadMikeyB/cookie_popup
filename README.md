# Cookie Popup

[![GitHub Workflow Status](https://github.com/larasoft-io/cookie-popup/workflows/Run%20tests/badge.svg)](https://github.com/larasoft-io/cookie-popup/actions)
[![styleci](https://styleci.io/repos/CHANGEME/shield)](https://styleci.io/repos/CHANGEME)

[![Packagist](https://img.shields.io/packagist/v/larasoft-io/cookie-popup.svg)](https://packagist.org/packages/larasoft-io/cookie-popup)
[![Packagist](https://poser.pugx.org/larasoft-io/cookie-popup/d/total.svg)](https://packagist.org/packages/larasoft-io/cookie-popup)
[![Packagist](https://img.shields.io/packagist/l/larasoft-io/cookie-popup.svg)](https://packagist.org/packages/larasoft-io/cookie-popup)

Package description: CHANGE ME

## Installation

Install via composer
```bash
composer require larasoft-io/cookie-popup
```

### Publish package assets

```bash
php artisan vendor:publish --provider="LarasoftIo\CookiePopup\CookiePopupServiceProvider"
```

## Usage
- Add \LarasoftIo\CookiePopup\Facades\CookiePopup in config/app.php aliases array:
```
'aliases' => [
    ...,
    'CookiePopup' => \LarasoftIo\CookiePopup\Facades\CookiePopup::class
]
```

- Include {!! CookiePopup::generate() !!} on your view to show popup. That's it.

Update config/cookie-popup.php according to your needs.

## Security

If you discover any security related issues, please email
instead of using the issue tracker.

## Credits

- [Larasoft.io](https://github.com/larasoft-io/cookie-popup)
- [All contributors](https://github.com/larasoft-io/cookie-popup/graphs/contributors)
