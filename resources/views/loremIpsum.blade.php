@extends('app')

@section('content')

    <h1> Lorem Ipsum Generator</h1>

    {!! Form::open() !!}
    <div class="form-group">
        {!! Form::label('paragraphs','How many paragraphs you want?') !!}
        {!! Form::text('number',$number,['class' => 'form-control']) !!}
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

    <?php
    echo "<p>" . implode('<p></p>', $paragraphs) . '</p>';
    ?>

@stop
@section('footer')
@stop