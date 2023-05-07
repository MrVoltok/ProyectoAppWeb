@extends('layouts.app')

@section('content')
<section class="contact-content">
    <div class="container">
        <div class="contact-info d-flex">
            <div class="contact-data">
                <div>
                    <h1>¡Contáctanos!</h1>
                    <h3 class="contact-subtitle">Dirección:</h3>
                    <p class="contact-address">Avenida San Claudio, Blvrd 14 Sur</p>
                    <p class="contact-address">Ciudad. Universitaria, 72592 Puebla, Pue.</p>
                    <h3 class="contact-subtitle">Correo:</h3>
                    <p class="contact-email">chez.tuli@correo.com</p>
                    <h3 class="contact-subtitle">Teléfono:</h3>
                    <p class="contact-tel">222 *** ****</p>
                    <p class="contact-tel">222 *** ****</p>
                </div>
            </div>
            <div id="map"></div>
        </div>
        <section class="suggest-box">
            <h2>¡Nos interesa su opinion!</h2>
            <div class="suggest">
                <form action="{{ route('suggest.create') }}" method="post">
                    @csrf
                    <textarea name="comment" id="suggest" placeholder="Escriba sus opiniones y sugerencias."></textarea>
                    <div class="send-suggest">
                        <button class="btn btn-primary" type="submit">Enviar comentario</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
</section>
<script src="{{ asset('js/maps.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>
@endsection