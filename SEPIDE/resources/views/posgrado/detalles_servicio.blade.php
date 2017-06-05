@extends("templates.base")

@section('content')

<section id="content">
        <div class="content">
            <div class="row">
                <h1 class="text-center">Servicios</h1>
            </div>
            <form class="form-horizontal" method="post">
            {{ csrf_field() }}
            <div class="row">
                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Servicio:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        {{$servicio->servicio}}
                        
                     </div>
                 </div>

                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Alcance:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        {{$servicio->alcance}}
                            
                     </div>
                 </div>

                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="fecha" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha inicio:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         {{$servicio->fecha_inicio}}
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="fecha" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha término:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         {{$servicio->fecha_termino}}
                     </div>
                 </div>
            </div>
            <hr>
            <div class="row">
                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="participacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Nombre del servicio:</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         {{$servicio->nombre_servicio}}
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="participacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Organización que recibe:</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         {{$servicio->organizacion}}
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Registro:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        $servicio->tipo_registro
                     </div>
                 </div>
                @if($servicio->tipo_registro == "otro")
                <div class="" id="div_otro">
                @else
                <div class="hidden" id="div_otro">
                @endif
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="participacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Otra:</label>
                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="text" name="otro_registro" class="form-control disabled" placeholder="Otra..." value="{{$servicio->otro_registro}}">
                         </div>
                     </div>
                </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="participacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Num. registro:</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         {{$servicio->registro}}
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

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="estatus" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Asistentes:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <ul>
                         @foreach(explode(',',$servicio->asistentes) as $asistente)
                            <li>{{$asistente}}</li>
                        @endforeach
                        </ul>
                     </div>
                 </div>
            </div>
            <hr>
            <div class="row">

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Costo del servicio:</label>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                   $ {{$servicio->costo}}
                </div>
                </div>
            </div>
                
            </form>
            
        </div>

    </section>

@endsection