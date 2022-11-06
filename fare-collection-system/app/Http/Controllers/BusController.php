<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusController extends Controller
{
    public function busAdd(){
        return view('addBus');
    }
}
