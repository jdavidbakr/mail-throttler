# MailThrottler

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

MailThrottler will register the Swift_Plugins_ThrottlerPlugin to prevent sending too many emails too fast.

## Install

Via Composer

``` bash
$ composer require jdavidbakr/mail-throttler
```

Add the following to the providers array in config/app.php:

``` php
jdavidbakr\MailTracker\MailThrottlerServiceProvider::class,
```

Publish the config file
``` bash
$ php artisan vendor:publish
```

## Usage

Set the approprite values in the config file config/mail-throttler.php

## Credits

- [J David Baker][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/jdavidbakr/MailTracker.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/jdavidbakr/MailTracker/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/jdavidbakr/MailTracker.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/jdavidbakr/MailTracker.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/jdavidbakr/MailTracker.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/jdavidbakr/mail-tracker
[link-travis]: https://travis-ci.org/jdavidbakr/MailTracker
[link-scrutinizer]: https://scrutinizer-ci.com/g/jdavidbakr/MailTracker/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/jdavidbakr/MailTracker
[link-downloads]: https://packagist.org/packages/jdavidbakr/mail-tracker
[link-author]: https://github.com/jdavidbakr
[link-contributors]: ../../contributors
