@extends('layouts.master')

@section('content')

    <h1> User Generator</h1>
    <div class="row ">
        {!! Form::open() !!}
        <div class="form-group">
            {!! Form::label('users','How Many users? ( Max: 99 )') !!}
            {!! Form::text('numOfUsers',$numOfUsers,['class' => 'form-control','id' => 'users','maxlength' => '2']) !!}
        </div>
        {!! Form::label('addBirthDate','add birth date') !!}
        <div>
            {!! Form::checkbox('birthDate','1',$val1,['class' => 'checkbox','id' => 'addBirthDate']) !!}
        </div>
        <div>
            {!! Form::label('addAddress','add Address') !!}
            {!! Form::checkbox('address','2',$val2,['class' => 'checkbox','id' => 'addAddress']) !!}
        </div>
        {!! Form::label('addProfile','add Profile') !!}
        <div>
            {!! Form::checkbox('profile','3',$val3,['class' => 'checkbox','id' => 'addProfile']) !!}
        </div>
        <br>
        {!! Form::submit('Generate',['class' => 'btn btn-primary form-control']) !!}
        <br>
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


    @if (count($userArray))
        <div class="row ">
            <br>
            <div class="panel panel-success ">
                <div class="panel-heading"><h3 class="panel-title">Here Is Your Random Users</h3></div>
                <div class="panel-body">
                    <ul class="list-group">
                        @foreach ($userArray as $user)
                            <li class="list-group-item">@foreach ($user as $property)
                                    <p>{{$property}}</p>
                                @endforeach
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif


@stop