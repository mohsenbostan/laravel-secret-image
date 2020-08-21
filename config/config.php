<?php

return [
    /*
     * Default Storage Driver To Save Images
     * -------------------------------------
     * Note: Don't use `public` for driver or path.
     */
    'storage_driver' => env('FILESYSTEM_DRIVER', 'local'),

    /*
     * Default Middlewares To Protect Images
     */
    'middlewares' => [
        'auth'
    ]
];
