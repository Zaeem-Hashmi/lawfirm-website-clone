<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\logins;

class login extends Controller
{
    function check(Request $req){
        $user = logins::where(['email'=>$req->email])->first();
        if(!$user || $req->password != $user->password)
        {
            return "username or password incorrect";
        }
        else{
            $req->session()->put('user', $user);
            return redirect('/admin');
        }
    }
}
