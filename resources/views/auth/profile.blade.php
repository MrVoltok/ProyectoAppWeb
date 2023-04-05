@extends('layouts.app')

@section('content')
<section class="pad-sect">
<div class="profile-section">
            <div class="personal-data-title">
                <h1>Datos personales</h1>
                <a href="{{ route('user.edit', Auth::user()->id) }}">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
            </div>
            <div class="data-section">
                <div class="profile-general-data">
                    <div>
                        <div class="user-data">
                            <h2>Nombre</h2>
                            <p>{{Auth::user()->name }} {{Auth::user()->apellidoP }} {{Auth::user()->apellidoM }}</p>
                        </div>
        
                        <div class="user-data">
                            <h2>Nombre de usuario</h2>
                            <p>victor.hrl</p>
                        </div>
        
                        <div class="user-data">
                            <h2>Correo Electrónico</h2>
                            <p>{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                </div>
                <div class="profile-additional-data">
                    <div>
                        <div class="user-data">
                            <h2>Dirección</h2>
                            <p>{{Auth::user()->calle }}, {{Auth::user()->colonia }}, {{Auth::user()->codPostal }}</p>
                        </div>
        
                        <div class="user-data">
                            <h2>Número telefónico</h2>
                            <p>{{Auth::user()->numTel }}</p>
                        </div>
        
                        <div class="user-data">
                            <h2>Número de celular</h2>
                            <p>{{Auth::user()->numCel }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection