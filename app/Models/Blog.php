<?php

namespace App\Models;

use App\Traits\ImageCaster;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use function PHPUnit\Framework\stringContains;

class Blog extends Model
{
    use HasFactory,ImageCaster;

    public function getThumbnailAttribute()
    {
        return $this->castFile($this->attributes['thumbnail']);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'blog_categories');
    }
}
