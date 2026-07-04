<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Welcome to Our App')</title>

    <!-- Google Fonts: DM Serif Display for hero headline -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.jpeg') }}">

    <!-- Vite Directive for Tailwind -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased text-slate-900 bg-slate-50 flex flex-col min-h-screen">
    
    <!-- Include Header Partial -->
    @include('partials.header')

    <!-- Main Content Area -->
    <main class="flex-grow pt-16"> 
        @yield('content')
    </main>

    <!-- Include Footer Partial -->
    @include('partials.footer')

</body>
</html>