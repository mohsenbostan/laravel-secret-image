<?php

namespace Mohsenbostan\LaravelSecretImage\Tests;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Mohsenbostan\LaravelSecretImage\LaravelSecretImage;
use Orchestra\Testbench\TestCase;
use Mohsenbostan\LaravelSecretImage\LaravelSecretImageServiceProvider;
use Illuminate\Http\UploadedFile;

class ImageTest extends TestCase
{

    protected function getPackageProviders($app): array
    {
        return [LaravelSecretImageServiceProvider::class];
    }

    /** @test */
    public function it_can_save_single_secret_image_with_default_params()
    {
        $storage_driver = config('laravel-secret-image.storage_driver');
        $image = UploadedFile::fake()->image('test.jpg');
        $save_image = LaravelSecretImage::saveSingleImage($image);
        Storage::disk($storage_driver)->assertExists($save_image);
    }

    /** @test */
    public function it_can_save_single_secret_image_with_custom_path()
    {
        $storage_driver = config('laravel-secret-image.storage_driver');
        $image = UploadedFile::fake()->image('test.jpg');
        $path = 'test-secret-image';
        $save_image = LaravelSecretImage::saveSingleImage($image, $path);
        Storage::disk($storage_driver)->assertExists($save_image);
        self::assertStringContainsString($path, $save_image);
    }

    /** @test */
    public function it_can_save_single_secret_image_with_custom_name()
    {
        $storage_driver = config('laravel-secret-image.storage_driver');
        $image = UploadedFile::fake()->image('test.jpg');
        $name = 'test-secret-image-name';
        $save_image = LaravelSecretImage::saveSingleImage($image, 'secret-image', $name);
        Storage::disk($storage_driver)->assertExists($save_image);
        self::assertStringContainsString($name, $save_image);
    }

    /** @test */
    public function it_can_save_multiple_secret_image_with_default_params()
    {
        $storage_driver = config('laravel-secret-image.storage_driver');
        $images = [
            UploadedFile::fake()->image('test1.jpg'),
            UploadedFile::fake()->image('test2.jpg')
        ];
        $save_image = LaravelSecretImage::saveMultiImages($images);
        Storage::disk($storage_driver)->assertExists($save_image);
    }

    /** @test */
    public function it_can_save_multiple_secret_image_with_custom_path()
    {
        $storage_driver = config('laravel-secret-image.storage_driver');
        $images = [
            UploadedFile::fake()->image('test1.jpg'),
            UploadedFile::fake()->image('test2.jpg')
        ];
        $path = 'test-secret-image';
        $save_image = LaravelSecretImage::saveMultiImages($images, $path);
        Storage::disk($storage_driver)->assertExists($save_image);
        self::assertStringContainsString($path, $save_image[0]);
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
