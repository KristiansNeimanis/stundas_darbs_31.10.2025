<x-layout>
    <h2>Create Product</h2>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name" required><br>
        <input type="number" name="quantity" placeholder="Quantity" required><br>
        <input type="text" name="description" placeholder="Description"><br>
        <input type="number" name="price" placeholder="Price" required><br>
        <input type="date" name="expiration_date"><br>
        <select name="status">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select><br>
        <button type="submit">Save</button>
    </form>
</x-layout>
