@extends('app')

@section('content')

    <h1> Lorem Ipsum Generator</h1>

    {!! Form::open() !!}
    <div class="form-group">
        {!! Form::label('paragraphs','How many paragraphs you want?') !!}
        {!! Form::text('number',$number,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Generate!',['class' => 'btn btn-primary form-control']) !!}
         </div>

    {!! Form::close() !!}

    <?php
    echo "<p>". implode('<p></p>', $paragraphs) .'</p>';
    ?>

@stop
@section('footer')
@stop