<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Faker;

class UserGeneratorController extends Controller
{
    public function getRandomUser()
    {
        $val3=false;
        $numOfUsers = 5;
        $val1 = false;
        $val2 = false;
        $userArray = [];
        return View::make('userGenerator', compact('numOfUsers', 'userArray','val1','val2','val3'));
    }

    public function postRandomUser(Requests\RandomUserRequest $request)
    {


        $numOfUsers = Input::get('numOfUsers');
        $userArray = [];
        $val1 = false;
        $val2 = false;
        $val3 = false;
        $faker = Faker\Factory::create();
        for ($i = 0; $i < $numOfUsers; $i++) {
            $user = [];
            $user['name'] = $faker->name;
            if (Input::get('birthDate') === '1') {
                $user['birthDate'] = $faker->dateTimeThisCentury->format('Y-m-d');
                $val1 = true;
            }
            if (Input::get('address') === '2') {
                $user['address'] = $faker->address;
                $val2 = true;
            }
            if (Input::get('profile') === '3') {
                $user['profile'] = $faker->text;
                $val3 = true;
            }
            array_push($userArray, $user);
        }



        return View::make('userGenerator', compact('numOfUsers', 'userArray','val1','val2','val3'));
    }
}





