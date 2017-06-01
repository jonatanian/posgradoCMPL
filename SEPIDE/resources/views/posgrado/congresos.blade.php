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
                <h1 class="text-center">Congresos</h1>
            </div>
            <div class="row text-left">
                <a href="{{url('/congresos/agregar')}}" class="btn btn-success">Agregar congreso</a>
                &nbsp;
                <br />
            </div>
            @if(isset($congresos))
            <table class="table-striped">
                <tr>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Nombre</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Alcance</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Participación</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Registro</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Fechas</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Acciones</th>
                </tr>
                @foreach($congresos as $congreso)
                    <tr>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">{{$congreso->nombre_congreso}}</td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">{{$congreso->alcance}}</td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">{{$congreso->participacion}}</td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        @if($congreso->tipo_registro == "otro")
                            {{$congreso->otro}}:<br>
                        @else
                            {{$congreso->tipo_registro}}:<br>
                        @endif
                            {{$congreso->registro}}
                        </td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        Fecha inicio: {{$congreso->fecha_inicio}}<br>
                        Fecha término: {{$congreso->fecha_termino}}
                        </td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
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
                        </td>
                    </tr>
                @endforeach
            </table>
            @endif
        </div>
    </section>
@endsection