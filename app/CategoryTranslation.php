<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryTranslation extends Model
{
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id')->where();
    }
}
