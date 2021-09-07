<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    //
    public function show($id)
    {
        return view('user.profile',['name'=>$id]);
    }
    public function display($name)
    {
        return view('user.display',['name'=>$name]);
    }
}
