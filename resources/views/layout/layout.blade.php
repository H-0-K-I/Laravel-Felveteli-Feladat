<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GYIK - Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                --bg-opacity:1;
                background-color:#334255
            }

            h1 {
                color:#F05340;
                font-size: 80px
            }

            h2 {
                color:#FFFFFF;
                font-size: 35px
            }

            .antialiased {
                -webkit-font-smoothing:antialiased;
                -moz-osx-font-smoothing:grayscale
            }

            .header {
                background-color:#F05340;
                padding:5px
            }

            .text {
                margin: auto;
                text-align: center
            }

            ul#horizontal {
                list-style-type:none;
                padding: 5px;
                margin: 0
            }

            ul#horizontal li {
                display: inline;
                list-style-type:none;
                padding-left: 10px;
                margin: 0
            }

            .home-button-div {
                color:#FFFFFF;
                font-size: 20px;
                font-weight: bold;
                padding-left: 5px
            }

            .home-button:hover {
                background-color:#D53320
            }

            .home-button {
                background-color:#F05340;
                color:#FFFFFF;
                font-family: 'Nunito', sans-serif;
                font-size: 20px;
                font-weight: bold;
                padding-left: 5px;
                outline:white solid 0px;
                border: white solid 0px;
            }

        </style>
    </head>

    <!-- PAGE CONTENT -->
    <body class="antialiased">

    <!-- Header -->
    <div class="header">
        <div class="home-button-div">
            <ul id="horizontal">
                <li> 
                    <button class="home-button" onclick="window.location='{{ url("home") }}'">Home</button>
                </li>

                <li style="padding-left:40px">
                    Laravel FAQ - HU
                </li>
            </ul>
        </div>
    </div>


    @yield('content')

</html>