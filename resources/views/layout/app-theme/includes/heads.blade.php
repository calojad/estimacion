<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="/favicon.ico">

<title>{{config('app.name','Cald')}}</title>

<!-- Bootstrap core CSS -->
{!! Html::style('/boostrap-3.3.7/css/bootstrap.min.css') !!}
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
{!! Html::style('/css/ie10-viewport-bug-workaround.css') !!}
<!-- Custom styles for this template -->
{{--{!! Html::style('/css/sticky-footer-navbar.css') !!}--}}
<!-- Font Awesome -->
{!! Html::style('/adminLTE-2.4.3/bower_components/font-awesome/css/font-awesome.min.css') !!}
<!-- Ionicons -->
{!! Html::style('/adminLTE-2.4.3/bower_components/Ionicons/css/ionicons.min.css') !!}
<!-- DataTables -->
{!! Html::style('/adminLTE-2.4.3/bower_components/datatables/css/dataTables.bootstrap.min.css') !!}
<!-- Theme style -->
{!! Html::style('/adminLTE-2.4.3/dist/css/AdminLTE.min.css') !!}
<!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect. -->
{!! Html::style('/adminLTE-2.4.3/dist/css/skins/skin-green.min.css') !!}
{{--<!-- Select2 -->
{!! Html::style('/adminLTE-2.4.3/bower_components/select2/css/select2.min.css') !!}--}}
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- JQuery -->
{!! Html::script('plugins/jquery/jquery-3.3.1.min.js') !!}
<!-- Jquery Confirm -->
{!! Html::style('plugins/jquery_alerts/jquery-confirm.min.css') !!}