<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'My App' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>Test Logo</h1>
        </header>

        <aside class="left-sidebar">
            <nav>
                <ul>
                    <li><a href="{{ route('products.index') }}">Products</a></li>
                    <!-- citi linki -->
                </ul>
            </nav>
        </aside>

        <main class="content">
            {{ $slot }}
        </main>

        <aside class="right-sidebar">
            <p>Test reklāmas teksts</p>
        </aside>

        <footer class="footer">
            <p>&copy; 2025 Test Company</p>
        </footer>
    </div>
</body>
</html>
