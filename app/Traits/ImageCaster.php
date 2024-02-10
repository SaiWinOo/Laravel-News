<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait ImageCaster
{
    public function castFile($file)
    {
        if(!str_contains(request()->url(), 'admin')){
            if($file){
                return Storage::url($file);
            }
            return $file;
        }
        return $file;
    }
}
