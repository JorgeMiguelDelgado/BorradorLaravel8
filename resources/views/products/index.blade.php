@extends('layouts.layout')

@section('title','Lista de Productos (Retomando)')
@section('content')
    <h1>Pagina principal de Productos</h1>
    <a href="{{route('products.create')}}">Ingresar nuevo producto</a>
    <ul>
        @foreach ( $product as $products )
            <li>
                <a href="{{route('products.show', $products)}}">{{$products->name}}</a>
                
            </li>
            <li>
                <a href="">{{$products->amount}}</a>
                
            </li>
            <li>
                <a href="">{{$products->description}}</a>
                
            </li>
            <li>
                <a href="">{{$products->price}}</a>
                
            </li>
            
        @endforeach
    </ul>
    {{$product->links()}}
@endsection