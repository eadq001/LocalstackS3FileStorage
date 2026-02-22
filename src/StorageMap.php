<?php

namespace App;

use Exception;

class StorageMap
{
    protected const METHOD = [
        'local' => LocalStorage::class,
        's3' => S3Storage::class
    ];

    public static function resolve($method)
    {
        $methodType = static::METHOD[$method] ?? null;

        if (! $methodType) {
            throw new Exception("the method type you provided doesn't exist");
        }

        return new $methodType;
    }
}
