@extends('layouts.app')

@section('content')
    <h1>Lista de Productos</h1>
    <a href="{{ route('products.create') }}" class="btn btn-success">Crear Producto</a>

    @if ($products->isEmpty())
        <p>No hay productos disponibles.</p>
    @else
        <ul>
            @foreach ($products as $product)
                <li>
                    {{ $product->name }} - {{ $product->description }} - ${{ number_format($product->price, 2) }}
                    
                    <!-- Botón de Editar -->
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Editar</a>
                    
                    <!-- Formulario para Eliminar -->
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este producto?')">Eliminar</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif
@endsection
