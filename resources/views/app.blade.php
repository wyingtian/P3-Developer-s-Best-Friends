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
</head>
<body>

<header class="header-fixed">
    <div class="header-limiter">
        <h1><a href="">Company<span>logo</span></a></h1>
        <nav>
            <a href="{{ action('UserGeneratorController@getRandomUser') }}">User generator</a>
            <a href="{{ action('LoremIpsumController@getRandomText') }}">Lorem Ipsum</a>
            <a href="{{ action('PasswordGeneratorController@getRandomPassword') }}">Password generator</a>
        </nav>
    </div>

</header>

<div class="container">
    @yield('content')
</div>

<footer class="footer-distributed">

    <div class="footer-right">

        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-github"></i></a>

    </div>

    <div class="footer-left">

        <p class="footer-links">
            <a href="#">Home</a>
            ·
            <a href="#">Blog</a>
            ·
            <a href="#">Pricing</a>
            ·
            <a href="#">About</a>
            ·
            <a href="#">Faq</a>
            ·
            <a href="#">Contact</a>
        </p>

        <p>Company Name &copy; 2015</p>
    </div>

</footer>


</body>
</html>
