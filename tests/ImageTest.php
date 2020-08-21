<?php

namespace Mohsenbostan\LaravelSecretImage\Tests;

use Illuminate\Http\File;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Mohsenbostan\LaravelSecretImage\LaravelSecretImage;
use Orchestra\Testbench\TestCase;
use Mohsenbostan\LaravelSecretImage\LaravelSecretImageServiceProvider;

class ImageTest extends TestCase
{

    protected function getPackageProviders($app): array
    {
        return [LaravelSecretImageServiceProvider::class];
    }

}
