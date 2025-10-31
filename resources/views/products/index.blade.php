<x-layout>
    <header class="header">
        <h1>Test Logo</h1>
    </header>

    <div class="container">
        <aside class="left-sidebar">
            <nav class="nav">
                <ul>
                    <li><a href="{{ route('products.index') }}">Products</a></li>
                    <li><a href="{{ route('products.create') }}">Add Product</a></li>
                </ul>
            </nav>
        </aside>

        <main class="main-content">
            @include('components.flash-success')
            @include('components.flash-errors')

            <h2>Products</h2>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
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
                            <td>
                                <a href="{{ route('products.show', $product) }}">View</a>
                                <a href="{{ route('products.edit', $product) }}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </main>

        <aside class="right-sidebar">
            <p>Test Ads</p>
        </aside>
    </div>

    <footer class="footer">
        <p>&copy; 2025 Test Company</p>
    </footer>
</x-layout>
