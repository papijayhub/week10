<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    //
    public function merchandises()
    {  
        return $this->hasOne('App\Mechandise');
    }
}
