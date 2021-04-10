@extends('layout.layout')

@section('content')
        <!-- List of answers to a specific question -->
        <div>
            Kérdés: {{ $question->question }}
            Válaszok: @foreach($answers as $answer) {{ $answer->answer }}, és ez {{ $answer->upvotes }} felhasználó szerint hasznos @endforeach
        </div>
        <button class="back-button" onclick="window.location='{{ url("questions") }}'" style="width:300px;">
                        <h3>
                            Vissza   
                        </h3>
        </button>
@endsection