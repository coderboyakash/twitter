<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function tweets()
    {
        return $this->hasMany('App\Tweet');
    }
}
