<x-layout>
    <h1>Create Product</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name') }}"><br>

        <label>Price:</label>
        <input type="text" name="price" value="{{ old('price') }}"><br>

        <label>Description:</label>
        <textarea name="description">{{ old('description') }}</textarea><br>

        <button type="submit">Save</button>
    </form>

    <a href="{{ route('products.index') }}">⬅ Back</a>
</x-layout>
