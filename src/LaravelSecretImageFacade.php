<?php

namespace Mohsenbostan\LaravelSecretImage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mohsenbostan\LaravelSecretImage\Skeleton\SkeletonClass
 */
class LaravelSecretImageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-secret-image';
    }
}
