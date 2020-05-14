<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consumption extends Model
{
    protected $fillable = [
        'article_id',
        'amount_consumption'
    ];

    public function article()
    {
        return $this->belongsTo('App\Article');
    }
}
