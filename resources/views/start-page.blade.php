<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stars.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Poppins:wght@700&display=swap" rel="stylesheet">
    <script src="{{ asset('/js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/38f5610335.js" crossorigin="anonymous"></script>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href={{asset('images/logoAPI.svg')}}>
</head>
<body>
<div class="night">
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
</div>
<div class="main-content" id="app">

    <div class="logo-big">
        <img src="{{asset('images/logoAPI.svg')}}" alt="" class="logo">
    </div>
    <h1 class="app-title">{{ config('app.name') }}</h1>
    <div class="button-wrapper">

        <a href="{{route('learn')}}" class="button-option" id="button-learn">
            <span class="button-text">Learn More</span>
        </a>


        <a href="{{route('register')}}" class="button-option" id="button-register">
            <span class="button-text">Register</span>
        </a>

    </div>

</div>
<x-footer/>


</body>
<style>
    .footer {
        position: fixed;
    }
    html, body {
        height: 100%;
        width: 100%;
        margin: 0;
    }

    a, a:hover, a:active, a:visited {
        color: #ffffff;
        text-decoration: none;

    }

    a:hover {
        color: #090a0f;
    }

    h1 {
        text-align: center;
        font-size: 1.8rem;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-family: 'Poppins', sans-serif;
    }

    .main-content {
        justify-content: center;
        align-content: center;
        margin: auto;
        color: #ffffff;
        max-width: 500px;
        width: 22vw;
        min-width: 250px;

    }

    .logo-big {
        display: flex;
        justify-content: center;
    }

    .logo {
        width: 18vw;
    }

    .button-wrapper {
        display: flex;
        justify-content: space-between
    }

    .button-option {
        position: relative;
        display: inline-block;
        background: none;
        text-align: center;
        width: 9vw;
        height: 8vh;
        border: 2px solid #ffffff;
        border-radius: 5px;
        min-width: 100px;
    }

    .button-option::before {
        content: " ";
        display: inline-block;
        height: 100%;
        vertical-align: middle;
    }

    .button-option:hover {
        background: #ffffff;
        color: #871E1E;
    }

    .button-text {
        display: inline-block;
        vertical-align: middle;
        font-size: 18px;
        line-height: normal;
        font-family: 'Lato', sans-serif;
    }
</style>
</html>
