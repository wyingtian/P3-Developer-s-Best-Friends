<?php

namespace App\Http\Controllers;

use Hackzilla\PasswordGenerator\Generator\HumanPasswordGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;


class PasswordGeneratorController extends Controller
{
    public function getRandomPassword()
    {
        $val1 = false;
        $val2 = false;
        $SEPARATORS = ['-' => '-', '~' => '~', '_' => '_'];
        $separator = '-';
        $password = '';
        $num_words = 10;
        $view = View::make('passwordGenerator', compact('num_words', 'separator', 'SEPARATORS', 'separator', 'password', 'val1', 'val2'));
        return $view;
    }

    public function postRandomPassword(Requests\RandomPasswordRequest $request)
    {
        //default values
        $password = "";
        $SPECIAL_CHARS = ['!', '@', '#', '$', '%', '^', '&', '*'];
        $SEPARATORS = ['-' => '-', '~' => '~', '_' => '_'];
        $val1 = false;
        $val2 = false;
        //get values from form
        $add_special_char = Input::get('add_special_char');
        $add_random_number = Input::get('add_random_number');
        $num_words = Input::get('num_words');
        $separator = Input::get('separator');

        // generator logic
        if ($add_random_number == '1') {
            $val1 = true;
            $password = $password . rand(0, 9);
        }
        $generator = new HumanPasswordGenerator();
        $generator
            ->setWordList('/usr/share/dict/words')
            ->setWordCount(intval($num_words))
            ->setWordSeparator($separator);

        $password .= $generator->generatePassword();
        if ($add_special_char == '2') {
            $val2 = true;
            $password .= $SPECIAL_CHARS[rand(0, 7)];
        }

        $view = View::make('passwordGenerator', compact('num_words', 'separator', 'SEPARATORS', 'password', 'val1', 'val2'));
        return $view;
    }
}
