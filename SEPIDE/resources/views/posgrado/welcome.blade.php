@extends("templates.base")

@section('content')
    <section id="content">
        <div class="content">
            <div class="row">
                <h1 class="text-center">Proyectos de I+D+i</h1>
            </div>
            <div class="row text-left">
                <a href="{{url('/agregar')}}" class="btn btn-success">Agregar proyecto</a>
                &nbsp;
                <br />
            </div>
            <table class="table-striped">
                <tr>
                    <th class="col-xs-2 col-lg-2 col-md-2 col-sm-2">Nombre</th>
                    <th class="col-xs-2 col-lg-2 col-md-2 col-sm-2">Financiamiento</th>
                    <th class="col-xs-2 col-lg-2 col-md-2 col-sm-2">Programa</th>
                    <th class="col-xs-2 col-lg-2 col-md-2 col-sm-2">Estátus</th>
                    <th class="col-xs-2 col-lg-2 col-md-2 col-sm-2">Fecha de estátus</th>
                    <th class="col-xs-2 col-lg-2 col-md-2 col-sm-2">Vigencia del proyecto</th>
                </tr>
                <tr>
                    <td class="col-xs-2 col-lg-2 col-md-2 col-sm-2">Proyecto X</td>
                    <td class="col-xs-2 col-lg-2 col-md-2 col-sm-2">Something</td>
                    <td class="col-xs-2 col-lg-2 col-md-2 col-sm-2">Producción más limpia</td>
                    <td class="col-xs-2 col-lg-2 col-md-2 col-sm-2">Aprobado</td>
                    <td class="col-xs-2 col-lg-2 col-md-2 col-sm-2">20-12-2018</td>
                    <td class="col-xs-2 col-lg-2 col-md-2 col-sm-2">15-05-2020</td>
                </tr>
            </table>
        </div>
    </section>
@endsection
