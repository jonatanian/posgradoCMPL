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
                <h1 class="text-center">Servicios</h1>
            </div>
            <div class="row text-left">
                <a href="{{url('/servicios/agregar')}}" class="btn btn-success">Agregar servicio</a>
                &nbsp;
                <br />
            </div>
            @if(isset($servicios))
            <table class="table-striped">
                <tr>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Servicio</th>
                    <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1">Alcance</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de desarrollo</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Nombre del servicio</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Organización</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Registro</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-1">Acciones</th>
                </tr>
                @foreach($servicios as $servicio)
                    <tr>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">{{$servicio->servicio}}</td>
                        <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1">{{$servicio->alcance}}</td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            Fecha inicio: {{$servicio->fecha_inicio}}<br>
                            Fecha término: {{$servicio->fecha_termino}}
                        </td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">{{$servicio->nombre_servicio}}</td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">{{$servicio->organizacion}}</td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            @if($servicio->tipo_registro == "otro")
                            {{$servicio->otro_registro}}: {{$servicio->registro}}
                            @else
                            {{$servicio->tipo_registro}}: {{$servicio->registro}}
                            @endif
                        </td>
                        <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
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
                        </td>
                    </tr>
                @endforeach
            </table>
            @endif
        </div>
    </section>
@endsection