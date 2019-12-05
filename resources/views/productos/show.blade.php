@extends('layouts.app')

@section('content')

<div class="row">

    <div class="col-sm-4">

        <img src="https://picsum.photos/200/300/?random" style="height:200px"/>

    </div>
    <div class="col-sm-8">

        <h4>Nombre : {{$producto->nombre}}</h4>
        <h4>Categoria: {{$producto->categoria}}</h4>
        <p>{{$producto->precio}}</p>
        <p>{{$producto->descripcion}}</p>
        @if($producto->pendiente)
        Producto comprado
        @php
        $class = "btn btn-danger";
        $texto = "Comprado";
        @endphp
        @else
        Comprar
        @php
        $class = "btn btn-success";
        $texto = "Comprar";
        @endphp
        @endif
        <form action="{{ url('/productos/changeRented/' . $producto->id) }}" method="POST">
            {{ method_field('PUT') }}
            @csrf
            <input type="submit"  class="{{$class}}" value="{{$texto}}" />
        </form>
        <a class="btn btn-warning" href="{{ url('/productos/edit/' . $producto->id ) }}">Editar</a>
        <a class="btn btn-outline-info" href="{{ action('ProductosController@getIndex') }}">Volver al listado</a>

    </div>
</div>

@stop
