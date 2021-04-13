@extends('layouts.layout')

@section('title','Edit Product')

@section('content')
<h1>Actualice los Datos correspondientes </h1>
<form action="{{route('products.update', $product)}}" method="POST">
    @csrf
    @method("PUT")
    <label for="">
        Nombre del producto:
        <br>
        <input type="text" name="name" value="{{old('name', $product->name)}}"> 
    </label>
    @error('name')
        <br>
        <small>{{$message}}</small>
        <br>
    @enderror
    

    <br>
    
    <label for="">
        Descripcion del producto: 
        <br>
        <textarea name="description" cols="30" rows="5" >{{old('description', $product->description)}}</textarea>
    </label>
    @error('description')
        <br>
        <small>{{$message}}</small>
        <br>
    @enderror

    <br>

    <label for="">
        Precio del producto
        <br>
        <input type="number" name="price" value="{{old('price',$product->price)}}">
    </label>
    @error('price')
        <br>
        <small>{{$message}}</small>
        <br>
    @enderror
    
    <br>

    <label for="">
        Cantidad del producto
        <br>
        <input type="text" name="amount" value="{{old('amount', $product->amount)}}">
    </label>
    
    @error('amount')
    <br>
    <small>{{$message}}</small>
    <br>
@enderror
    <button type="submit">Actualizar</button>
</form>
@endsection