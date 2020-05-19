<!DOCTYPE html>
<html lang="pt-br">
    <head>
        @include('_partials/head')
    </head>
    <body>
        @yield('body')
        <script src="{{ mix('js/app.js', 'assets/build') }}"></script>
    </body>
</html>
