<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class LoremIpsumPageController extends Controller
{
    public function index(){
        $numOfParagraph = 3;
        $view = View::make('loremIpsum')->with($numOfParagraph);
        return $view;
    }
}
