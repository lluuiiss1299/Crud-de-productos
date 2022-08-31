<?php

namespace App\Http\Controllers;

use App\Models\productos;
use App\Models\catalogo_sucursale;
use App\Models\catalogo_categoria;
use Illuminate\Http\Request;

class ProductosController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productos = productos::paginate(10);
        return view('productos.list',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $datos['sucursales'] = catalogo_sucursale::get();
        $datos['categorias'] = catalogo_categoria::get();
        return view('productos.registro',$datos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $producto = new productos;
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->categoria = $request->categoria;
        $producto->sucursal = $request->sucursal;
        $producto->precio = $request->precio;
        $producto->fecha_compra = $request->fecha_compra;
        $producto->save();
        return redirect('productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(productos $productos)
    {
        //lista de productos

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $datos['producto'] = productos::findOrFail($id);
        $datos['categoria'] = catalogo_categoria::Where('catId',$datos['producto']->categoria)->get();
        $datos['sucursal'] = catalogo_sucursale::Where('sucId',$datos['producto']->sucursal)->get();
        
        return view('productos.editar',$datos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $producto = productos::findOrFail($id);
        //dd($request);

        if($request->has('estado')){
            $producto->estado = $request->estado;
            
        }else{
            $producto->estado = 0;
        }
        $producto->comentario = $request->comentario;
        $producto->save();
        return redirect('productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $producto = productos::findOrFail($id);
        $producto->delete();
        return redirect('productos');
    }
}
