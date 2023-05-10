@extends('layouts.app')

@section('content')

<div class="container" style="padding-top: 2rem">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Actualizar cuenta</div>

                <div class="card-body">
                    <form method="POST" action=" {{ route('user.update', Auth::user()->id) }} ">
                        @csrf
                        @method("PUT")
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="apellidoP" class="col-md-4 col-form-label text-md-end">Apellido Paterno</label>

                            <div class="col-md-6">
                                <input id="apellidoP" type="text" class="form-control @error('apellidoP') is-invalid @enderror" name="apellidoP" value="{{ old('apellidoP') }}" required autocomplete="Apellido Paterno" autofocus>

                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="apellidoM" class="col-md-4 col-form-label text-md-end">Apellido Materno</label>

                            <div class="col-md-6">
                                <input id="apellidoM" type="text" class="form-control @error('apellidoM') is-invalid @enderror" name="apellidoM" value="{{ old('apellidoM') }}" required autocomplete="Apellido Materno" autofocus>

                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="numTel" class="col-md-4 col-form-label text-md-end">Número de teléfono</label>

                            <div class="col-md-6">
                                <input id="numTel" type="text" class="form-control @error('numTel') is-invalid @enderror" name="numTel" value="{{ old('numTel') }}" required autocomplete="Número de Teléfono" autofocus>

                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="numCel" class="col-md-4 col-form-label text-md-end">Número de celular</label>

                            <div class="col-md-6">
                                <input id="numCel" type="text" class="form-control @error('numCel') is-invalid @enderror" name="numCel" value="{{ old('numCel') }}" required autocomplete="Número de celular" autofocus>

                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="calle" class="col-md-4 col-form-label text-md-end">Calle</label>

                            <div class="col-md-6">
                                <input id="calle" type="text" class="form-control @error('calle') is-invalid @enderror" name="calle" value="{{ old('calle') }}" required autocomplete="Calle" autofocus>

                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                            
                        </div>

                        <div class="row mb-3">
                            <label for="colonia" class="col-md-4 col-form-label text-md-end">Colonia</label>

                            <div class="col-md-6">
                                <input id="colonia" type="text" class="form-control @error('colonia') is-invalid @enderror" name="colonia" value="{{ old('colonia') }}" required autocomplete="Colonia" autofocus>

                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                            
                        </div>
                        
                        <div class="row mb-3">
                            <label for="codPostal" class="col-md-4 col-form-label text-md-end">Código Postal</label>

                            <div class="col-md-6">
                                <input id="codPostal" type="text" class="form-control @error('codPostal') is-invalid @enderror" name="codPostal" value="{{ old('codPostal') }}" required autocomplete="Código Postal" autofocus>

                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                            
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Confirmar cambios
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>

@endsection