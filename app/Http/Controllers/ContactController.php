<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Message;

class ContactController extends Controller
{
    //

    public function getMessages()
    {
        $data = Message::all(); // Select * from messages;
        $data = Message::where('website','Pakistan')->get(); // Select * from messages;
        return $data;
    }
}
