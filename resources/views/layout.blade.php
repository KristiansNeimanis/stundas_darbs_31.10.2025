<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Products App' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="header">
        <h1>Test Logo</h1>
    </header>

    <div class="container">
        <aside class="left-sidebar">
            <nav>
                <ul>
                    <li><a href="{{ route('products.index') }}">Products</a></li>
                    <li><a href="{{ route('products.create') }}">Create Product</a></li>
                </ul>
            </nav>
        </aside>

        <main class="content">
            {{ $slot }}
        </main>

        <aside class="right-sidebar">
            <p>Test Ads</p>
        </aside>
    </div>

    <footer class="footer">
        <p>© Test Company</p>
    </footer>
</body>
</html>
