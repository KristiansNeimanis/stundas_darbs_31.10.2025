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
    <header>Test Logo</header>
    <div class="container">
        <aside class="left-sidebar">
            <nav>
                <ul>
                    <li><a href="{{ route('products.index') }}">Products</a></li>
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
    <footer>&copy; 2025</footer>
</body>
</html>
