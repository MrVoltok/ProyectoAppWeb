@extends('layouts.app')

@section('content')
<section class="contact-content pad-sect">
    <div>
        <div class="contact-info">
            <div>
                <h1>¡Contáctanos!</h1>
                <h3 class="contact-subtitle">Dirección:</h3>
                <p class="contact-address">Avenida San Claudio, Blvrd 14 Sur</p>
                <p class="contact-address">Cdad. Universitaria, 72592 Puebla, Pue.</p>
                <h3 class="contact-subtitle">Correo:</h3>
                <p class="contact-email">chez.tuli@correo.com</p>
                <h3 class="contact-subtitle">Teléfono:</h3>
                <p class="contact-tel">222 *** ****</p>
                <p class="contact-tel">222 *** ****</p>
            </div>
        </div>
        <div id="map"></div>
    </div>
</section>
<script src="{{ asset('js/map.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>
@endsection