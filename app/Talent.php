<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    protected $fillable = [
        'name', 
        'description', 
        'price',
        'user_id',
        'category_id',
    ];

    public function users(){
        return $this->belongsTo('App\User');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function media(){
        return $this->hasMany('App\Media');
    }

}
