<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Log;

class CloudinaryController extends Controller
{
    public function upload()
    {
        error_log('Some message here.');
        info('This is some useful information.');
        Log::info('This is some useful information.');
        echo "bruh";
        // $uploadedFileUrl = Cloudinary::upload($request->file('file')->getRealPath())->getSecurePath();
        // session()->put('cld_image', "agiujagojao");

        //   return "<script>
        //   localStorage.setItem('cld_url', {$uploadedFileUrl});
        // </script>";
    }
}
