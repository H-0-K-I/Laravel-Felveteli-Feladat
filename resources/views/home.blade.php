@extends('layout.layout')

@section('content')

    <!-- Introduction -->
    <div class="text">
        <h1>
            <img src="img/logo.jpg" alt="Logo">
            GYIK - Laravel
        </h1>

        <h2>
            Magyar nyelvű portál a Laravel keretrendszerrel kapcsolatban felmerülő kérdésekhez.
        </h2>
    </div>

    <!-- Navigation options -->
    <div class="text" style="padding-top:100px;">
        <table class="center">
            <tr>
                <td style="width:400px;">
                    <button class="navigation-button" onclick="window.location='{{ url("questions") }}'" style="width:300px;">
                        <h3>
                            Beküldött kérdések megtekintése
                            <img src="img/arrow_right.png" alt="Arrow right" style="width:20px;height:20px;">    
                        </h3>
                    </button>
                </td>

                <td>
                    <h2>
                        vagy
                    </h2>
                </td>

                <td style="width:400px;">
                    <button class="navigation-button" onclick="window.location='{{ url("questions/create") }}'" style="width:300px;">
                        <h3>
                            Új kérdés feltöltése
                            <img src="img/arrow_up.png" alt="Arrow up" style="width:20px;height:20px;">    
                        </h3>
                    </button>
                </td>
            </tr>
        </table>
    </div>
@endsection