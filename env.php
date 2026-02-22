<?php

$file = file('.env', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// var_dump($file);


foreach ($file as $line) {
    if (str_starts_with($line, '#')) continue;

    [$key, $value] = explode('=', $line, 2);

    $_ENV[trim($key)] = trim($value);
}
