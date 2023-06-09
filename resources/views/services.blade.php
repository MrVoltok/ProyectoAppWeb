@extends('layouts.app')

@section('content')
<div class="service-section container pt-2">
    <h1>Nuestros servicios</h1>
    <p>Para nosotros, nos es importante su bienestar y su imagen, por ello, le ofrecemos nuestros siguientes servicios:</p>
    <div class="cards d-none d-md-flex">
        <div class="service-card" id="service-card-img-hair">
            <p class="title">Tratamiento de uñas</p>
            <p class="description">En nuestro salón trabajamos tanto manicura básica como permanente o acrílico, tú decides.</p>
        </div>
        <div class="service-card" id="service-card-img-manicure">
            <p class="title">Tratamiento de cabello</p>
            <p class="description">Ofrecemos desde aplicación de tinte hasta tratamiento capilar profesional.</p>
        </div>
        <div class="service-card" id="service-card-img-products">
            <p class="title">Productos de belleza</p>
            <p class="description">Puedes encontrar un gran variedad productos en nuestra página web. </p>
        </div>
    </div>
    <div class="cards d-md-none">
        <div class="service-card" id="service-card-img-hair">
            <p class="title">Tratamiento de uñas</p>
            <p class="description">En nuestro salón trabajamos tanto manicura básica como permanente o acrílico, tú decides.</p>
        </div>
        <div class="service-card" id="service-card-img-manicure">
            <p class="title">Tratamiento de cabello</p>
            <p class="description">Ofrecemos desde aplicación de tinte hasta tratamiento capilar profesional.</p>
        </div>
        <div class="service-card" id="service-card-img-products">
            <p class="title">Productos de belleza</p>
            <p class="description">Puedes encontrar un gran variedad productos en nuestra página web. </p>
        </div>
    </div>
</div>
@endsection