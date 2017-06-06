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
                <h1 class="text-center">Docencia</h1>
            </div>
            <div class="row text-left">
                <a href="{{url('/docencias/agregar')}}" class="btn btn-success">Agregar Docencia</a>
                &nbsp;
                <br />
            </div>
            @if(isset($docencias))
            <table class="table-striped">
                <tr>
                    <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Duración</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Alcance</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Asignaturas</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Asistentes</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Acciones</th>
                </tr>
                @foreach($docencias as $docencia)
                    <tr>
                        <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <p>Fecha inicio: {{$docencia->fecha_inicio}}</p>
                        <p>Fecha término: {{$docencia->fecha_termino}}</p>
                        </td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            {{$docencia->tipo_alcance}}
                        </td>
                        <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <ul>
                            @foreach(explode(',',$docencia->asignaturas) as $asignatura)
                                <li>{{$asignatura}}</li>
                            @endforeach
                            </ul>
                        </td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                           <ul>
                                @foreach($asistentes as $asistente)
                                    @if($asistente->indicador_id == $docencia->id)
                                    <li>{{$asistente->estudiante}}</li>
                                    @endif
                                @endforeach
                           </ul>
                        </td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
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
                        </td>
                    </tr>
                @endforeach
            </table>
            @endif
        </div>
    </section>
@endsection