@extends('layouts.app')
@section('titulo', 'Luxery tienda arabe')
@section('cabecera', 'Tienda Luxery  -  Decoraciones, lamparas y muchas mas cosas Arabes para tu hogar.')

@section('contenido')
    <div class="hero min-h-screen" style="background-image: url(https://source.unsplash.com/random/400x200/?market);">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-center text-neutral-content">
        <div class="max-w-md">
            <h1 class="mb-5 text-5xl font-bold">Aquí encontrará los mejores productos traidos directamente de paises Arabes!</h1>
            <p class="mb-5">Estamos comprometidos con nuestros clientes entregándoles lo mejor. Nuestros envíos no tienen costo y llegan el mismo día de realizado su pedido.</p>
            <a href="{{route('productos.index')}}" class="btn btn-primary">Iniciar experiencia</a>
        </div>
        </div>
    </div>
@endsection
