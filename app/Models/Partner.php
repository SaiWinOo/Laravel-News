<?php

namespace App\Models;

use App\Traits\ImageCaster;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory,ImageCaster;

    public function types()
    {
        return $this->belongsTo(PartnerType::class);
    }


    public function getLogoAttribute()
    {
        return $this->castFile($this->attributes['logo']);
    }
}
