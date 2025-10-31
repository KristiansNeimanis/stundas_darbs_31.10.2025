<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'My App' }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>Test Logo</header>
    <aside class="left-sidebar">
        <nav>
            <ul>
                <li><a href="{{ route('products.index') }}">Products</a></li>
            </ul>
        </nav>
    </aside>
    <main>
        <x-flash-success />
        <x-flash-errors />
        {{ $slot }}
    </main>
    <aside class="right-sidebar">
        Test Ads
    </aside>
    <footer>&copy; Test</footer>
</body>
</html>
