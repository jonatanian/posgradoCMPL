@extends("templates.base")

@section('content')
    <section id="content">
        <div class="content">
            <div class="row">
                <h1 class="text-center">Seguimiento de producción en I+D+i (SEPIDI)</h1>
                <h2 class="text-center">Resumen CMPL</h2>
            </div>
            
            <div class="row">
                <h3>Proyectos:</h3>
                <div class="text-right">
                    <a href="{{url('/proyectos/agregar')}}" class="btn btn-success">Agregar proyecto</a>
                    &nbsp;
                    <br />
                </div>
                <table class="table-striped">
                    <tr>
                        <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Nombre</th>
                        <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Participantes</th>
                        <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Acciones</th>
                    </tr>
                    @foreach($proyectos as $proyecto)
                        <tr>
                            <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">{{$proyecto->nombre_proyecto}}</td>
                            <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                Docentes:
                                <ul>
                                    @foreach($inv_ind as $invest)
                                        @if($invest->indicador == 2)
                                            @if($invest->indicador_id == $proyecto->id)
                                                <li>{{$invest->investigador->nombre}} {{$invest->investigador->ap_paterno}} {{$invest->investigador->ap_materno}}</li>
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>
                                Estudiantes:
                                <ul>
                                    @foreach($est_ind as $est)
                                        @if($est->indicador == 2)
                                            @if($est->indicador_id == $proyecto->id)
                                                <li>{{$est->estudiante}}</li>
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>
                            </td>
                            <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                @if($investigador['rol'] == 1)
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Acciones <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{url('proyectos/'.$proyecto->id)}}">Detalles</a></li>
                                            <li><a href="{{url('proyectos/editar/'.$proyecto->id)}}">Editar</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li class="alert-danger"><a href="{{url('proyectos/eliminar/'.$proyecto->id)}}"><span class="glyphicon glyphicon-remove red" aria-hidden="true"></span>Eliminar</a></li>
                                    </ul>
                                    </div>
                                @else
                                    NA
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <hr>
            <div class="row">
                <h3>Publicaciones:</h3>
                <div class="text-right">
                    <a href="{{url('/publicaciones/agregar')}}" class="btn btn-success">Agregar publicación</a>
                    &nbsp;
                    <br />
                </div>
                <table class="table-striped">
                    <tr>
                        <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Nombre</th>
                        <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Participantes</th>
                        <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Acciones</th>
                    </tr>
                    @foreach($publicaciones as $publicacion)
                        <tr>
                            <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">{{$publicacion->nombre_publicacion}}</td>
                            <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                Docentes:
                                <ul>
                                    @foreach($inv_ind as $invest)
                                        @if($invest->indicador == 3)
                                            @if($invest->indicador_id == $publicacion->id)
                                                <li>{{$invest->investigador->nombre}} {{$invest->investigador->ap_paterno}} {{$invest->investigador->ap_materno}}</li>
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>
                                Estudiantes:
                                <ul>
                                    @foreach($est_ind as $est)
                                        @if($est->indicador == 3)
                                            @if($est->indicador_id == $publicacion->id)
                                                <li>{{$est->estudiante}}</li>
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>
                            </td>
                            <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                @if($investigador['rol'] == 1)
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Acciones <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{url('publicaciones/'.$publicacion->id)}}">Detalles</a></li>
                                            <li><a href="{{url('publicaciones/editar/'.$publicacion->id)}}">Editar</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li class="alert-danger"><a href="{{url('publicaciones/eliminar/'.$publicacion->id)}}"><span class="glyphicon glyphicon-remove red" aria-hidden="true"></span>Eliminar</a></li>
                                        </ul>
                                    </div>
                                @else
                                    NA
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <hr>
            <div class="row">
                <h3>Congresos:</h3>
                <div class="text-right">
                    <a href="{{url('/congresos/agregar')}}" class="btn btn-success">Agregar congreso</a>
                    &nbsp;
                    <br />
                </div>
                <table class="table-striped">
                    <tr>
                        <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Nombre</th>
                        <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Participantes</th>
                        <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Acciones</th>
                    </tr>
                    @foreach($congresos as $congreso)
                        <tr>
                            <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">{{$congreso->nombre_congreso}}</td>
                            <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                Docentes:
                                <ul>
                                    @foreach($inv_ind as $invest)
                                        @if($invest->indicador == 4)
                                            @if($invest->indicador_id == $congreso->id)
                                                <li>{{$invest->investigador->nombre}} {{$invest->investigador->ap_paterno}} {{$invest->investigador->ap_materno}}</li>
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>
                                Estudiantes:
                                <ul>
                                    @foreach($est_ind as $est)
                                        @if($est->indicador == 4)
                                            @if($est->indicador_id == $congreso->id)
                                                <li>{{$est->estudiante}}</li>
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>
                            </td>
                            <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                @if($investigador['rol'] == 1)
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Acciones <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{url('congresos/'.$congreso->id)}}">Detalles</a></li>
                                            <li><a href="{{url('congresos/editar/'.$congreso->id)}}">Editar</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li class="alert-danger"><a href="{{url('congresos/eliminar/'.$congreso->id)}}"><span class="glyphicon glyphicon-remove red" aria-hidden="true"></span>Eliminar</a></li>
                                        </ul>
                                    </div>
                                @else
                                    NA
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <hr>
            <div class="row">
                <h3>Patentes:</h3>
                <div class="text-right">
                    <a href="{{url('/patentes/agregar')}}" class="btn btn-success">Agregar patente</a>
                    &nbsp;
                    <br />
                </div>
                <table class="table-striped">
                    <tr>
                        <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Nombre</th>
                        <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Participantes</th>
                        <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Acciones</th>
                    </tr>
                    @foreach($patentes as $patente)
                        <tr>
                            <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">{{$patente->nombre_patente}}</td>
                            <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                Docentes:
                                <ul>
                                    @foreach($inv_ind as $invest)
                                        @if($invest->indicador == 5)
                                            @if($invest->indicador_id == $patente->id)
                                                <li>{{$invest->investigador->nombre}} {{$invest->investigador->ap_paterno}} {{$invest->investigador->ap_materno}}</li>
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>
                                Estudiantes:
                                <ul>
                                    @foreach($est_ind as $est)
                                        @if($est->indicador == 5)
                                            @if($est->indicador_id == $patente->id)
                                                <li>{{$est->estudiante}}</li>
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>
                            </td>
                            <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                @if($investigador['rol'] == 1)
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
                                @else
                                    NA
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <hr>
            <div class="row">
                <h3>Transferencias de tecnología e innovación:</h3>
                <div class="text-right">
                    <a href="{{url('/transferencias/agregar')}}" class="btn btn-success">Agregar Transferencia</a>
                    &nbsp;
                    <br />
                </div>
                <table class="table-striped">
                    <tr>
                        <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Nombre</th>
                        <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Participantes</th>
                        <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Acciones</th>
                    </tr>
                    @foreach($transferencias as $transferencia)
                        <tr>
                            <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">{{$transferencia->nombre_transferencia}}</td>
                            <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                NA
                            </td>
                            <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                @if($investigador['rol'] == 1)
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Acciones <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{url('transferencias/'.$transferencia->id)}}">Detalles</a></li>
                                            <li><a href="{{url('transferencias/editar/'.$transferencia->id)}}">Editar</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li class="alert-danger"><a href="{{url('transferencias/eliminar/'.$transferencia->id)}}"><span class="glyphicon glyphicon-remove red" aria-hidden="true"></span>Eliminar</a></li>
                                        </ul>
                                    </div>
                                @else
                                    NA
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <hr>
            <div class="row">
                <h3>Conferencias:</h3>
                <div class="text-right">
                    <a href="{{url('/conferencias/agregar')}}" class="btn btn-success">Agregar conferencia</a>
                    &nbsp;
                    <br />
                </div>
                <table class="table-striped">
                    <tr>
                        <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Nombre</th>
                        <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Participantes</th>
                        <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Acciones</th>
                    </tr>
                    @foreach($conferencias as $conferencia)
                        <tr>
                            <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">{{$conferencia->tema_participacion}}</td>
                            <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                Docentes:
                                <ul>
                                    @foreach($inv_ind as $invest)
                                        @if($invest->indicador == 7)
                                            @if($invest->indicador_id == $conferencia->id)
                                                <li>{{$invest->investigador->nombre}} {{$invest->investigador->ap_paterno}} {{$invest->investigador->ap_materno}}</li>
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>
                                Estudiantes:
                                <ul>
                                    @foreach($est_ind as $est)
                                        @if($est->indicador == 7)
                                            @if($est->indicador_id == $conferencia->id)
                                                <li>{{$est->estudiante}}</li>
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>
                            </td>
                            <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                @if($investigador['rol'] == 1)
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Acciones <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{url('conferencias/'.$conferencia->id)}}">Detalles</a></li>
                                            <li><a href="{{url('conferencias/editar/'.$conferencia->id)}}">Editar</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li class="alert-danger"><a href="{{url('conferencias/eliminar/'.$conferencia->id)}}"><span class="glyphicon glyphicon-remove red" aria-hidden="true"></span>Eliminar</a></li>
                                        </ul>
                                    </div>
                                @else
                                    NA
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <hr>
            <div class="row">
                <h3>Docencias:</h3>
                <div class="text-right">
                    <a href="{{url('/docencias/agregar')}}" class="btn btn-success">Agregar Docencia</a>
                    &nbsp;
                    <br />
                </div>
                <table class="table-striped">
                    <tr>
                        <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Duración</th>
                        <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Participantes</th>
                        <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Acciones</th>
                    </tr>
                    @foreach($docencias as $docencia)
                        <tr>
                            <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            Fecha inicio: {{$docencia->fecha_inicio}}<br>
                            Fecha de término: {{$docencia->fecha_termino}}
                            </td>
                            <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                Asistentes:
                                <ul>
                                    @foreach($est_ind as $est)
                                        @if($est->indicador == 8)
                                            @if($est->indicador_id == $docencia->id)
                                                <li>{{$est->estudiante}}</li>
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>
                            </td>
                            <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                @if($investigador['rol'] == 1)
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Acciones <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{url('docencias/'.$docencia->id)}}">Detalles</a></li>
                                            <li><a href="{{url('docencias/editar/'.$docencia->id)}}">Editar</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li class="alert-danger"><a href="{{url('docencias/eliminar/'.$docencia->id)}}"><span class="glyphicon glyphicon-remove red" aria-hidden="true"></span>Eliminar</a></li>
                                        </ul>
                                    </div>
                                @else
                                    NA
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <hr>
            <div class="row">
                <h3>Software:</h3>
                <div class="text-right">
                    <a href="{{url('/software/agregar')}}" class="btn btn-success">Agregar software</a>
                    &nbsp;
                    <br />
                </div>
                <table class="table-striped">
                    <tr>
                        <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Descripción:</th>
                        <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Participantes</th>
                        <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Acciones</th>
                    </tr>
                    @foreach($software as $soft)
                        <tr>
                            <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            {{$soft->descripcion}}
                            </td>
                            <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                NA
                            </td>
                            <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                @if($investigador['rol'] == 1)
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Acciones <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{url('software/'.$soft->id)}}">Detalles</a></li>
                                            <li><a href="{{url('software/editar/'.$soft->id)}}">Editar</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li class="alert-danger"><a href="{{url('software/eliminar/'.$soft->id)}}"><span class="glyphicon glyphicon-remove red" aria-hidden="true"></span>Eliminar</a></li>
                                        </ul>
                                    </div>
                                @else
                                    NA
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <hr>
            <div class="row">
                <h3>Servicios:</h3>
                <div class="text-right">
                    <a href="{{url('/servicios/agregar')}}" class="btn btn-success">Agregar servicio</a>
                    &nbsp;
                    <br />
                </div>
                <table class="table-striped">
                    <tr>
                        <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Nombre</th>
                        <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Participantes</th>
                        <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Acciones</th>
                    </tr>
                    @foreach($servicios as $servicio)
                        <tr>
                            <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">{{$servicio->nombre_servicio}}</td>
                            <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                Docentes:
                                <ul>
                                    @foreach($inv_ind as $invest)
                                        @if($invest->indicador == 10)
                                            @if($invest->indicador_id == $servicio->id)
                                                <li>{{$invest->investigador->nombre}} {{$invest->investigador->ap_paterno}} {{$invest->investigador->ap_materno}}</li>
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>
                                Estudiantes:
                                <ul>
                                    @foreach($est_ind as $est)
                                        @if($est->indicador == 10)
                                            @if($est->indicador_id == $servicio->id)
                                                <li>{{$est->estudiante}}</li>
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>
                            </td>
                            <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                @if($investigador['rol'] == 1)
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Acciones <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{url('servicios/'.$servicio->id)}}">Detalles</a></li>
                                            <li><a href="{{url('servicios/editar/'.$servicio->id)}}">Editar</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li class="alert-danger"><a href="{{url('servicios/eliminar/'.$servicio->id)}}"><span class="glyphicon glyphicon-remove red" aria-hidden="true"></span>Eliminar</a></li>
                                        </ul>
                                    </div>
                                @else
                                    NA
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <hr>
            <div class="row">
                <h3>Movilidad:</h3>
                <div class="text-right">
                    <a href="{{url('/movilidad/agregar')}}" class="btn btn-success">Agregar movilidad</a>
                    &nbsp;
                    <br />
                </div>
                <table class="table-striped">
                    <tr>
                        <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Nombre del programa:</th>
                        <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Participantes</th>
                        <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Acciones</th>
                    </tr>
                    @foreach($movilidad as $mov)
                        <tr>
                            <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            {{$mov->nombre_programa}}
                            </td>
                            <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                NA
                            </td>
                            <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                @if($investigador['rol'] == 1)
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Acciones <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{url('movilidad/'.$mov->id)}}">Detalles</a></li>
                                            <li><a href="{{url('movilidad/editar/'.$mov->id)}}">Editar</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li class="alert-danger"><a href="{{url('movilidad/eliminar/'.$mov->id)}}"><span class="glyphicon glyphicon-remove red" aria-hidden="true"></span>Eliminar</a></li>
                                    </ul>
                                    </div>
                                @else
                                    NA
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <hr>
            <div class="row">
                <h3>Direcciones de Tesis:</h3>
                <div class="text-right">
                    <a href="{{url('/direccion/agregar')}}" class="btn btn-success">Agregar dirección</a>
                    &nbsp;
                    <br />
                </div>
                <table class="table-striped">
                    <tr>
                        <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Tipo:</th>
                        <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Alumno</th>
                        <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Acciones</th>
                    </tr>
                    @foreach($direcciones as $direccion)
                        <tr>
                            <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            {{$direccion->tipo}}
                            </td>
                            <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            {{$direccion->alumno}}
                            </td>
                            <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            @if($investigador['rol'] == 1)
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Acciones <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{url('direccion/'.$direccion->id)}}">Detalles</a></li>
                                        <li><a href="{{url('direccion/editar/'.$direccion->id)}}">Editar</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li class="alert-danger"><a href="{{url('direccion/eliminar/'.$direccion->id)}}"><span class="glyphicon glyphicon-remove red" aria-hidden="true"></span>Eliminar</a></li>
                                    </ul>
                                </div>
                            @else
                                NA
                            @endif
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>

        </div>
    </section>
@endsection