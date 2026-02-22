<?php

declare(strict_types=1);
require 'vendor/autoload.php';

use App\LocalStorage;
use App\S3Storage;


$local = new LocalStorage();
$local->put('test.txt', 'nihaoma');

$s3 = new S3Storage();
$s3->put('test3.txt', 'nihaoma');gh