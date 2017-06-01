@extends("templates.base")

@section('content')

<section id="content">
        <div class="content">
            <div class="row">
                <h1 class="text-center">Patentes</h1>
            </div>
            <form class="form-horizontal" method="post">
            {{ csrf_field() }}
                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Nombre:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="nombre_patente" class="form-control" placeholder="Nombre" value="{{$patente->nombre_patente}}">
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Estatus:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <select name="estatus" class="form-control" id="elem_estatus">
                            @if($patente->estatus == "pr")
                                  <option value="">&nbsp;</option>
                                  <option value="pr" selected>Presentado</option>
                                  <option value="ap">Aprobado</option>
                                  <option value="na">No aprobado</option>
                            @elseif($patente->estatus == "ap")
                                  <option value="">&nbsp;</option>
                                  <option value="pr">Presentado</option>
                                  <option value="ap" selected>Aprobado</option>
                                  <option value="na">No aprobado</option>
                            @elseif($patente->estatus == "na")
                                  <option value="">&nbsp;</option>
                                  <option value="pr">Presentado</option>
                                  <option value="ap">Aprobado</option>
                                  <option value="na" selected>No aprobado</option>
                            @else
                                  <option value="">&nbsp;</option>
                                  <option value="pr">Presentado</option>
                                  <option value="ap">Aprobado</option>
                                  <option value="na">No aprobado</option>
                            @endif
                                  
                        </select>
                     </div>
                 </div>
                 @if($patente->estatus =="pr")
                 <div class="" id="div_fechas_patente">
                 @else
                 <div class="hidden" id="div_fechas_patente">
                 @endif
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="fechaForma" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de examen de forma:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="text" name="fecha_forma" class="fecha form-control datepicker disabled" placeholder="Fecha de forma" value="{{$patente->fecha_forma}}">
                         </div>
                     </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="fechaFondo" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de examen fondo:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="text" name="fecha_fondo" class="fecha form-control datepicker disabled" placeholder="Fecha de fondo" value="{{$patente->fecha_fondo}}">
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
                             <input type="text" name="fecha_notificacion" class="fecha form-control datepicker disabled" placeholder="Fecha de notificación" value="{{$patente->fecha_notificacion}}">
                         </div>
                     </div>
                </div>
                 
                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="registros" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Registro:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <select name="registro" class="form-control" id="elem_patente">
                            @if($patente->registro == "un")
                                  <option value="">&nbsp;</option>
                                  <option value="un" selected>Única</option>
                                  <option value="otro">Otros</option>
                            @elseif($patente->registro == "otro")
                                  <option value="">&nbsp;</option>
                                  <option value="un">Única</option>
                                  <option value="otro" selected>Otros</option>
                            @else
                                  <option value="">&nbsp;</option>
                                  <option value="un">Única</option>
                                  <option value="otro">Otros</option>
                            @endif
                                
                            </select>
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="estatus" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Participantes:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <select id="elem_estatus" name="investigadores[]" class="form-control" multiple>
                              @foreach($investigadores as $inv)
                                @foreach($inv_ind as $i)
                                    @if($i->investigador_id == $inv["id"])
                                        <option value="{{$inv['id']}}" selected>{{$inv['nombre']}} {{$inv['ap_paterno']}} {{$inv['ap_materno']}}</option>
                                        {! $bandera = 1 !}
                                        @break
                                    @else
                                        {! $bandera = 0 !}
                                    @endif
                                @endforeach
                                @if($bandera != 1)
                                    <option value="{{$inv['id']}}">{{$inv['nombre']}} {{$inv['ap_paterno']}} {{$inv['ap_materno']}}</option>
                                @endif
                              @endforeach
                        </select>
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