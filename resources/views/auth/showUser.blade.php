@extends('layouts.navAdmin')

@section('contentAdmin')
<section class="container">
    <div class="profile-section">
        <div class="personal-data-title">
            <h1>Datos personales</h1>
        </div>
        <div class="data-section">
            <div class="profile-general-data">
                <div>
                    <div class="user-data">
                        <h2>Nombre</h2>
                        <p>{{$user->name }} {{$user->apellidoP }} {{$user->apellidoM }}</p>
                    </div>
        
                    <div class="user-data">
                        <h2>Nombre de usuario</h2>
                        <p>{{$user->username}}</p>
                    </div>
        
                    <div class="user-data">
                        <h2>Correo Electrónico</h2>
                        <p>{{ $user->email }}</p>
                    </div>
                </div>
            </div>
            <div class="profile-additional-data">
                <div>
                    <div class="user-data">
                        <h2>Status</h2>
                        <p>{{$user->status}}</p>
                    </div>

                    <div class="user-data">
                        <h2>Dirección</h2>
                        <p>{{$user->calle }} {{$user->colonia }} {{$user->codPostal }}</p>
                    </div>
    
                    <div class="user-data">
                        <h2>Número telefónico</h2>
                        <p>{{$user->numTel }}</p>
                    </div>
    
                    <div class="user-data">
                        <h2>Número de celular</h2>
                        <p>{{$user->numCel }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="user-services">
        <h1>Servicios contratados</h1>
        <ul>
            <table class="table border table-striped">
                <thead>
                    <tr>
                    <th>Servicio</th>
                    <th>Horario</th>
                    <th>Precio</th>
                </tr>
                </thead>
                <tbody>
                    @forelse ($services as $service)
                        @if($service->user_id == $user->id)
                        <tr>
                            <td>{{$service->name}}</td>
                            <td>{{$service->horaInicio}} - {{$service->horaFin}}</td>
                            <td>{{$service->precio}}</td>
                        </tr>
                        @endif
                    @empty
                        <p>No hay usuarios registados</p>
                    @endforelse
                </tbody>
            </table>
        </ul>
    </section>
</section>
@endsection