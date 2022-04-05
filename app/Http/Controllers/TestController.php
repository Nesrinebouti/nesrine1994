<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()

    {
         $myName = "Stephanie";
         return view('tshirt',compact('myName'));
    }
}
