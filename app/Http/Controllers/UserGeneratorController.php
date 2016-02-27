<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Faker;
class UserGeneratorController extends Controller
{
    public function getRandomUser(){
        $numOfUsers = "";
        $addBirthday = "";
        $addProfile = "";
        $userArray=[];
        return View::make('userGenerator',compact('numOfUsers','userArray'));
    }

    public function postRandomUser(Requests\RandomUserRequest $request){

        $faker = Faker\Factory::create();
        $numOfUsers = Input::get('numOfUsers');

        $userArray=[];
        for( $i =0 ; $i<$numOfUsers;$i++ ){
            $user=[];
            $user['name'] =  $faker->name;
           // $user .= $faker->name;
            if(Input::get('address') === '1'){
                $user['address'] = $faker->address;
             //   $user .=$faker->address;
            }
            if(Input::get('profile') === '2'){
                $user['profile'] = $faker->text;
                //$user .=$faker->text;
            }
            array_push($userArray,$user);
        }

        return View::make('userGenerator',compact('numOfUsers','userArray'));
    }
}





