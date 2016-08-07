<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Slogan;

use App\Country;
use App\Post;
use App\User;

class MainController extends Controller
{


    public function getIndex()
    {
        $slogans = Slogan::getSelected();

        return view('index',[
            "slogans" => $slogans
        ]);
    }


    public function getTest()
    {
//        return Post::with('user')->get();
//        return User::with('country')->get();
        return Country::with('posts')->get();
    }

}
