<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        $message = "Welcome";
        return view('hello')->with('message', $message);
    }

    public function profile(){
        $name = "Mr. x";
        $id="11-11111-1";
        $p_name = "10-10-2010";
        $names=array("Mr. X", "Mr. Y", "Mr. Z");
        return view('profile')
        ->with('name', $name)
        ->with('id', $id)
        ->with('p_name', $p_name)
        ->with('names', $names);
    }
    public function teams(){
        $message = "Rocky";
        return view('team')->with('message', $message);
    }
    
    public function product(){
        $message = "Welcome";
        return view('hello')->with('message', $message);
    }
    public function contact(){
        $message = "Welcome";
        return view('hello')->with('message', $message);
    }
}