@extends('layout.layout')

@section('content')
        <!-- Introduction -->
        <div class="text">
                <h1>
                <img src="img/logo.jpg" alt="Logo">
                GYIK - Laravel
                </h1>

                <h2>
                Beküldött kérdések:
                </h2>
        </div>

        <!-- List of all questions -->
        @foreach($questions as $question)
                <div>
                        <table class="center" style="width:75%;" >
                                <tr>
                                        <td style="float:left;width:100%">
                                                <button class="list-button" style="background-color:#E3E3E3;width:100%" onclick="window.location='{{ url("questions/$question->id") }}'">
                                                        <h3 style="margin-left:20px">
                                                                ● {{ $question->question }} <img src="../../img/black-curved-right-arrow.png" alt="Black curved rigt arrow" style="width:40px;height:40px;float:right;">
                                                        </h3>

                                                        <h4 style="margin-left:60px">
                                                                {{ $question->no_of_answers }} válasz
                                                        </h4>
                                                </button>
                                        </td>
                                </tr>
                        </table>
                </div>
        @endforeach

        <!-- Button to navigate back -->
        <div>
                <table class="center">
                        <td>
                                <button class="back-button" onclick="window.location='{{ url("home") }}'" style="width:300px;">
                                        <h3>
                                        Vissza   
                                        </h3>
                                </button>
                        </td>
                </table>
        </div>
@endsection