<!-- resources/views/products/index.blade.php -->
<x-layout>
    <main class="content">
        <h1 class="page-title">Products</h1>

        <!-- Flash messages -->
        <x-flash-success />
        <x-flash-errors />

        <!-- Add Product Button -->
        <div class="actions">

            <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
        </div>

        <!-- Products Table -->
        <table class="products-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Expiration Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->expiration_date }}</td>
                    <td>{{ ucfirst($product->status) }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-edit">Edit</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>

    <style>
        .content { max-width: 1000px; margin: 2rem auto; }
        .page-title { font-size: 2rem; margin-bottom: 1rem; }
        .actions { margin-bottom: 1rem; }
        .btn { padding: 0.4rem 0.8rem; text-decoration: none; border-radius: 4px; color: #fff; }
        .btn-primary { background-color: #007bff; }
        .btn-primary:hover { background-color: #0056b3; }
        .btn-edit { background-color: #28a745; }
        .btn-edit:hover { background-color: #1e7e34; }
        .btn-delete { background-color: #dc3545; border: none; }
        .btn-delete:hover { background-color: #a71d2a; }

        .products-table { width: 100%; border-collapse: collapse; }
        .products-table th, .products-table td { border: 1px solid #ccc; padding: 0.5rem; text-align: left; }
        .products-table th { background-color: #f8f8f8; }
    </style>
</x-layout>
