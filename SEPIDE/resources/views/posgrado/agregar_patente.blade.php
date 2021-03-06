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
                         <input type="text" name="nombre_patente" class="form-control" placeholder="Nombre">
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Estatus:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <select name="estatus" class="form-control" id="elem_estatus">
                                  <option value="">&nbsp;</option>
                                  <option value="pr">Presentado</option>
                                  <option value="ap">Aprobado</option>
                                  <option value="na">No aprobado</option>
                            </select>
                     </div>
                 </div>

                 <div class="hidden" id="div_fechas_patente">
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="fechaForma" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de examen de forma:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="text" name="fecha_forma" class="fecha form-control datepicker disabled" placeholder="Fecha de forma">
                         </div>
                     </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="fechaFondo" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de examen fondo:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="text" name="fecha_fondo" class="fecha form-control datepicker disabled" placeholder="Fecha de fondo">
                         </div>
                     </div>
                </div>


                <div class="hidden" id="div_notificacion_patente">
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="fechaNotificacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de notificación:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="text" name="fecha_notificacion" class="fecha form-control datepicker disabled" placeholder="Fecha de notificación">
                         </div>
                     </div>
                </div>
                 
                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="registros" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Registro:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <select name="registro" class="form-control" id="elem_patente">
                                  <option value="">&nbsp;</option>
                                  <option value="un">Única</option>
                                  <option value="otro">Otros</option>
                            </select>
                     </div>
                 </div>

                <div class="hidden" id="div_participantes">
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="estatus" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Participantes:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <select id="elem_estatus" name="investigadores[]" class="form-control" multiple>
                                  @foreach($investigadores as $inv)
                                    <option value="{{$inv['id']}}">{{$inv['nombre']}} {{$inv['ap_paterno']}} {{$inv['ap_materno']}}</option>
                                @endforeach
                            </select>
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