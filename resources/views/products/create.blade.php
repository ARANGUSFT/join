@extends('layouts.app')

@section('content')
    <h1>Crear Producto</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        </div>
        <div>
            <label for="description">Descripción:</label>
            <textarea id="description" name="description" required>{{ old('description') }}</textarea>
        </div>
        <div>
            <label for="price">Precio:</label>
            <input type="number" id="price" name="price" step="0.01" value="{{ old('price') }}" required>
        </div>
        <div>
            <button type="submit">Crear Producto</button>
        </div>
    </form>

    <a href="{{ route('products.index') }}">Volver a la lista de productos</a>
@endsection
