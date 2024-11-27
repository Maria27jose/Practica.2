<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class users extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('moduls/users/index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('moduls/users/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //declarar variable: user es el model , es como instanciar la tabla user y nos da acceso al atributo de la tabla name
        $item=new User();
        $item->name=$request->name;
        $item->save();
        //una vez que haya agregado vamos a redireccionar al index
        return to_route('index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
