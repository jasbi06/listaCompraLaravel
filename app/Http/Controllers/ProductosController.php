<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductosController extends Controller
{
    public function getIndex()
    {
        $arrayProducto = Producto::all();
        return view('productos.index', array('arrayProducto' => $arrayProducto));
    }

    public function getShow($id)
    {
        $productos = Producto::findOrFail($id);
        return view('productos.show', array('producto' => $productos), array('id' => $id));
    }

    public function getCreate()
    {
        return view('productos.create');
    }

    public function getEdit($id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.edit', array(
            'producto' => $producto
        ));
    }

    public function changeRented($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->pendiente = !$producto->pendiente;
        $producto->save();
        return back();
    }
}
