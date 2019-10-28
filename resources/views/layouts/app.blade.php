<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'HaHaHACCP') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        
        <nav class="nav align-items-center nav-justified pt-2 pb-2" id="navigation">
            @yield('navigation')
        </nav>

        <header id="header">
            @yield('header')
        </header>
        <main class="container">
            
            <article id="about" class="pt-3 mb-4">
                @yield('aboutMe')
            </article>

            <section id="gallery" class="mb-4">
                @yield('instaGallery')
            </section>

            <article id="products" class="mb-4">
                @yield('products')
            </article>

            <section id="contact" class="mb-3">
                @yield('contactMe')
            </section>
        </main>

        <footer>
            <section id="footer">
                @yield('footer')
            </section>
        </footer>

        <!-- Scripts -->
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>
