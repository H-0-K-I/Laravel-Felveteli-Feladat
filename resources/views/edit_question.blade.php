@extends('layout.layout')

@section('content')
<!-- Introduction -->
<div class="text">
        <h1 style="color:#FFFFFF">
            <img src="../../img/logo.jpg" alt="Logo">
            Kérdés Módosítása:
        </h1>
    </div>

    <!-- HTML form to edit question -->
    <div class="text">
        <form action="/questions/edit/{{ $question->id }}" method="POST">
            @csrf
            <input type="text" id="question" name="question" placeholder="Ide írja a kérdést" style="width:75%;font-size:32px;height:100px!important;" value="{{ $question->question }}" required>
            <br>
            <input class="save" type="image" name="submit" src="../../img/green_check.jpg" alt="submit" style="margin-top:47px;">
        </form>

        <!-- Button to navigate back -->
        <button class="back-button" style="width:300px;margin-top:47px;" onclick="window.location='{{ url("/questions/$question->id") }}'">
                <h3>
                    Vissza   
                </h3>
        </button>
    </div>
@endsection