@extends('layout.layout')

@section('content')
    <!-- Introduction -->
    <div class="text">
        <h1 style="color:#FFFFFF">
            <img src="../../img/logo.jpg" alt="Logo">
            Új kérdés feltöltése
        </h1>
    </div>

    <!-- HTML form to create new question -->
    <div class="text">
        <form action="/questions" method="POST">
            @csrf
            <h2>Mire keres választ?</h2>
            <input type="text" id="question" name="question" placeholder="Ide írja a kérdést" style="width:75%;font-size:32px;height:100px!important;" required>
            <br>
            <input class="save" type="image" name="submit" src="../../img/green_check.jpg" alt="submit" style="margin-top:47px;">
        </form>

        <!-- Button to navigate back -->
        <button class="back-button" onclick="window.location='{{ url("home") }}'" style="width:300px;margin-top:47px;">
                <h3>
                    Vissza   
                </h3>
        </button>
    </div>
@endsection