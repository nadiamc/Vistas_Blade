@extends('layouts.app')

@section('titulo', 'Productos')

@section('contenido')

<h2>Listado de productos</h2>

<p>Estos productos vienen desde la ruta.</p>

@forelse($productos as $producto)

    <div class="producto">
        <h3>{{ $producto['nombre'] }}</h3>

        <p>Precio: ${{ $producto['precio'] }}</p>
        
        @if($producto['precio'] > 3000)
         <p><strong>Producto destacado</strong></p>
        @endif

        @if($producto['stock'] > 0)
            <p class="con-stock">Stock disponible: {{ $producto['stock'] }}</p>
        @else
            <p class="sin-stock">Sin stock</p>
        @endif
    </div>

@empty

    <p>No hay productos disponibles en este momento.</p>

@endforelse

@endsection