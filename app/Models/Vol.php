<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vol extends Model
{
    use HasFactory;
    public function abonne(){
        return $this->belongsTo('App\Abonne');
    }
}

