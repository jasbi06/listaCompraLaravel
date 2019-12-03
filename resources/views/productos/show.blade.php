@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-sm-4">

        <img src="https://picsum.photos/200/300/?random" style="height:200px"/>

    </div>
    <div class="col-sm-8">
        <h4>{{ $producto[0] }}</h4>
        <h6>Categoria: {{ $producto[1] }}</h6>
        <h3>Estado : Producto comprado</h3>
        <a class="btn btn-danger" href="#">Pendiente de compra</a>
        <a class="btn btn-warning" href="{{  url('/productos/edit/' . $id ) }}">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            Editar producto</a>

        <a class="btn btn-outline-info" href="{{ action('ProductosController@getIndex') }}">Volver al listado</a>

    </div>
</div>
@stop
