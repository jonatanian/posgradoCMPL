@extends("templates.base")

@section('content')
    <section id="content">
        <div class="content">
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
                    <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Nombre</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Alcance</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Participación</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Acciones</th>
                </tr>
                @foreach($congresos as $congreso)
                    <tr>
                        <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">{{$congreso->nombre_congreso}}</td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">{{$congreso->alcance}}</td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">{{$congreso->participacion}}</td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">{{$congreso->fecha}}</td>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Acciones <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Detalles</a></li>
                                    <li><a href="#">Editar</a></li>
                                    <li><a href="#">Participantes</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li class="alert-danger"><a href="#"><span class="glyphicon glyphicon-remove red" aria-hidden="true"></span>Borrar</a></li>
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