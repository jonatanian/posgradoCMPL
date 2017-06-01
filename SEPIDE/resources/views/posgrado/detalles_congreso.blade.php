@extends("templates.base")

@section('content')

<section id="content">
        <div class="content">
            <div class="row">
                <h1 class="text-center">Congresos</h1>
            </div>
            <form class="form-horizontal" method="post">
            {{ csrf_field() }}
            <div class="row">
                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Nombre:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         {{$congreso->nombre_congreso}}
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Alcance:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         {{$congreso->alcance}}
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="participacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Participación:</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            {{$congreso->participacion}}
                        </div>
                 </div>
            </div>
            <hr>
            <div class="row">
                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="fecha" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de inicio:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        {{$congreso->fecha_inicio}}
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="fecha" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de término:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         {{$congreso->fecha_termino}}
                     </div>
                 </div>
            </div>
            <hr>
            <div class="row">
                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="registros" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Registros:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        {{$congreso->tipo_registro}}
                     </div>
                 </div>
                @if($congreso->tipo_registro == "otro")
                 <div class="" id="div_otro">
                @else
                 <div class="hidden" id="div_otro">
                @endif
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Otro:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             {{$congreso->otro}}
                         </div>
                     </div>
                 </div>

                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Número de registro:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         {{$congreso->registro}}
                     </div>
                 </div>
            </div>
            <hr>
            <div class="row">
                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="estatus" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Participantes:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <ul>
                         @foreach($inv_ind as $inv)
                            <li>{{$inv->investigador->nombre}} {{$inv->investigador->ap_paterno}} {{$inv->investigador->ap_materno}}</li>
                         @endforeach
                         </ul>
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="estatus" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Estudiantes:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <ul>
                         @foreach($est_ind as $est)
                            <li>{{$est->estudiante}}</li>
                        @endforeach
                        </ul>
                     </div>
                 </div>
            </div>
                 <div class="form-group">
                     <div class="col-xs-10">
                         <button type="submit" class="btn btn-primary">Guardar</button>
                     </div>
                 </div>
                
            </form>
            
        </div>

    </section>

@endsection