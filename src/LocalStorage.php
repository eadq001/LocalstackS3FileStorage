<?php

namespace App;

require 'vendor/autoload.php';

class LocalStorage implements FileStorage
{
    public function put(string $filename, string $content)
    {
        $root = __DIR__ . '/../storage';

        if (file_exists($root . '/' . $filename)) {
            echo 'file already exist, please choose another filename.\n';
            return;
        }
        else {
            mkdir(dirname($root . '/' . $filename), 0777, true);
        }
        
        file_put_contents($root . '/' . $filename, $content);
        echo "local file successfully uploaded";
    }
}
