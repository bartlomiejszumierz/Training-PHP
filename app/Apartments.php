<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartments extends Model
{
    public function cities(){
        return $this->belongsTo(Cities::class);
    }
}
