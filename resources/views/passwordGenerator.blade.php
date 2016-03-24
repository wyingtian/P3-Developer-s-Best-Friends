@extends('layouts.master')
@section('content')

    <h1> Password Generator</h1>

    {!! Form::open() !!}
    <div>
        {!! Form::label('numOfPassword','Number of passwords you want? (Range:1 - 10)') !!}
        {!! Form::text('num_passwords',$num_passwords,['class' => 'form-control','id' => 'numOfPassword','maxlength' => '2']) !!}
    </div>
    <div>
        {!! Form::label('numOfWords','Number of words in each password? (Range:3 - 10)') !!}
        {!! Form::text('num_words',$num_words,['class' => 'form-control','id' => 'numOfWords','maxlength' => '2']) !!}
    </div>
    <div>
        {!! Form::label('add_random_number') !!}
        {!! Form::checkbox('add_random_number','1',$val1,['class' => 'form-group checkbox','id' => 'add_random_number']) !!}
        {!! Form::label('add_special_char') !!}
        {!! Form::checkbox('add_special_char','2',$val2,['class' => 'form-group checkbox','id' => 'add_special_char']) !!}
        {!! Form::label('the_separator') !!}
        {!! Form::select('separator', $SEPARATORS,$separator,['class' => 'form-group ','id' => 'the_separator']) !!}
    </div>

    {!! Form::submit('Generate',['class' => 'btn btn-primary form-control']) !!}

    {!! Form::close() !!}

    @if ($errors->any())
        <div class="row">
        <ul class='alert alert-danger'>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        </div>
    @endif
    @if (count($passwords))
        <div class="row">
        <br>
        <div class="panel panel-success ">
            <div class="panel-heading"><h3 class="panel-title">Here Is Your Password</h3></div>
            <div class="panel-body">
                @foreach ($passwords as $password )
                    <p id='display-password'>{{$password}}</p>
                    <br>
                @endforeach
            </div>
        </div>
        </div>
    @endif

@stop