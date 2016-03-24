@extends('layouts.master')

@section('content')

    <h1> Lorem Ipsum Generator</h1>
    <div class="row">
        {!! Form::open() !!}
        <div class="form-group">
            {!! Form::label('paragraphs','How many paragraphs you want? ( Max: 99 )') !!}
            {!! Form::text('number_of_paragraphs',$number_of_paragraphs,['class' => 'form-control','id' => 'paragraphs', 'maxlength' => '2']) !!}
        </div>
        <br>
        <br>
        <div class="form-group">
            {!! Form::submit('Generate!',['class' => 'btn btn-primary form-control']) !!}
        </div>

        {!! Form::close() !!}
    </div>
    @if ($errors->any())
        <div class="row">
            <br>
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (count($paragraphs))
        <div class="row">
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
