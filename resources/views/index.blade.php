<x-layout>
    <h1>Products</h1>

    <a href="{{ route('products.create') }}">Create new product</a>

    <ul>
        @foreach($products as $product)
            <li>
                <a href="{{ route('products.show', $product) }}">{{ $product->name }}</a>
            </li>
        @endforeach
    </ul>
</x-layout>