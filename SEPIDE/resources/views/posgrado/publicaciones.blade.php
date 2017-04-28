@extends("templates.base")

@section('content')
    <section id="content">
        <div class="content">
            <div class="row">
                <h1 class="text-center">Publicaciones</h1>
            </div>
            <div class="row text-left">
                <a href="{{url('/agregar_publicacion')}}" class="btn btn-success">Agregar publicación</a>
                &nbsp;
                <br />
            </div>
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
                <tr>
                    <td class="col-xs-2 col-lg-2 col-md-2 col-sm-3">Libro de ejemplo</td>
                    <td class="col-xs-2 col-lg-2 col-md-2 col-sm-2">Libro</td>
                    <td class="col-xs-2 col-lg-2 col-md-2 col-sm-2">Internacional</td>
                    <td class="col-xs-2 col-lg-2 col-md-2 col-sm-1">Indexada</td>
                    <td class="col-xs-2 col-lg-2 col-md-2 col-sm-1">20-12-2018</td>
                    <td class="col-xs-2 col-lg-2 col-md-2 col-sm-1">15-05-2020</td>
                    <td class="col-xs-2 col-lg-2 col-md-2 col-sm-2"><button class="btn btn-default">Editar</button></td>
                </tr>
            </table>
        </div>
    </section>
@endsection