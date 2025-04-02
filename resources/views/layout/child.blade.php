@extends('layout.app')

@section('title', 'prueba child')

@section('content')
    <h1>Hola mundo</h1>
    <p>Contenido de la página</p>
    <p>Contenido de la página</p>
    <p>Contenido de la página</p>
    <h3>Hola {{$nombre}} {{$last}} de {{$age}} años</h3>
    @component('components.alert', ['name' => 'edeshe'])
        @slot('title')
            Alerta
        @endslot
        <p>Este es un mensaje de alerta</p>
    @endcomponent
@endsection