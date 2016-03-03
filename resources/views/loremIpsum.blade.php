@extends('app')

@section('content')

    <h1> Lorem Ipsum Generator</h1>

    {!! Form::open() !!}
    <div class="form-group">
        {!! Form::label('paragraphs','How many paragraphs you want? ( Max: 99 )') !!}
        {!! Form::text('number',$number,['class' => 'form-control','id' => 'paragraphs', 'maxlength' => '2']) !!}
    </div>
    <br>
    <br>
    <div class="form-group">
        {!! Form::submit('Generate!',['class' => 'btn btn-primary form-control']) !!}
    </div>

    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    @if (count($paragraphs))
        <br>
        <div class="panel panel-success ">
            <div class="panel-heading"><h3 class="panel-title">Here Is Your Random Text</h3></div>
            <div class="panel-body">
    @foreach ($paragraphs as $paragraph )
        <p>{{$paragraph}}</p>
        <br>

    @endforeach
            </div>
        </div>
        </div>
    @endif

@stop
