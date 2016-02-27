@extends('app')
@section('content')
    <h1>Generate random text</h1>
    <a href="{{ action('LoremIpsumController@getRandomText') }}">lorem-Ipsum generator</a>
    <div>
        <a href="{{ action('UserGeneratorController@getRandomUser') }}">User generator</a>
    </div>
@stop