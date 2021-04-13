@extends('layouts.layout')

@section('title','Crear Product')

@section('content')
<h1>Ingrese los Datos correspondientes </h1>
<form action="{{route('products.store')}}" method="POST">
    @csrf
    <label for="">
        Nombre del producto: 
    </label>
    @error('name')
        <br>
        <small>{{$message}}</small>
        <br>
    @enderror
    <input type="text" name="name" value="{{old('name')}}">

    <br>
    
    <label for="">
        Descripcion del producto: 
    </label>
    @error('description')
        <br>
            <small>{{$message}}</small>
        <br>
    @enderror
    <textarea name="description"  cols="30" rows="5">{{old('description')}}</textarea>

    <br>

    <label for="">
        Precio del producto
    </label>
    @error('price')
        <br>
            <small>{{$message}}</small>
        <br>
    @enderror
    <input type="number" name="price" value="{{old('price')}}">
    
    <br>

    <label for="">
        Cantidad del producto
    </label>
    @error('amount')
        <br>
            <small>{{$message}}</small>
        <br>
    @enderror
    <input type="text" name="amount" value="{{old('amount')}}">
    <br>

    <button type="submit">Registrar</button>
</form>
@endsection