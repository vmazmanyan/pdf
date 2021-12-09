<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait AWSStorageTrait
{
    public function uploadAWSStorage($file)
    {
       $path = Storage::disk('s3')->put('images',$file);

    }

    public function getAWSStorage($filePath)
    {
        $file = Storage::disk('s3')->get($filePath);

    }


}
