<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Developer's Best Friends</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/app.js"></script>
    @yield('head')
</head>
<body>

<header class="header-basic-light">
    <div class="header-limiter">
        <h1><a href="/"><span>Developer's Best Friends</span></a></h1>
        <nav>
            <a href="{{ action('UserGeneratorController@getRandomUser') }}">Random User Generator &#8286; </a>
            <a href="{{ action('LoremIpsumController@getRandomText') }}">Lorem Ipsum Generator &#8286; </a>
            <a href="{{ action('PasswordGeneratorController@getRandomPassword') }}">Password generator; </a>
        </nav>
    </div>

</header>
<div class="container ">
    @yield('content')
</div>


<!-- Footer -->
<footer class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    &copy; {{ date('Y') }} &nbsp;&nbsp; www.yingtian.me
                </div>
            </div>
        </div>
</footer>


</body>
</html>
