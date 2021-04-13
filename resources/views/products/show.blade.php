@extends('layouts.layout')

@section('title','Detalle producto: '.$product->name)

@section('content')

    <h1>Producto :</h1>
    <p>
        <a href="{{route('products.index')}}">Volver a la página principal</a>
    </p>
    <p>
        <a href="{{route('products.edit', $product)}}">Editar producto</a>
    </p>
    
    <p>
        
        {{$product->name}}
    </p>
    <form action="{{route('products.destroy', $product)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection