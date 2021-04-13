@extends('layouts.layout')

@section('title','Curso: '.$curso)
@section('content')
    <h1>Mostrando variable en url</h1>
    <p>
    Bienvenido a la muestra de la creacion xd {{$curso}} 
</p>
@endsection
