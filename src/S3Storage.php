<?php

declare(strict_types=1);

namespace App;

require 'vendor/autoload.php';


use App\FileStorage;
use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;

// $root = 'storage';
// $file = 'one/two/three/test.txt';
// $contents = 'Hello World';
// $savePath = "{$root}/{$file}";


class S3Storage implements FileStorage
{
    // public function __construct(protected S3Client $s3Client) {}
    public function put(string $filename, string $content)
    {

        $s3 = new S3Client([
            'version' => 'latest',
            'region'  => 'us-east-1',
            'endpoint' => 'http://localhost:4566',
            'use_path_style_endpoint' => true, // VERY IMPORTANT for LocalStack
            'credentials' => [
                'key'    => $_ENV['S3_KEY'],
                'secret' => $_ENV['S3_SECRET'],
            ],
        ]);

        // $s3->createBucket([
        //     'Bucket' => 'oop',
        // ]);

        try {
            $s3->putObject([
                'Bucket' => 'oop',
                'Key'    => $filename,
                'Body'   => $content,
                'ACL'    => 'public-read',
            ]);
            echo 'File is uploaded in S3 successfully.';
        } catch (S3Exception $e) {
            echo "There was an error uploading the file.";
        }
    }
}
