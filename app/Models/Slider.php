<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable=['slider_image'];
    public function contents(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(LocaleContents::class,'element_id','id')->where('page','index')->where('section','slider');
    }
}
