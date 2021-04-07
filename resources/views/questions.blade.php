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
                        {{ $question->id }} - {{ $question->question }}
                </div>
        @endforeach
@endsection