<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WelcomePageController extends Controller
{
    public function getWelcomePage(){
        return view('welcome');
    }
}
