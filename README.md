# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mohsenbostan/laravel-secret-image.svg?style=flat-square)](https://packagist.org/packages/mohsenbostan/laravel-secret-image)
[![Build Status](https://img.shields.io/travis/mohsenbostan/laravel-secret-image/master.svg?style=flat-square)](https://travis-ci.org/mohsenbostan/laravel-secret-image)
[![Quality Score](https://img.shields.io/scrutinizer/g/mohsenbostan/laravel-secret-image.svg?style=flat-square)](https://scrutinizer-ci.com/g/mohsenbostan/laravel-secret-image)
[![Total Downloads](https://img.shields.io/packagist/dt/mohsenbostan/laravel-secret-image.svg?style=flat-square)](https://packagist.org/packages/mohsenbostan/laravel-secret-image)

This is package helps you to save your images secretly and show theme just to authenticated users.

## Installation

You can install the package via composer:

```bash
composer require mohsenbostan/laravel-secret-image
```

## Usage

use  \Mohsenbostan\LaravelSecretImage\LaravelSecretImage;

$image = LaravelSecretImage::saveSingleImage(request()->file('image'));
``` 

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email mohsenbostandev@gmail.com instead of using the issue tracker.

## Credits

- [Mohsen Bostan](https://github.com/mohsenbostan)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

