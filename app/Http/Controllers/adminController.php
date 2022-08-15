<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class adminController extends Controller
{
    function list(){
        $data = User::all();
        return view("admin",["data"=>$data]);
    }
}
