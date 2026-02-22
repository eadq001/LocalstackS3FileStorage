<?php
declare(strict_types=1);

$root = 'storage';
$file = 'one/two/three/test.txt';
$contents = 'Hello World';
$savePath = "{$root}/{$file}";

mkdir(dirname($savePath), 0777, true);

file_put_contents($savePath, $contents);


