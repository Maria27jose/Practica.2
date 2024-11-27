{{-- aqui pegamos de nuevo la plantilla de layout--}}
@extends('layouts/main')


<div class="container mt-4" >
    <h2>Agregar nuevo usuario</h2>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                <form action="{{ route('store')}}" method="post">
                    {{--este toquen @ es necesario para que la app sepa de donde viene--}}
                    @csrf
                    {{--vamos a reescribir el metodo para que entienda la ruta que es de un post--}}
                    @method('POST')
                    <label for="name">Escribe el nombre</label>
                    <input type="text" name="name" id="name" class="form-control">
                    <button class="btn btn-primary mt-3">Agregar</button>
                    {{--esto hara un return--}}
                    <a href="{{route('index')}}" class="btn btn-secondary mt-3">Cancelar</a>
                 </form>
                </div>
              </div>
        </div>
    </div>
</div>