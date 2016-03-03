@extends('app')
@section('content')

    <h1> Password Generator</h1>

    {!! Form::open() !!}
    <div>
        {!! Form::label('numOfWords','Range:3 - 15') !!}
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
    @if ($password !== '')
        <br>
        <div class="panel panel-success ">
            <div class="panel-heading"><h3 class="panel-title">Here Is Your Password</h3></div>
            <div class="panel-body">
        <p id='display-password'>{{$password}}</p>
            </div>
        </div>
        </div>
    @endif

    @if ($errors->any())
        <ul class='alert alert-danger'>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

@stop