<?php

namespace App\Http\Controllers;

use Hackzilla\PasswordGenerator\Generator\HumanPasswordGenerator;
use Illuminate\Support\Facades\View;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;


class PasswordGeneratorController extends Controller
{
    public function getRandomPassword()
    {
        //default values when using get method
        $num_passwords = 3;
        $passwords = [];
        $val1 = false;
        $val2 = false;
        $SEPARATORS = ['-' => '-', '~' => '~', '_' => '_'];
        $separator = '-';
        $num_words = 5;
        $view = View::make('passwordGenerator', compact('num_words', 'num_passwords', 'separator', 'SEPARATORS', 'separator', 'passwords', 'val1', 'val2'));
        return $view;
    }

    public function postRandomPassword(Requests\RandomPasswordRequest $request)
    {
        //default values
        $passwords = [];
        $SPECIAL_CHARS = ['!', '@', '#', '$', '%', '^', '&', '*'];
        $SEPARATORS = ['-' => '-', '~' => '~', '_' => '_'];
        $val1 = false;
        $val2 = false;

        //get values from form
        $add_special_char = Input::get('add_special_char');
        $add_random_number = Input::get('add_random_number');
        $num_words = Input::get('num_words');
        $separator = Input::get('separator');
        $num_passwords  = Input::get('num_passwords');
        //generator logic
        for($i = 0 ; $i < $num_passwords ;$i++ ) {
            $password = "";
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
            array_push($passwords, $password);
        }
        $view = View::make('passwordGenerator', compact('num_words', 'num_passwords','separator', 'SEPARATORS', 'passwords', 'val1', 'val2'));
        return $view;
    }
}
