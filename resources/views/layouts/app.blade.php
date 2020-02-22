<!DOCTYPE html>
<html style="overflow-x:hidden"lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- Favicon  --}}

        <link rel="apple-touch-icon" sizes="57x57" href="{{asset('images/favicon/apple-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{asset('images/favicon/apple-icon-60x60.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/favicon/apple-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/favicon/apple-icon-76x76.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/favicon/apple-icon-114x114.png')}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{asset('images/favicon/apple-icon-120x120.png')}}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{asset('images/favicon/apple-icon-144x144.png')}}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{asset('images/favicon/apple-icon-152x152.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/favicon/apple-icon-180x180.png')}}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('images/favicon/android-icon-192x192.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicon/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{asset('images/favicon/favicon-96x96.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon/favicon-16x16.png')}}">
        <link rel="manifest" href="{{asset('images/favicon/manifest.json')}}">
        <meta name="msapplication-TileImage" content="{{asset('images/favicon/ms-icon-144x144.png')}}">

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

            <article id="products" class="pt-3 mb-5">
                @yield('products')
            </article>

            {{-- <section id="gallery" class="mb-5">
                @yield('instaGallery')
            </section> --}}
            
            <article id="about" class="mb-5">
                @yield('aboutMe')
            </article>

            <section id="contact">
                @yield('contactMe')
            </section>
        </main>

        <footer class="pt-1 pb-1">
            <section class="text-center" id="footer">
                @yield('footer')
            </section>
        </footer>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script>
            var baseUrl = "{{url('/')}}";
        </script>
        <script src="{{ asset('js/page.js') }}"></script>

    </body>
</html>
