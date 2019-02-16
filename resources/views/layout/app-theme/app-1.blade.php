<!DOCTYPE html>
<html>
<head>
    @include('layout.app-theme.includes.heads')
    @yield('estilos')
</head>
<body class="hold-transition skin-green layout-top-nav layout-boxed">
<div class="wrapper">
    <!-- Navbar -->
    @include('layout.app-theme.includes.navbar-main')
    <!-- Full Width Column -->
    <div class="content-wrapper">
        <div class="container">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                {{--<h1>
                    Top Navigation
                    <small>Example 2.0</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Layout</a></li>
                    <li class="active">Top Navigation</li>
                </ol>--}}
                @yield('encabezado')
            </section>

            <!-- Main content -->
            <section class="content">
                @yield('contenido')
            </section>
        </div>
    </div>

    <footer class="main-footer">
        <div class="container">
            <div class="pull-right hidden-xs">
                <b>Version</b> 1
            </div>
            <strong>Copyright &copy; {{date('Y')}}. </strong><font color="green">Andrés Loja</font> All rights
            reserved.
        </div>
    </footer>
</div>
@include('layout.app-theme.includes.scripts')
@yield('scripts')
</body>
</html>