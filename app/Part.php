<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Part extends Model
{
    public function edition()
    {
        return $this->belongsTo('App\Edition',"edition_id")->get()->first();
    }
}