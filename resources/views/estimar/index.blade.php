@extends('layout.app-theme.app-1')
@section('encabezado')
    <h1>
        Estimación
        <small>Sistema para estimar el costo de desarrollo.</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Estimar</a></li>
    </ol>
@endsection
@section('contenido')g
    <div class="box box-solid box-default">
        <div class="box-header">
            <h5 class="box-title"><i class="fa fa-clock-o"></i> Calcular el tiempo de desarrollo</h5>
        </div>
        <div class="box-body" align="center">
            {!! Form::open(['url' => 'estimar/tiempo', 'method' => 'post']) !!}
            <div class="form-group" >
                <label for="horastrabajo">Tiempo de trabajo al día:</label>
                <div class="input-group col-md-1">
                    <input id="horastrabajo" class="form-control input-lg" name="horastrabajo" type="text" >
                    <div class="input-group-addon">
                        <i class="fa fa-hourglass"></i>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="tipoweb">Tipo de sistema:</label>
                <div class="col-md-5 input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-cogs"></i>
                    </div>
                    <select id="tipoweb" class="form-control input-lg" name="tipoweb">
                        <option selected="selected">--Seleccionar--</option>
                        <option>Web informativa</option>
                        <option>Sistema web</option>
                        <option>Aplicacion web</option>
                    </select>
                </div>
            </div>
            <div class="form-group" align="center">
                <label for="numpaginas">Número de páginas:</label>
                <div class="input-group col-md-2">
                    <input id="numpaginas" class="form-control input-lg" name="numpaginas" type="text" style="text-align: right">
                    <div class="input-group-addon">
                        <i class="fa fa-file-code-o"></i>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
@section('scripts')
    <!-- InputMask -->
    {!! Html::script('/plugins/input-mask/jquery.inputmask.bundle.js') !!}

    <script type="text/javascript">
        $(function () {
            $('#horastrabajo').inputmask('9{1,2}');
            $('#numpaginas').inputmask('999');

        });
    </script>
@endsection