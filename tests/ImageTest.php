<?php

namespace Mohsenbostan\LaravelSecretImage\Tests;

use Illuminate\Support\Str;
use Mohsenbostan\LaravelSecretImage\LaravelSecretImage;
use Orchestra\Testbench\TestCase;
use Mohsenbostan\LaravelSecretImage\LaravelSecretImageServiceProvider;

class ImageTest extends TestCase
{

    protected function getPackageProviders($app): array
    {
        return [LaravelSecretImageServiceProvider::class];
    }

    /** @test */
    public function it_can_get_image_url()
    {
        $fake_image_name = Str::random();
        $expected_url = route('secret-image.show-image') . "?image=$fake_image_name";
        $actual_url = LaravelSecretImage::getImageUrl($fake_image_name);

        self::assertSame($expected_url, $actual_url);
    }

}
