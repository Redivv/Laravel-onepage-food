<!DOCTYPE html>
<html style="overflow-x:hidden"lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'HaHaHACCP') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body style="overflow-x:hidden" data-spy="scroll" data-target="#navigation">
        
        <nav class="nav align-items-center nav-justified pt-2 pb-2" id="navigation">
            @yield('navigation')
        </nav>

        <header id="header">
            @yield('header')
        </header>
        <main class="container-fluid pb-4">

            <article id="products" class="pt-4 mb-5">
                @yield('products')
            </article>
        
            <section id="gallery" class="mb-5">
                @yield('instaGallery')
            </section>
            
            <article id="about" class="mb-5">
                @yield('aboutMe')
            </article>

            <section id="contact">
                @yield('contactMe')
            </section>
        </main>

        <footer class="pt-1 pb-1">
            <section class="container-fluid text-center" id="footer">
                @yield('footer')
            </section>
        </footer>

        <!-- Scripts -->
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>
