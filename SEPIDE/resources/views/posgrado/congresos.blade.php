@extends("templates.base")

@section('content')
    <section id="content">
        <div class="content">
            <div class="row">
                <h1 class="text-center">Congresos</h1>
            </div>
            <div class="row text-left">
                <a href="{{url('/agregar_congreso')}}" class="btn btn-success">Agregar congreso</a>
                &nbsp;
                <br />
            </div>
            <table class="table-striped">
                <tr>
                    <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Nombre</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Alcance</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Participación</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha</th>
                    <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Acciones</th>
                </tr>
                <tr>
                    <td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Congreso X</td>
                    <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Internacional</td>
                    <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Comité organizador</td>
                    <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">15-05-2020</td>
                    <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><button class="btn btn-default">Editar</button></td>
                </tr>
            </table>
        </div>
    </section>
@endsection