<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TalentUser extends Model
{
    protected $fillable = [
        'talent_id', 
        'user_id',
    ];
}
