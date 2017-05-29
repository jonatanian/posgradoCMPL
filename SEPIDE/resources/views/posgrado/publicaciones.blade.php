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
                <h1 class="text-center">Publicaciones</h1>
            </div>
            <div class="row text-left">
                <a href="{{url('/publicaciones/agregar')}}" class="btn btn-success">Agregar publicación</a>
                &nbsp;
                <br />
            </div>
            @if(isset($publicaciones))
            <table class="table-striped">
                <tr>
                    <th class="col-xs-2 col-lg-2 col-md-2 col-sm-3">Nombre</th>
                    <th class="col-xs-2 col-lg-2 col-md-2 col-sm-2">Tipo</th>
                    <th class="col-xs-2 col-lg-2 col-md-2 col-sm-2">Alcance</th>
                    <th class="col-xs-2 col-lg-2 col-md-2 col-sm-1">Medio</th>
                    <th class="col-xs-2 col-lg-2 col-md-2 col-sm-1">Fecha de aceptación</th>
                    <th class="col-xs-2 col-lg-2 col-md-2 col-sm-1">Fecha de publicación</th>
                    <th class="col-xs-2 col-lg-2 col-md-2 col-sm-2">Acciones</th>
                </tr>
                    @foreach($publicaciones as $publicacion)
                        <tr>
                            <td class="col-xs-2 col-lg-2 col-md-2 col-sm-3">{{$publicacion->nombre_publicacion}}</td>
                            <td class="col-xs-2 col-lg-2 col-md-2 col-sm-2">{{$publicacion->tipo}}</td>
                            <td class="col-xs-2 col-lg-2 col-md-2 col-sm-2">{{$publicacion->alcance}}</td>
                            <td class="col-xs-2 col-lg-2 col-md-2 col-sm-1">
                            @if($publicacion->medio_publicacion == "otro")
                                {{$publicacion->otro}}
                            @else
                                {{$publicacion->medio_publicacion}}
                            @endif
                            </td>
                            <td class="col-xs-2 col-lg-2 col-md-2 col-sm-1">{{$publicacion->fecha_aceptacion}}</td>
                            <td class="col-xs-2 col-lg-2 col-md-2 col-sm-1">{{$publicacion->fecha_publicacion}}</td>
                            <td class="col-xs-2 col-lg-2 col-md-2 col-sm-2">
                                <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Acciones <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Detalles</a></li>
                                    <li><a href="{{url('publicaciones/editar/'.$publicacion->id)}}">Editar</a></li>
                                    <li><a href="#">Autores</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li class="alert-danger"><a href="{{url('publicaciones/eliminar/'.$publicacion->id)}}"><span class="glyphicon glyphicon-remove red" aria-hidden="true"></span>Eliminar</a></li>
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