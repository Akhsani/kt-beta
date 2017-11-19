<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryTalent extends Model
{
    protected $fillable = [
        'talent_id', 
        'category_id',
    ];
}
