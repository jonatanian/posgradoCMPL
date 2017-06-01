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
                <h1 class="text-center">Patentes</h1>
            </div>
            <div class="row text-left">
                <a href="{{url('/patentes/agregar')}}" class="btn btn-success">Agregar patente</a>
                &nbsp;
                <br />
            </div>
            @if(isset($patentes))
            <table class="table-striped">
                <tr>
                    <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Nombre</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Estatus</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Registro</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Acciones</th>
                </tr>
                @foreach($patentes as $patente)
                    <tr>
                        <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">{{$patente->nombre_patente}}</td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            @if($patente->estatus == 'ap')
                                Aprobado
                            @elseif($patente->estatus == 'pr')
                                Presentado
                            @else
                                No aprobado
                            @endif
                        </td>
                        <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            @if($patente->estatus == 'pr')
                                <p>Fecha de examen de forma:<br>
                                    <strong>{{$patente->fecha_forma}}</strong>
                                </p>
                                <p>Fecha de examen de fondo:<br>
                                    <strong>{{$patente->fecha_fondo}}</strong>
                                </p>
                            @elseif($patente->estatus == 'ap')
                                <p>Fecha de notificación:<br>
                                    <strong>{{$patente->fecha_notificacion}}</strong>
                                </p>
                            @else
                                <p>Fecha de notificación:<br>
                                    <strong>{{$patente->fecha_notificacion}}</strong>
                                </p>
                            @endif
                        </td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            @if($patente->registro == 'un')
                                Único
                            @elseif($patente->registro == 'otro')
                                Otro
                            @else
                                -
                            @endif
                        </td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Acciones <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="{{url('patentes/'.$patente->id)}}">Detalles</a></li>
                                    <li><a href="{{url('patentes/editar/'.$patente->id)}}">Editar</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li class="alert-danger"><a href="{{url('patentes/eliminar/'.$patente->id)}}"><span class="glyphicon glyphicon-remove red" aria-hidden="true"></span>Eliminar</a></li>
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