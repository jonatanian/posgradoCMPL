@extends("templates.base")

@section('content')
    <section id="content">
        <div class="content">
            <div class="row">
                <h1 class="text-center">{{$investigador['grado']}} {{$investigador['nombre']}} {{$investigador['ap_paterno']}} {{$investigador['ap_materno']}}</h1><br>
                <h2 class="text-center">I+D+i</h2>
            </div>
            <div class="row">
                <h3>Proyectos:</h3>
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
                                        @if($invest->indicador == 2)
                                            @if($invest->indicador_id == $proyecto->id)
                                                <li>{{$est->estudiante}}</li>
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>
                            </td>
                            <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
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
                <table>

                    @if(!empty($publicaciones))
                    <tr>
                    <div>
                        <h3>Publicaciones:</h3>
                        <ul>
                        @foreach($publicaciones as $publicacion)
                            <li><a href="{{ url('publicaciones/'.$publicacion->id) }}">{{$publicacion->nombre_publicacion}}</a></li>
                        @endforeach
                        </ul>
                    </div>
                    </tr>
                    @endif

                    @if(!empty($congresos))
                    <tr>
                    <div>
                        <h3>Congresos:</h3>
                        <ul>
                        @foreach($congresos as $congreso)
                            <li><a href="{{ url('congresos/'.$congreso->id) }}">{{$congreso->nombre_congreso}}</a></li>
                        @endforeach
                        </ul>
                    </div>
                    </tr>
                    @endif

                    @if(!empty($patentes))
                    <tr>
                    <div>
                        <h3>Patentes:</h3>
                        <ul>
                        @foreach($patentes as $patente)
                            <li><a href="{{ url('patentes/'.$patente->id) }}">{{$patente->nombre_patente}}</a></li>
                        @endforeach
                        </ul>
                    </div>
                    </tr>
                    @endif

                    @if(!empty($transferencias))
                    <tr>
                    <div>
                        <h3>Transferencias:</h3>
                        <ul>
                        @foreach($transferencias as $transferencia)
                            <li><a href="{{ url('transferencias/'.$transferencia->id) }}">{{$transferencia->nombre_transferencia}}</a></li>
                        @endforeach
                        </ul>
                    </div>
                    </tr>
                    @endif

                    @if(!empty($conferencias))
                    <tr>
                    <div>
                        <h3>Conferencias:</h3>
                        <ul>
                        @foreach($conferencias as $conferencia)
                            <li><a href="{{ url('conferencias/'.$conferencia->id) }}">{{$conferencia->nombre_programa}}</a></li>
                        @endforeach
                        </ul>
                    </div>
                    </tr>
                    @endif

                    @if(!empty($software))
                    <tr>
                    <div>
                        <h3>Software:</h3>
                        <ul>
                        @foreach($software as $soft)
                            <li><a href="{{ url('software/'.$soft->id) }}">{{$soft->descripcion}}</a></li>
                        @endforeach
                        </ul>
                    </div>
                    </tr>
                    @endif

                    @if(!empty($movilidad))
                    <tr>
                    <div>
                        <h3>Movilidad:</h3>
                        <ul>
                        @foreach($movilidad as $mov)
                            <li><a href="{{ url('movilidad/'.$mov->id) }}">{{$mov->nombre_programa}}</a></li>
                        @endforeach
                        </ul>
                    </div>
                    </tr>
                    @endif
                </table>
            </div>
            <div class="row">
                <h2 class="text-center">Adscripción al programa CMP+L</h2>
                @foreach($adscripciones as $ads)
                    <h3 class="text-center">{{$ads->adscripcion->nombre}}</h3>
                @endforeach
            </div>

            <div class="row">
            @if($prof_ads)
                <h2 class="text-center">Profesor Adscrito</h2>
                <h3 class="text-center">{{$prof_ads->profesor_adscrito}}</h3>
            </div>
            @endif
            <div class="row">
                <h2 class="text-center">Profesor Posgrado PNPC</h2>
                @foreach($prof_pos as $prof)
                    <h3 class="text-center">{{$prof->profesor_posgrado->nombre_posgrado}}</h3>
                @endforeach
            </div>
        </div>
    </section>
@endsection