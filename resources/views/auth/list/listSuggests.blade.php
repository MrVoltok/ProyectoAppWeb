@extends('layouts.navAdmin')

@section('contentAdmin')
<section class="adminPage container pt-4">
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
        {{ $suggests->links() }}
    </div>
</section>
@endsection