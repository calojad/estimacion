<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- JQuery -->
<script>
    window.jQuery || document.write('<script src="{{asset('plugins/jquery/jquery.min.js')}}"><\/script>')
</script>
<!-- Bootstrap -->
{!! Html::script('/boostrap-3.3.7/js/bootstrap.min.js') !!}
{{--<!-- Select2 -->
{!! Html::script('adminLTE-2.4.3/bower_components/select2/js/select2.full.min.js') !!}--}}
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
{!! Html::script('/js/ie10-viewport-bug-workaround.js') !!}
<!-- DataTables -->
{!! Html::script('adminLTE-2.4.3/bower_components/datatables/js/jquery.dataTables.js') !!}
{!! Html::script('adminLTE-2.4.3/bower_components/datatables/js/dataTables.bootstrap.js') !!}
<!-- AdminLTE App -->
{!! Html::script('adminLTE-2.4.3/dist/js/adminlte.min.js') !!}
<!-- Optionally, you can add Slimscroll and FastClick plugins.
             Both of these plugins are recommended to enhance the
             user experience. -->
<!-- Jquery Confirm -->
{!! Html::script('plugins/jquery_alerts/jquery-confirm.min.js') !!}