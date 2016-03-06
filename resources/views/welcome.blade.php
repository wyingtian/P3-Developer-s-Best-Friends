@extends('layouts.master')
@section('head')
    <link rel="stylesheet" href="/css/welcome.css">
@stop

@section('content')
    <br>
    <div class="row text-center">

        <div class="col-md-4 text-thin">
            <img class="img-responsive center" src="images/lorem-ipsum.jpg" alt="lorem-ipsum generator image">
            <a href="{{ action('LoremIpsumController@getRandomText') }}">lorem-Ipsum generator</a>


        </div>
        <div class="col-md-4 text-thin">
            <img class="img-responsive center" src="images/user-gen.png" alt="final-project image">
            <a href="{{ action('UserGeneratorController@getRandomUser') }}">User generator</a>

        </div>
        <div class="col-md-4 text-thin">
            <img class="img-responsive center" src="images/pass-gen.png" alt="password generator image">
            <a href="{{ action('PasswordGeneratorController@getRandomPassword') }}">Password generator</a>

        </div>
    </div>


@stop