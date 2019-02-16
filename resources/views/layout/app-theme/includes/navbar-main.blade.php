<header class="main-header">
    <nav class="navbar navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <a href="/" class="navbar-brand">{{ config('app.name','Laravel') }}</a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
            </div>

            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="{{ Request::is('/')?'active':'' }}">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                    </li>
                    <li class="{{ Request::is('estimacion*')?'active':'' }}">
                        <a href="{{url('/estimacion')}}"><i class="fa fa-dollar"></i> Estimar</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-custom-menu -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</header>