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
                <h1 class="text-center">Dirección de tesis</h1>
            </div>
            <div class="row text-left">
                <a href="{{url('/direccion/agregar')}}" class="btn btn-success">Agregar dirección</a>
                &nbsp;
                <br />
            </div>
            @if(isset($direcciones))
            <table class="table-striped">
                <tr>
                    <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1">Tipo</th>   
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Programa</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Alumno</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Título</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">LGAC</th>
                    <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1">Estátus</th>
                    <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1">Fecha</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-1">Acciones</th>
                </tr>
                @foreach($direcciones as $direccion)
                    <tr>
                        <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1">{{$direccion->tipo}}</td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">{{$direccion->programa}}</td>
                        <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1">{{$direccion->alumno}}</td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">{{$direccion->titulo}}</td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">{{$direccion->lgac}}</td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">{{$direccion->estatus}}</td>
                        <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                        @if($direccion->estatus == "En desarrollo")
                            {{$direccion->fecha_limite}}
                        @elseif($direccion->estatus == "Terminada")
                            {{$direccion->fecha_termino}}
                        @else
                            -
                        @endif
                        </td>
                        <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
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
                        </td>
                    </tr>
                @endforeach
            </table>
            @endif
        </div>
    </section>
@endsection