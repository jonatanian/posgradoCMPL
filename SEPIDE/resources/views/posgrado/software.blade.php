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
                <h1 class="text-center">Software</h1>
            </div>
            <div class="row text-left">
                <a href="{{url('/software/agregar')}}" class="btn btn-success">Agregar software</a>
                &nbsp;
                <br />
            </div>
            @if(isset($software))
            <table class="table-striped">
                <tr>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Descripción</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de desarrollo</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Registro INDAUTOR</th>
                    <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1">Estátus</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Área de aplicación</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-1">Acciones</th>
                </tr>
                @foreach($software as $soft)
                    <tr>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">{{$soft->descripcion}}</td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            Fecha inicio: {{$soft->fecha_inicio}}<br>
                            Fecha término: {{$soft->fecha_termino}}
                        </td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">{{$soft->registro}}</td>
                        <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                        @if($soft->estatus == "ap")
                            Aprobado
                        @elseif($soft->estatus == "pr")
                            Presentado
                        @endif
                        </td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        @if($soft->estatus == "ap")
                            {{$soft->fecha_aprobacion}}
                        @elseif($soft->estatus == "pr")
                            {{$soft->fecha_presentacion}}
                        @else
                            -
                        @endif
                        </td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">{{$soft->area_aplicacion}}</td>
                        <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
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
                        </td>
                    </tr>
                @endforeach
            </table>
            @endif
        </div>
    </section>
@endsection