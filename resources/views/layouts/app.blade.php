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
        <nav id="nav">
            @yield('navigation')
        </nav>

        <header id="header">
            @yield('header')
        </header>

        <main class="container">
            <article id="about">
                @yield('aboutMe')
            </article>

            <section id="gallery">
                @yield('instaGallery')
            </section>

            <article id="products">
                @yield('products')
            </article>

            <section id="contact">
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
