<?php

namespace App\Http\Controllers;

use Badcow\LoremIpsum;
use App\Http\Requests;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;

class LoremIpsumPageController extends Controller
{
    public function index()
    {
       $number = "";
        $paragraphs=[];
        $view = View::make('loremIpsum',compact('number','paragraphs'));
        return $view;
    }

    public function GenerateText(Requests\requestRandomTextRequest $request){
        $number = Input::get('number');
        $generator = new LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs($number);
        $view = View::make('loremIpsum',compact('number','paragraphs'));
        return $view;
    }
}
