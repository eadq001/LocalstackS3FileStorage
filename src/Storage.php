<?php
namespace App;

require 'vendor/autoload.php';

use App\StorageMap;

class Storage
{
    public static function resolve(string $method) {
        return StorageMap::resolve($method);
    }

}
