<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    public function category()
    {
        return $this->hasOne('App\Category')->getModel();
    }
    public function type()
    {
        return $this->hasOne('App\Type',"post_id")->getModel();
    }
}
