@extends('app')
@section('content')
    <h1>Generate random text</h1>
    <a href="{{ action('LoremIpsumPageController@index') }}">lorem-Ipsum generator</a>
    <div>
        <a href="{{ action('UserGeneratorPageController@index') }}">User generator</a>
    </div>
@stop