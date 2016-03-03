<?php

namespace App\Http\Controllers;

use Badcow\LoremIpsum;
use App\Http\Requests;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;

class LoremIpsumController extends Controller
{
    public function getRandomText()
    {
        $number = 5;
        $paragraphs=[];
        $view = View::make('loremIpsum',compact('number','paragraphs'));
        return $view;
    }

    public function postRandomText(Requests\RandomTextRequest $request){
        $number = Input::get('number');
        $generator = new LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs($number);
        $view = View::make('loremIpsum',compact('number','paragraphs'));
        return $view;
    }
}
