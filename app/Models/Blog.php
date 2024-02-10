<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use function PHPUnit\Framework\stringContains;

class Blog extends Model
{
    use HasFactory;

    public function getThumbnailAttribute()
    {
        if(!str_contains(request()->url(), 'admin')){
            if($this->attributes['thumbnail']){
                return Storage::url($this->attributes['thumbnail']);
            }
            return $this->attributes['thumbnail'];
        }
        return $this->attributes['thumbnail'];
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'blog_categories');
    }
}
