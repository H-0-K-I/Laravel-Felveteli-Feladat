@extends('layout.layout')

@section('content')
<!-- Introduction -->
<div class="text">
        <h1 style="color:#FFFFFF">
            <img src="../../img/logo.jpg" alt="Logo">
            Válasz Módosítása:
        </h1>
    </div>

    <!-- HTML form to edit answer -->
    <div class="text">
        <form action="/answers/edit/{{ $answer->id }}" method="POST">
            @csrf
            <input type="text" id="answer" name="answer" placeholder="Ide írja a választ" style="width:75%;font-size:32px;height:100px!important;" value="{{ $answer->answer }}" required>
            <br>
            <input class="save" type="image" name="submit" src="../../img/green_check.jpg" alt="submit" style="margin-top:47px;">
        </form>

        <!-- Button to navigate back -->
        <button class="back-button" style="width:300px;margin-top:47px;" onclick="window.location='{{ url("/questions/$answer->question_id") }}'">
                <h3>
                    Vissza   
                </h3>
        </button>
    </div>
@endsection