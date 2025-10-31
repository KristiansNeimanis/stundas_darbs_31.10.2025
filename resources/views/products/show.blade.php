<x-layout>
    @include('components.flash-success')
    @include('components.flash-errors')

    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p>Price: ${{ $product->price }}</p>
    <p>Quantity: <span id="quantity">{{ $product->quantity }}</span></p>
    <p>Status: {{ $product->status }}</p>

    <div class="quantity-controls">
        <form method="POST" action="{{ route('products.decrement', $product) }}">
            @csrf
            <button class="btn-small">-</button>
        </form>

        <form method="POST" action="{{ route('products.increment', $product) }}">
            @csrf
            <button class="btn-small">+</button>
        </form>
    </div>

    <a href="{{ route('products.index') }}" class="btn">Back</a>
</x-layout>
