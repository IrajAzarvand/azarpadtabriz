<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LocaleContents extends Model
{
    protected $fillable=[
        'page',
        'section',
        'element_id',
        'locale',
        'element_title',
        'element_content',
    ];

    public function slider(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Slider::class);
    }


    public function aboutUs(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(aboutUs::class);
    }

    public function productSample(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(ProductSample::class);
    }

    public function productIntroduction(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(ProductIntroduction::class);
    }

    public function productAdvantages(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(ProductAdvantage::class);
    }
    public function gallery(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Gallery::class);
    }
}
