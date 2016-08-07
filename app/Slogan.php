<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slogan extends Model
{
    //
    public static function getSelected()
    {
        return static::where('selected',1)->get();
    }
}
