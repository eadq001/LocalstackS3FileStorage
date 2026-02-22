<?php

namespace App;

interface FileStorage
{
    public function put(string $filename, string $content);
}