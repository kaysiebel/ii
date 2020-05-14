<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $guarded = [];

    public function entries()
    {
        return $this->hasMany('App\Entry');
    }

    public function consumptions()
    {
        return $this->hasMany('App\Consumption');
    }
}
