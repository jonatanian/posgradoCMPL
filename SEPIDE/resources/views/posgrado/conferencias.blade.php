@extends("templates.base")

@section('content')
    <section id="content">
        <div class="content">
            <div class="row">
                <h1 class="text-center">Conferencias</h1>
            </div>
            <div class="row text-left">
                <a href="{{url('/conferencias/agregar')}}" class="btn btn-success">Agregar conferencia</a>
                &nbsp;
                <br />
            </div>
            @if(isset($conferencias))
            <table class="table-striped">
                <tr>
                    <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Duración</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Alcance</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Tema de participación</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Nombre del programa</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Acciones</th>
                </tr>
                @foreach($conferencias as $conferencia)
                    <tr>
                        <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            Fecha inicio: {{$conferencia->fecha_inicio}}<br>
                            Fecha término: {{$conferencia->fecha_termino}}
                        </td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">{{$conferencia->alcance}}</td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">{{$conferencia->tema_participacion}}</td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">{{$conferencia->nombre_programa}}</td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Acciones <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Detalles</a></li>
                                    <li><a href="#">Editar</a></li>
                                    <li><a href="#">Participantes</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li class="alert-danger"><a href="#"><span class="glyphicon glyphicon-remove red" aria-hidden="true"></span>Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
            @endif
        </div>
    </section>
@endsection