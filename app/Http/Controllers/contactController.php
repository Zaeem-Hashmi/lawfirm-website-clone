<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class contactController extends Controller
{
    function add(Request $req){
        $newMessage = new User;
        $newMessage->fname = $req->fname; 
        $newMessage->lname = $req->lname; 
        $newMessage->email = $req->email; 
        $newMessage->subject = $req->subject; 
        $newMessage->message = $req->message; 
        $newMessage->save();
        return redirect("/");
    }
}
