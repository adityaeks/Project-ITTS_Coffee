<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $pageTitle = 'ITTS Coffee';
        return view('welcome', compact('pageTitle'));
    }
}
