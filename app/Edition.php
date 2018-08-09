<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Edition extends Model
{
    public function parts()
    {
        return $this->hasMany('App\Part')->getModels();
    }
}
