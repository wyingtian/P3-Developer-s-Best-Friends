@extends('app')

@section('content')
   <h1> Lorem Ipsum Generator</h1>

    <?php
    use Illuminate\Support\Facades\Input;
    $number = "";
    $number = Input::get('number');
    ?>

    <form method="get">
        <lable>Paragraphs</lable>
        <input type="text" name="number" value="<?= $number ?>"/>
        <button type="submit"> Generate!</button>
    </form>

    <?php
    $generator = new Badcow\LoremIpsum\Generator();
    $paragraphs = $generator->getParagraphs($number);
    echo implode('<p>', $paragraphs);
    ?>

@stop
@section('footer')
@stop