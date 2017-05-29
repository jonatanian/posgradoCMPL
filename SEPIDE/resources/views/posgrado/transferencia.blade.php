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
                <h1 class="text-center">Transferencia de Tecnología e Innovación</h1>
            </div>
            <div class="row text-left">
                <a href="{{url('/transferencias/agregar')}}" class="btn btn-success">Agregar Transferencia</a>
                &nbsp;
                <br />
            </div>
            @if(isset($transferencias))
            <table class="table-striped">
                <tr>
                    <th class="col-xs-4 col-sm-4 col-md-4 col-lg-2">Nombre</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Tipo</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Licencia</th>
                    <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1">Estátus</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Vigencia</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Receptor</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-1">Acciones</th>
                </tr>
                @foreach($transferencias as $transferencia)
                    <tr>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">{{$transferencia->nombre_transferencia}}</td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">{{$transferencia->tipo}}</td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">{{$transferencia->licencia}}</td>
                        <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                            @if($transferencia->estatus == 'ac')
                                Aceptado
                            @elseif($transferencia->estatus == 'fn')
                                Finalizado
                            @else
                                -
                            @endif
                        </td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            @if($transferencia->estatus == 'ac')
                                <p>Fecha de inicio:<br>
                                    <strong>{{$transferencia->fecha_inicio}}</strong>
                                </p>
                                <p>Fecha de término:<br>
                                    <strong>{{$transferencia->fecha_termino}}</strong>
                                </p>
                            @elseif($transferencia->estatus == 'fn')
                                <p>Fecha de término:<br>
                                    <strong>{{$transferencia->fecha_termino}}</strong>
                                </p>
                            @endif
                        </td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">{{$transferencia->receptor}}</td>
                        <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Acciones <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Detalles</a></li>
                                    <li><a href="#">Editar</a></li>
                                    <li><a href="#">Participantes</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li class="alert-danger"><a href="{{url('transferencias/eliminar/'.$transferencia->id)}}"><span class="glyphicon glyphicon-remove red" aria-hidden="true"></span>Eliminar</a></li>
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