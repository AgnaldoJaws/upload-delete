<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;


class UploadController extends Controller {
    
    public function show()
    {
      $img = '1518712279.png';
      Storage::delete(public_path('images/comercio/'.$img));
      
      //Storage::delete('/home/agnaldo/Documentos/laravel/laravel/public/images/comercio/1518712279.png');
    }
}
