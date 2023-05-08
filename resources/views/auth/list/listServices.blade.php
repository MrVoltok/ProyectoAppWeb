@extends('layouts.navAdmin')

@section('contentAdmin')
<section class="adminPage container pt-4">
    <div class="reserved-services d-flex flex-column">
        <h2>Servicios reservados</h2>
        <table class="table border table-striped">
            <thead>
                <tr>
                <th>Servicio</th>
                <th>Horario</th>
                <th>Precio</th>
                <th>Cliente</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($services as $service)
                    <tr>
                        <td>{{$service->name}}</td>
                        <td>{{$service->horaInicio}} - {{$service->horaFin}}</td>
                        <td>{{$service->precio}}</td>
                        <td>{{$service->user->name}}</td>
                    </tr>
                @empty
                    <p>No hay usuarios registados</p>
                @endforelse
            </tbody>
        </table>
    </div>
</section>
@endsection