<x-layout>
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p>€{{ $product->price }}</p>

    <a href="{{ route('products.edit', $product) }}">Edit</a> |
    <a href="{{ route('products.index') }}">Back</a>
</x-layout>
