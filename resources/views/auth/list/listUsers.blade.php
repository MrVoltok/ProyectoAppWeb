@extends('layouts.navAdmin')

@section('contentAdmin')
<section class="adminPage container pt-4">
    <div class="registered-users">
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
                        <td><a class="text-decoration-none" href="{{ route('adminPage.showUser',$user->id) }}">...</a></td>
                    </tr>
                @empty
                    <p>No se han reservado servicios</p>
                @endforelse
            </tbody>
        </table>
        {{ $users->links() }}
    </div>
</section>
@endsection