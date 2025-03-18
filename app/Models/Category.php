<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'category_name'
    ];


    public function product() {
        return $this->belongsTo('product_id');
    }
}
