@extends("templates.base")

@section('content')
    <section id="content">
        <div class="content">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <div class="row">
                <h1 class="text-center">Proyectos de I+D+i</h1>
            </div>
            <div class="row text-left">
                <a href="{{url('/proyectos/agregar')}}" class="btn btn-success">Agregar proyecto</a>
                &nbsp;
                <br />
            </div>

            @if(isset($proyectos))
                <table class="table-striped">
                    <tr>
                        <th class="col-xs-2 col-lg-2 col-md-2 col-sm-3">Nombre</th>
                        <th class="col-xs-2 col-lg-2 col-md-2 col-sm-2">Financiamiento</th>
                        <th class="col-xs-2 col-lg-2 col-md-2 col-sm-2">Programa</th>
                        <th class="col-xs-2 col-lg-2 col-md-2 col-sm-1">Estátus</th>
                        <th class="col-xs-2 col-lg-2 col-md-2 col-sm-1">Fecha de estátus</th>
                        <th class="col-xs-2 col-lg-2 col-md-2 col-sm-1">Vigencia del proyecto</th>
                        <th class="col-xs-2 col-lg-2 col-md-2 col-sm-2">Acciones</th>
                    </tr>
                @foreach($proyectos as $proyecto)
                        <tr>
                            <td class="col-xs-2 col-lg-2 col-md-2 col-sm-3">{{$proyecto->nombre_proyecto}}</td>
                            <td class="col-xs-2 col-lg-2 col-md-2 col-sm-2">{{$proyecto->financiamiento->nombre_financiamiento}}</td>
                            <td class="col-xs-2 col-lg-2 col-md-2 col-sm-2">{{$proyecto->programa}}</td>
                            <td class="col-xs-2 col-lg-2 col-md-2 col-sm-1">
                            @if($proyecto->estatus == 'ap')
                                Aprobado
                            @elseif($proyecto->estatus == 'pr')
                                Presentado
                            @else
                                No aprobado
                            @endif
                            </td>
                            <td class="col-xs-2 col-lg-2 col-md-2 col-sm-1">
                            @if($proyecto->estatus == 'pr')
                                <p>Fecha de presentación:<br>
                                    <strong>{{$proyecto->fecha_presentacion}}</strong>
                                </p>
                            @elseif($proyecto->estatus == 'ap')
                                <p>Fecha de notificación:<br>
                                    <strong>{{$proyecto->fecha_notificacion}}</strong>
                                </p>
                            @else
                                <p>Fecha de notificación:<br>
                                    <strong>{{$proyecto->fecha_notificacion}}</strong>
                                </p>
                            @endif
                            </td>
                            <td class="col-xs-2 col-lg-2 col-md-2 col-sm-1">
                            @if($proyecto->estatus == 'pr')
                                NA
                            @elseif($proyecto->estatus == 'ap')
                                <p>Fecha de inicio:<br>
                                    <strong>{{$proyecto->fecha_vigencia_inicio}}</strong>
                                </p>
                                <p>Fecha de témino:<br>
                                    <strong>{{$proyecto->fecha_vigencia_fin}}</strong>
                                </p>
                            @else
                                NA
                            @endif
                            </td>
                            <td class="col-xs-2 col-lg-2 col-md-2 col-sm-2">
                                <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Acciones <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Detalles</a></li>
                                    <li><a href="{{url('proyectos/editar/'.$proyecto->id)}}">Editar</a></li>
                                    <li><a href="#">Participantes</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li class="alert-danger"><a href="{{url('proyectos/eliminar/'.$proyecto->id)}}"><span class="glyphicon glyphicon-remove red" aria-hidden="true"></span>Eliminar</a></li>
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