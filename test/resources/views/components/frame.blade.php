@props([
    'maintitle',
    'tagline',
    'title' => 'Personal Portfolio',
])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }} · {{ config('app.name', 'Portfolio') }}</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header class="site-header">
        <nav class="navigation" aria-label="Main navigation">
            <a class="site-name" href="{{ route('home') }}">Personal Portfolio</a>
            <div class="navigation-links">
                <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                <a class="{{ request()->routeIs('projects') ? 'active' : '' }}" href="{{ route('projects') }}">Projects</a>
                <a class="{{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
            </div>
        </nav>
    </header>

    <main class="page-content">
        @if (session('status'))
            <p class="notice" role="status">{{ session('status') }}</p>
        @endif

        @if ($errors->any())
            <div class="notice notice-error" role="alert">
                <p>Please review the following and try again:</p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="container mt-5">
            <h1>{{ $maintitle }}</h1>
            <h2>{{ $tagline }}</h2>
            {{ $slot }}
        </div>
    </main>

    <footer class="site-footer">
        <p>Personal portfolio · Replace the sample details with your own before publishing.</p>
    </footer>
    @stack('scripts')
</body>
</html>
