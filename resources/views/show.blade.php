@extends('layout.layout')

@section('content')
        <!-- Introduction -->
        <div class="text">
                <h1>
                <img src="../../img/logo.jpg" alt="Logo">
                GYIK - Laravel
                </h1>
        </div>

        <!-- Question with the ability to delete it -->
        <div>
                <table class="center" style="width:75%;">
                        <tr>
                                <td style="padding:10px;float:left;width:100%;background-color:#E3E3E3;">
                                        <h2 style="margin-left:20px;color:#000000;">
                                                {{ $question->question }}

                                                <form action="/questions/{{ $question->id }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="delete-button" style="color:#FFFFFF">
                                                                Törlés
                                                        </button>
                                                </form>
                                        </h2>
                                </td>
                        </tr>

                        <!-- List of answers to a specific question -->
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