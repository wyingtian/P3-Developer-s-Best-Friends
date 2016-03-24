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
        //default values when using get method
        $number_of_paragraphs = 5;
        $paragraphs=[];
        $view = View::make('loremIpsum',compact('number_of_paragraphs','paragraphs'));
        return $view;
    }

    public function postRandomText(Requests\RandomTextRequest $request){
        $number_of_paragraphs = Input::get('number_of_paragraphs');
        $generator = new LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs($number_of_paragraphs);
        $view = View::make('loremIpsum',compact('number_of_paragraphs','paragraphs'));
        return $view;
    }
}
