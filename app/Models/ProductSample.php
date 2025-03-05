<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductSample extends Model
{
    protected $fillable = [
        'image_name',
    ];

    public function contents(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(LocaleContents::class,'element_id','id')->where('page','index')->where('section','product_samples');
    }

}
