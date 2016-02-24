@extends('app')

@section('content')
    <?php require_once '../vendor/fzaninotto/faker/src/autoload.php';
    $faker = Faker\Factory::create();
    echo "<p>$faker->name</p>";
    echo "<p>$faker->name</p>";
    echo "<p>$faker->name</p>";
    echo "<p>$faker->name</p>";
    echo "<p>$faker->name</p>";
    echo "<p>$faker->name</p>";
    ?>
@stop