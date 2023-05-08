@extends('layouts.navAdmin')

@section('contentAdmin')
<section class="adminPage container pt-4">
    <div class="registered-users d-flex flex-column">
        <h2>Usuarios registrados</h2>
        <table class="table border table-striped">
            <thead>
                <tr>
                <th>Usuario</th>
                <th>Nombre(s)</th>
                <th>Email</th>
                <th>Status</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td>{{$user->username}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->status}}</td>
                        <td>
                            <a class="text-decoration-none text-dark fw-bold" href="{{ route('adminPage.showUser',$user->id) }}">...</a>
                        </td>
                    </tr>
                @empty
                    <p>No se han reservado servicios</p>
                @endforelse
            </tbody>
        </table>
        <div class="more-info d-flex justify-content-end">
            <a href="{{route('adminPage.listUsers')}}"><button class="btn btn-primary">Más información</button></a>
        </div>
    </div>
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
        <div class="more-info d-flex justify-content-end">
            <a href="{{route('adminPage.listServices')}}"><button class="btn btn-primary">Más información</button></a>
        </div>
    </div>
    <div class="received-comments">
        <h2>Comentarios recibidos</h2>
        <table class="table border table-striped">
            <thead>
                <tr>
                <th>Comentario</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($suggests as $suggest)
                    <tr>
                        <td>{{$suggest->comment}}</td>
                    </tr>
                @empty
                    <p>No ha recibido comentarios</p>
                @endforelse
            </tbody>
        </table>
        <div class="more-info d-flex justify-content-end">
            <a href="{{route('adminPage.listSuggests')}}"><button class="btn btn-primary">Más información</button></a>
        </div>
    </div>
</section>
@endsection