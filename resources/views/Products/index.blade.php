@extends('layouts.app')
@section('title', 'Products list')
@section('content')
    <div class="container">
        <h1>Products list</h1>
        {{-- para mover el boton crear--}}
         <div class="text-end">

        {{-- Creare un boton para crear productos, tipo get--}}
        <a href="{{ route('products.create') }}" class="btn btn-primary"><i class="bi bi-plus"></i>Create</a>


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody>

                {{-- Recorrer el arreglo que contiene todos los productos , obvi for each, los productos s elos asigno a la variable product --}}
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->name }}</td>
                        <td>
                            {{-- Este boton de aqui esta llamando una ruta, me permite ver le producto(no editarlo) --}}
                            {{-- Estas dos rutas siguientes son de tipo get y la tercera es de tipo delete --}}
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">view</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">edit</a>
                            {{-- ACTION PARA QUE ME PERMITA ACCEDER A LA RUTA --}}
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                @csrf {{-- mecanismo de seguridad --}}
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delet</button>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>

@endsection
