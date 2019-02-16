<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <span class="icon"><img src="{{asset('images/logos/CAL_logo.png')}}" width="50"></span>
                <span style="padding: 0px 15px"> {{ config('app.name', 'Laravel') }} </span>
            </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav" style="padding: 8px 10px">
                <li class="{{ Request::is('/')?'active':'' }}"><a href="/"><i class="fa fa-home"></i> Home</a></li>
                <li class="{{ Request::is('estimacion*')?'active':'' }}"><a href="{{url('/estimacion')}}"><i class="fa fa-dollar"></i> Estimar</a></li>
                {{--<li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>--}}
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>