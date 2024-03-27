<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    use HasFactory;

    public static function image_upload($thumbnail, $destinationPath = "Image")
    {
        $extension = $thumbnail->getClientOriginalExtension();
        $fileName = time() . rand(11111, 99999) . '.' . $extension;
        $path = 'public/images/' . $destinationPath . '/';
        $path = $thumbnail->storeAs($path, $fileName);
        return $fileName;
    }
}
