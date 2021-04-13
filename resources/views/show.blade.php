@extends('layout.layout')

@section('content')
        <!-- Introduction -->
        <div class="text">
                <h1>
                <img src="../../img/logo.jpg" alt="Logo">
                GYIK - Laravel
                </h1>
        </div>

        <!-- Question with the ability to edit or delete it -->
        <div>
                <table class="center" style="width:75%;">
                        <tr>
                                <td style="padding:10px;float:left;width:100%;background-color:#E3E3E3;">
                                        <h2 style="margin-left:20px;color:#000000;">
                                                {{ $question->question }} <br>

                                                <table>
                                                        <tr>
                                                                <td>
                                                                        <button class="q-modify-button" onclick="window.location='{{ url("questions/edit/$question->id") }}'">
                                                                                Módosítás
                                                                        </button>
                                                                </td>

                                                                <td style="padding-left:20px;">
                                                                        <form action="/questions/{{ $question->id }}" method="POST">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button class="delete-button">
                                                                                        Törlés
                                                                                </button>
                                                                        </form>
                                                                </td>
                                                        </tr>
                                                </table>
                                        </h2>
                                </td>
                        </tr>

                        <!-- List of answers to a specific question with the ability to upvote edit or delete -->
                        @if(count($answers) == 0)
                                <tr>
                                        <td style="padding:10px;float:left;width:100%;background-color:#C1C1C1;">
                                                <h3 style="margin-left:40px">
                                                        Erre a kérdésre még nem érkezett válasz.
                                                </h3>
                                        </td>
                                </tr>
                        @else
                                @foreach($answers as $answer)
                                <tr>
                                        <td style="padding:10px;float:left;width:100%;background-color:#C1C1C1;">
                                                <h3 style="margin-left:40px">
                                                        ● {{ $answer->answer }}
                                                </h3>
                                                <h5 style="margin-left:60px">
                                                        Ez a válasz {{ $answer->upvotes }} felhasználó szerint hasznos
                                                </h5>

                                                <table>
                                                        <tr>
                                                                <td>
                                                                        <form action="/answers/upvote/{{ $answer->id }}" method="POST">
                                                                                @csrf
                                                                                <button class="upvote-button">
                                                                                        + Hasznos válasz
                                                                                </button>
                                                                        </form>

                                                                </td>

                                                                <td>
                                                                        <button class="a-modify-button" onclick="window.location='{{ url("answers/edit/$answer->id") }}'">
                                                                                Módosítás
                                                                        </button>
                                                                </td>

                                                                <td>
                                                                        <form action="/questions/deleteanswer/{{ $answer->id }}" method="POST">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button class="answer-delete-button">
                                                                                        Törlés
                                                                                </button>
                                                                        </form>
                                                                </td>
                                                        </tr>
                                                </table>
                                        </td>
                                </tr>
                                @endforeach
                        @endif

                        <!-- Buttons -->
                        <tr>
                                <td style="padding-top:50px;text-align:center;" >

                                        <!-- Button to navigate back -->
                                        <button class="back-button" style="width:300px;" onclick="window.location='{{ url("answers/create/$question->id") }}'">
                                                <h3>
                                                        Új válasz hozzáadása
                                                </h3>
                                        </button>

                                         <!-- Button to add answer -->
                                        <button class="back-button" onclick="window.location='{{ url("questions") }}'" style="width:300px;">
                                                <h3>
                                                        Vissza
                                                </h3>
                                        </button>
                                </td>
                        </tr>
                </table>
        </div>
@endsection