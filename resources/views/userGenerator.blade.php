@extends('app')

@section('content')

    {!! Form::open() !!}
    <div class="form-group">
        {!! Form::label('users','How Many users?') !!}
        {!! Form::text('numOfUsers',$numOfUsers,['class' => 'form-control']) !!}
    </div>
    <div>
        {!! Form::label('add Address') !!}
        {!! Form::checkbox('address','1',null,['class' => 'checkbox']) !!}
        {!! Form::label('add Profile') !!}
    </div>
    <div>
        {!! Form::checkbox('profile','2',null,['class' => 'checkbox']) !!}
    </div>
    <br>
    {!! Form::submit('Generate',['class' => 'btn btn-primary form-control']) !!}
    {!! Form::close() !!}


    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif


    @if (count($userArray))
        <ul class="list-group">
            @foreach ($userArray as $user)
                <li class="list-group-item">@foreach ($user as $property)
                        <p>{{$property}}</p>
                    @endforeach
                </li>
            @endforeach
        </ul>
    @endif

@stop