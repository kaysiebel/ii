<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Article extends Model
{
    public function imageUrl()
    {
        if ($this->image) {
            return Storage::url($this->image);
        }
        return 'https://www.citizencider.com/wp-content/uploads/2019/01/placeholder.jpg';
    }

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
