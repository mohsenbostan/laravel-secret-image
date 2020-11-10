# Laravel Secret Image

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mohsenbostan/laravel-secret-image.svg?style=flat-square)](https://packagist.org/packages/mohsenbostan/laravel-secret-image)
[![Total Downloads](https://img.shields.io/packagist/dt/mohsenbostan/laravel-secret-image.svg?style=flat-square)](https://packagist.org/packages/mohsenbostan/laravel-secret-image)
[![Build Status](https://travis-ci.com/mohsenbostan/laravel-secret-image.svg?branch=master)](https://travis-ci.com/mohsenbostan/laravel-secret-image)

This package helps you to save your images secretly and show them just to authenticated users.

## Installation

You can install the package via composer:

```bash
composer require mohsenbostan/laravel-secret-image
```
after installing package using composer, you should publish configs:

``` bash
php artisan vendor:publish --provider=Mohsenbostan\LaravelSecretImage\LaravelSecretImageServiceProvider
```

## Usage

**Custom Storage Driver**

you can set a custom storage driver in `config/laravel-secret-image.php`

```php
<?php

return [
    /*
     * Default Storage Driver To Save Images
     * -------------------------------------
     * Note: Don't use `public` for driver or path.
     */
    'storage_driver' => env('FILESYSTEM_DRIVER', 'local'),
];
```

**Custom Middlewares**

you can set custom middlewares to protect images in `config/laravel-secret-image.php`

```php
<?php

return [
    /*
     * Default Middlewares To Protect Images
     */
    'middlewares' => [
        'auth'
    ]
];
```

**Save Single Secret Image**

`saveSingleImage` method will save image and return the image path.

``` php
use  \Mohsenbostan\LaravelSecretImage\LaravelSecretImage;

$image = LaravelSecretImage::saveSingleImage(request()->file('image'));
``` 

**Save Multiple Secret Images**

`saveMultiImages` method will save all images and return the images' path.

``` php
use  \Mohsenbostan\LaravelSecretImage\LaravelSecretImage;

$images = LaravelSecretImage::saveMultiImages(request()->file('images'));
``` 

**Get Secret Image Url**

`getImageUrl` method will return image url.

``` php
use  \Mohsenbostan\LaravelSecretImage\LaravelSecretImage;

$url = LaravelSecretImage::getImageUrl($image);
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

