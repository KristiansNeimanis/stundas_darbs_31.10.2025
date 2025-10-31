<!-- resources/views/components/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Products' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
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

        <main>
            {{ $slot }}
        </main>

        <aside class="right-sidebar">
            Ads / Promotions
        </aside>
    </div>
    <footer class="footer">
        <p>&copy; 2025 Test Company</p>
    </footer>
</body>
</html>
