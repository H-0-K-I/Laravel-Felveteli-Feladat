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
                background-color:#1a202c
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

            .home-button-text {
                padding: 5px;
                display:inline-block
            }

            .home-button-text:hover {
                background-color:#D53320
            }

        </style>
    </head>


    <!-- PAGE CONTENT -->
    <body class="antialiased">

        <!-- Header -->
        <div class="header">
            <div class="home-button-div">
                <ul id="horizontal">

                    <li class="home-button-text">
                        Home
                    </li>

                    <li style="padding-left:40px">
                        Laravel FAQ - HU
                    </li>

                </ul>
            </div>
        </div>

        <!-- Introduction -->
        <div class="text">
            <h1>
                GYIK - Laravel
            </h1>

            <h2>
                Magyar nyelvű portál a Laravel keretrendszerrel kapcsolatban felmerülő kérdésekhez.
            </h2>
        </div>

        <!-- Questions list -->
        <div>
        
        </div>
    </body>
</html>
