@extends('layout.layout')

@section('content')
    <!-- Introduction -->
    <div class="text">
            <h1 style="color:#FFFFFF">
                <img src="../../img/logo.jpg" alt="Logo">
                Új válasz a következő kérdésre:
            </h1>

            <h2>
                {{ $question->question }}
            </h2>
    </div>

    <!-- HTML form to create new answer -->
    <div class="text">
        <form action="/questions/{{ $question->id }}" method="POST">
            @csrf
            <input type="text" id="answer" name="answer" placeholder="Ide írja a választ" style="width:75%;font-size:32px;height:100px!important;" required>
            <br>
            <input class="save" type="image" name="submit" src="../../img/green_check.jpg" alt="submit" style="margin-top:47px;">
        </form>

        <!-- Button to navigate back -->
        <button class="back-button" onclick="window.location='{{ url("questions/$question->id") }}'" style="width:300px;margin-top:47px;">
                <h3>
                    Vissza   
                </h3>
        </button>
    </div>
    

@endsection