<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class aboutUs extends Model
{
    protected $fillable=['id'];

    public function contents(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(LocaleContents::class,'element_id','id')->where('page','index')->where('section','aboutus');
    }

}
