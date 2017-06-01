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
                <h1 class="text-center">Movilidad</h1>
            </div>
            <div class="row text-left">
                <a href="{{url('/movilidad/agregar')}}" class="btn btn-success">Agregar movilidad</a>
                &nbsp;
                <br />
            </div>
            @if(isset($movilidad))
            <table class="table-striped">
                <tr>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Tipo</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Nombre Programa</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Alcance</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Institución destino</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Acciones</th>
                </tr>
                @foreach($movilidad as $mov)
                    <tr>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">{{$mov->tipo}}</td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">{{$mov->nombre_programa}}</td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            Fecha inicio: {{$mov->fecha_inicio}}<br>
                            Fecha término: {{$mov->fecha_termino}}
                        </td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">{{$mov->alcance}}</td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">{{$mov->institucion_destino}}</td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
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
                        </td>
                    </tr>
                @endforeach
            </table>
            @endif
        </div>
    </section>
@endsection