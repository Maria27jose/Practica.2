@extends('layouts.app')
@section('title', 'create product')
@section('content')
    <div class="container">
        {{-- este action debe ir a la ruta producst.store que se encarga de grabar  --}}
        <form action="{{ route('products.store') }}" method="POST">
            @csrf {{-- para fines de seguridad --}}
            {{-- aqui el formulario de boostrap , recordar que los campos de mi tabla son name,descrption y price --}}
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="name">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description"name="description" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="price">
            </div>
            {{-- luego un boton de tio submit porque necesitamos guardar y trabajare con un icono--}}
            <button type="submit" class="btn btn-primary"><i class="bi bi-save "></i> submit</button>
            a


        </form>
    </div>

@endsection
