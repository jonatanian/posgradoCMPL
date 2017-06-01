@extends("templates.base")

@section('content')

<section id="content">
        <div class="content">
            <div class="row">
                <h1 class="text-center">Software</h1>
            </div>
            <form class="form-horizontal" method="post">
            {{ csrf_field() }}
            <div class="row">
                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="fecha" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Descripción:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         {{$software->descripcion}}
                     </div>
                 </div>

                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="fecha" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha inicio (desarrollo):</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         {{$software->fecha_inicio}}
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="fecha" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha término:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         {{$software->fecha_termino}}
                     </div>
                 </div>
            </div>
            <hr>
            <div class="row">
                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Registro INDAUTOR:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         {{$software->registro}}
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Estátus:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            @if($software->estatus == "pr")
                                  <p>Presentado</p>
                            @elseif($software->estatus == "ap")
                                  <p>Aprobado</p>
                            @else
                                  -
                            @endif
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="fecha" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de aprobación:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         {{$software->fecha_aprobacion}}
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="participacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Área de aplicación:</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         {{$software->area_aplicacion}}
                     </div>
                 </div>
            </div>
                
            </form>
            
        </div>

    </section>

@endsection