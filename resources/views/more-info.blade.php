<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/38f5610335.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Poppins:wght@700&display=swap" rel="stylesheet">
    <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <title>{{ config('app.name', 'Laravel') }} - Learn More</title>
    <link rel="icon" href={{asset('images/logoAPI.svg')}}>
</head>
<body>
<div id="app">
    <x-nav-bar/>

    <div class="content">
        <div class="text-box">
            <h2 class="hp-title">{{__('What is the Solar System API?')}}</h2>
            <p class="h4 hp-text">{{__('It is a simple, but very complete tool where you can query and see information
            about all the eight planets in the Solar System (Yes, Pluto is now part of the crew!). ')}}</p>
        </div>

        <hr>

        <div class="text-box">
            <h2 class="hp-title">{{__('What kind of information you will find here?')}}</h2>
            <p class="h4 hp-text">{{__('Everything!')}}</p>
            <p class="h4 hp-text">{{__('Nah! Just kidding... There is a list of attributes below, as well as the measurement units used
                in the API.')}}</p>
        </div>

        <table class="table table-striped">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Param</th>
                <th scope="col">Type</th>
                <th scope="col">Description</th>
            </tr>
            </thead>
            <tbody class="table-light">
            <tr>
                <td>Name</td>
                <td>String</td>
                <td>Name of the planet</td>
            </tr>
            <tr>
                <td>Number</td>
                <td>Integer</td>
                <td>Number of the planet(considering the orbital order)</td>
            </tr>
            <tr>
                <td>Surface Area</td>
                <td>Float</td>
                <td>Total surface area in km²</td>
            </tr>
            <tr>
                <td>Gravity</td>
                <td>Double</td>
                <td>Gravity's acceleration in m/s²</td>
            </tr>
            <tr>
                <td>Mass</td>
                <td>Float</td>
                <td>Mass of the planet in kg</td>
            </tr>
            <tr>
                <td>Radius</td>
                <td>Double</td>
                <td>Radius in km</td>
            </tr>
            <tr>
                <td>Orbital Period</td>
                <td>Double</td>
                <td>Amount of earth days the planet complete its orbit around the Sun</td>
            </tr>
            <tr>
                <td>Rotation Period</td>
                <td>Double</td>
                <td>Amount of earth days the planet need to complete a lap around its axis</td>
            </tr>
            <tr>
                <td>Image</td>
                <td>String</td>
                <td>Path to the image file</td>
            </tr>
            <tr>
                <td>Distance from Sun</td>
                <td>Float</td>
                <td>Distance fom the Sun to the planet in Astronomical Units (AU)</td>
            </tr>
            <tr>
                <td>Temperature</td>
                <td>Double</td>
                <td>Average temperature on planet's surface (in Celsius)</td>
            </tr>
            <tr>
                <td>Density</td>
                <td>Double</td>
                <td>Density of the planet measured in g/cm³</td>
            </tr>
            <tr>
                <td>Atmospheric Pressure</td>
                <td>Double</td>
                <td>Pressure of the atmosphere (in atm)</td>
            </tr>
            </tbody>
        </table>
    </div>
    <p class="h3 text-center">Did you get interested in using our API? Go ahead and <a href="{{route('register')}}">register</a>!
        It's completely free.</p>
</div>
<x-footer/>
</body>
<style>
    hr {
        background: #ffffff;
        height: 1px;
        margin: 3vw;
    }

    body {
        height: 100%;
        background: radial-gradient(ellipse at bottom, #1b2735 0%, #090a0f 100%) no-repeat;
        color: #ffffff;
    }

    table {
        margin: 0 5vw;
        width: 90vw !important;
        max-width: 800px;
    }

    .content {
        margin: 18vh 0;
    }

    .text-box {
        max-width: 800px;
        margin: 10vh 5vw;
    }

    .hp-title {
        font-family: 'Poppins', sans-serif;
    }

    .hp-text {
        font-family: 'Lato', sans-serif;
    }


</style>

</html>
