<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    /*Se utiliza La funcion index para crear los productos*/
    public function index()
    {
        $productos = [
            ['id'=>1, 'nombre'=>'KYOCERA', 'precio'=> 1000],
            ['id'=>2, 'nombre'=>'CANON', 'precio'=>800],
            ['id'=>3, 'nombre'=>'HP', 'precio'=>700],
        ];

        return view('productos.index', compact('productos'));


    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
