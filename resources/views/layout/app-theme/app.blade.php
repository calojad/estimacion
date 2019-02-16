<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layout.app-theme.includes.heads')
        @yield('estilos')
    </head>

    <body class="hold-transition layout-boxed">
        <!-- Fixed navbar -->
        @include('layout.app-theme.includes.navbar')

        <!-- Begin page content -->
        <div class="container">
            @yield('contenido')
        </div>

        <footer class="footer">
            <div class="container">
                <p class="text-muted" style="color: white">Copyright &copy; {{date('Y')}}. Andres Loja (CAL) - All rights reserved.</p>
            </div>
        </footer>

        <!-- Scripts -->
        @include('layout.app-theme.includes.scripts')
        @yield('scripts')
    </body>
</html>