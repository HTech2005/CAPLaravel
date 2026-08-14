@extends('layouts.app')

@section('content')
    <h1>Liste des produits</h1>
    <a href="{{ route('products.create') }}">+ Ajouter un produit</a>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prix</th>
                <th>Stock</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ number_format($product->price, 2) }} €</td>
                    <td>{{ $product->stock }}</td>
                    <td>
                        <a href="{{ route('products.show', $product) }}">Voir</a>
                        <a href="{{ route('products.edit', $product) }}">Modifier</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Supprimer ce produit ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="4">Aucun produit pour le moment.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection