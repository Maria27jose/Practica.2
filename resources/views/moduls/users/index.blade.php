@extends('layouts/main')

@section('contenido')
    <div class="container mt-4">
        <h2>CRUDA CON LARAVEL 11</h2>
        <div class="row">
            <div class="col">

                <div class="card">
                    <div class="card-body">
                        {{-- En lugar de poner un link, pondré una ruta --}}
                     <a href="{{route('create')}}" class="btn btn-primary">Agregar</a>
                    </div>
                  </div>

            </div>
        </div>
    </div>
@endsection