<?php

namespace Mohsenbostan\LaravelSecretImage\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use \Intervention\Image\Facades\Image;
use Symfony\Component\HttpKernel\Exception\HttpException;
use \Illuminate\Contracts\Filesystem\FileNotFoundException;

class LaravelSecretImageController extends Controller
{
    /**
     * Generate And Show Image From File
     * @throws HttpException|FileNotFoundException
     */
    public function showImage()
    {
        $storage_driver = config('laravel-secret-image.storage_driver');

        if (Storage::disk($storage_driver)->exists(request('image'))) {
            $image = Storage::disk($storage_driver)->get(request('image'));
            return Image::make($image)->response();
        }

        throw new HttpException(422, 'image not found.');
    }
}
