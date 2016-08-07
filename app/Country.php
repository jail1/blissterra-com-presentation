<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function posts()
    {
        dd($this->hasManyThrough('App\Post', 'App\User')->toSql());
        return $this->hasManyThrough('App\Post', 'App\User');
    }
}
