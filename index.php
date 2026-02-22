<?php

declare(strict_types=1);
require 'vendor/autoload.php';
require 'env.php';


use App\Storage;

Storage::resolve('s3')->put('test5.txt', 'nihaoma');
