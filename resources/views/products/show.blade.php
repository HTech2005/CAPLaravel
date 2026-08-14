@extends('layouts.app')

@section('content')
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p><strong>Prix :</strong> {{ number_format($product->price, 2) }} €</p>
    <p><strong>Stock :</strong> {{ $product->stock }}</p>

    <a href="{{ route('products.edit', $product) }}">Modifier</a>
    <a href="{{ route('products.index') }}">← Retour à la liste</a>
@endsection