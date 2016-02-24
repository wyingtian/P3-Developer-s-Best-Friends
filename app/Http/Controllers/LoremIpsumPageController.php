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
        $number = Input::get('number');
        $generator = new LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs($number);
        $view = View::make('loremIpsum',compact('number','paragraphs'));
        return $view;
    }
}
