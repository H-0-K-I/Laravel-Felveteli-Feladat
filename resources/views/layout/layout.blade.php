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

            .center {
                margin-left: auto;
                margin-right: auto;
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

            .navigation-button {
                background-color:#FFFFFF;
                border: 6px solid #334255
            }

            .navigation-button:hover {
                border: 6px solid #FFFFFF;
            }

            .list-button {
                background-color: #E3E3E3
                width: 100%;
                text-align:left;
                color: #444444;
                border: 3px solid #334255;
            }

            .list-button:hover {
                border: 3px solid #E6E6E6;
            }

            .back-button {
                background-color:#E3E3E3;
                border: 3px solid #334255
            }

            .back-button:hover {
                border: 3px solid #E3E3E3;
            }

            .save {
                border: 3px solid #334255;
            }

            .save:hover {
                border: 3px solid #008A3D;
            }

            .delete-button {
                font-family: 'Nunito', sans-serif;
                font-size: 16px;
                color:#FFFFFF;
                background-color:#CC0000;
                border: 3px solid #E3E3E3;
            }

            .delete-button:hover {
                border: 3px solid #CC0000;
            }

            .answer-delete-button {
                font-family: 'Nunito', sans-serif;
                font-size: 16px;
                color:#FFFFFF;
                background-color:#CC0000;
                margin-left:20px;
                border: 3px solid #C1C1C1;
            }

            .answer-delete-button:hover {
                border: 3px solid #CC0000;
            }

            .upvote-button {
                font-family: 'Nunito', sans-serif;
                font-size: 16px;
                color:#FFFFFF;
                background-color:#0000CC;
                margin-left:60px;
                border: 3px solid #C1C1C1;
            }

            .upvote-button:hover {
                border: 3px solid #0000CC;
            }

            .q-modify-button {
                font-family: 'Nunito', sans-serif;
                font-size: 16px;
                color:#FFFFFF;
                background-color:#555555;
                border: 3px solid #E3E3E3;
                margin-left:20px;
            }

            .q-modify-button:hover {
                border: 3px solid #555555;
            }

            .a-modify-button {
                font-family: 'Nunito', sans-serif;
                font-size: 16px;
                color:#FFFFFF;
                background-color:#555555;
                border: 3px solid #C1C1C1;
                margin-left:20px;
            }

            .a-modify-button:hover {
                border: 3px solid #555555;
            }

        </style>
    </head>

    <!-- PAGE CONTENT -->
    <body class="antialiased" onload="showAlert()">

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

                <!--
                <li style="float:right;padding-right:50px;">
                    keresés
                </li>
                -->
            </ul>
        </div>
    </div>


    @yield('content')

    <footer onload="showAlert()">
        <!-- Alert if a POST request was successful -->
        @if(session()->has('message'))
            <script>
                function showAlert() {
                    alert("{{ session()->get('message') }}");
                }
            </script>
        @endif
    </footer>

</html>