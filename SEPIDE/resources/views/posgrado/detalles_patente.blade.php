@extends("templates.base")

@section('content')

<section id="content">
        <div class="content">
            <div class="row">
                <h1 class="text-center">Patentes</h1>
            </div>
            <form class="form-horizontal" method="post">
            {{ csrf_field() }}
            <div class="row">
                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Nombre:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         {{$patente->nombre_patente}}
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Estatus:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         
                            @if($patente->estatus == "pr")
                                  Presentado
                            @elseif($patente->estatus == "ap")
                                  Aprobado
                            @elseif($patente->estatus == "na")
                                  No aprobado
                            @else
                                  &nbsp;
                            @endif
                                  
                     </div>
                 </div>
            </div>
            <hr>
            <div class="row">
                 @if($patente->estatus =="pr")
                 <div class="" id="div_fechas_patente">
                 @else
                 <div class="hidden" id="div_fechas_patente">
                 @endif
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="fechaForma" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de examen de forma:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             {{$patente->fecha_forma}}
                         </div>
                     </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="fechaFondo" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de examen fondo:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             {{$patente->fecha_fondo}}
                         </div>
                     </div>
                </div>

                @if($patente->estatus == "ap" || $patente->estatus == "na")
                <div class="" id="div_notificacion_patente">
                @else
                <div class="hidden" id="div_notificacion_patente">
                @endif
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="fechaNotificacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de notificación:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             {{$patente->fecha_notificacion}}
                         </div>
                     </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="registros" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Registro:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            @if($patente->registro == "un")
                                  Única
                            @elseif($patente->registro == "otro")
                                  Otros
                            @else
                                  &nbsp;
                            @endif
                           
                     </div>
                 </div>

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
            </div>
            </form>
            
        </div>

    </section>

@endsection