<?php

namespace Mohsenbostan\LaravelSecretImage;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Symfony\Component\HttpKernel\Exception\HttpException;

class LaravelSecretImage
{
    /**
     * Save Single Image
     * @param $image
     * @param string $path
     * @param null $newImageName
     * @return false|string
     */
    public static function saveSingleImage($image, $path = 'secret-image', $newImageName = null)
    {
        if (Str::substr($path, 0, 6) !== 'public') {
            return is_null($newImageName)
                ? Storage::putFile($path, $image)
                : Storage::putFileAs($path, $image, $path, $newImageName . '.' . $image->getClientOriginalExtension());
        }
        throw new HttpException(422, 'the provided path is not secret. Please remove the `public` from the beginning.');
    }
}
