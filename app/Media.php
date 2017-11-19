<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = [
        'url', 
        'type', 
        'talent_id',
    ];

    public function talents(){
        return $this->belongsTo('App\Talent');
    }
}
