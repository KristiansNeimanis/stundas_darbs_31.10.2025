<x-layout>
    <h1>Edit Product</h1>

    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name', $product->name) }}"><br>

        <label>Price:</label>
        <input type="text" name="price" value="{{ old('price', $product->price) }}"><br>

        <label>Description:</label>
        <textarea name="description">{{ old('description', $product->description) }}</textarea><br>

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('products.index') }}">⬅ Back</a>
</x-layout>
