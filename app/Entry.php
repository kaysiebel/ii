<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $fillable = [
        'article_id',
        'amount_entry'
    ];

    public function article()
    {
        return $this->belongsTo('App\Article');
    }
}
