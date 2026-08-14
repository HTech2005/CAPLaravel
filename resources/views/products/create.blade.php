@extends('layouts.app')

@section('content')
    <h1>Ajouter un produit</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div>
            <label for="name">Nom</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
            @error('name') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description">{{ old('description') }}</textarea>
        </div>

        <div>
            <label for="price">Prix</label>
            <input type="number" step="0.01" name="price" id="price" value="{{ old('price') }}">
            @error('price') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div>
            <label for="stock">Stock</label>
            <input type="number" name="stock" id="stock" value="{{ old('stock') }}">
            @error('stock') <div class="error">{{ $message }}</div> @enderror
        </div>

        <button type="submit">Créer</button>
    </form>
@endsection