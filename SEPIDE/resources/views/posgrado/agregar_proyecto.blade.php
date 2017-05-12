@extends("templates.base")

@section('content')

<section id="content">
        <div class="content">
            <div class="row">
                <h1 class="text-center">Proyectos de I+D+i</h1>
            </div>
            <form class="form-horizontal" action="{{url('/proyectos/agregar')}}" method="post">
                {{ csrf_field() }}
                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Nombre:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="nombre_proyecto" class="form-control" placeholder="Nombre">
                     </div>
                 </div>
                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="inputEmail" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Financiamiento:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        
                         <select name="financiamiento_id" class="form-control">
                              <option value"" disabled>-- Externo --</option>
                              @foreach($financiamiento as $fin)
                                @if($fin->tipo == 'ext')
                                    <option value="{{$fin->id}}">{{$fin->nombre_financiamiento}}</option>
                                @endif
                              @endforeach
                            <option value"" disabled>-- Interno --</option>
                                @foreach($financiamiento as $fin)
                                  @if($fin->tipo == 'int')
                                    <option value="{{$fin->id}}">{{$fin->nombre_financiamiento}}</option>
                                  @endif
                                @endforeach
                        </select>
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="otro" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Otro:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="otro" class="form-control" placeholder="Otro">
                     </div>
                 </div>

                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="programa" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Programa:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="programa" class="form-control" placeholder="Programa">
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="estatus" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Estatus:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <select id="elem_estatus" name="estatus" class="form-control">
                              <option value="">&nbsp;</option>
                              <option value="pr">Presentado</option>
                              <option value="ap">Aprobado</option>
                              <option value="na">No aprobado</option>
                        </select>
                     </div>
                 </div>
                 <div id="div_estatus_presentado" class="hidden">
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="fechaPresentacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de presentación:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="date" name="fecha_presentacion" class="form-control datepicker" placeholder="Fecha de presentacion">
                         </div>
                     </div>
                     <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="fechaVencimiento" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de vencimiento:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="date" name="fecha_vencimiento" class="form-control datepicker" placeholder="Fecha de vencimiento">
                         </div>
                     </div>
                </div>
                <div id="div_estatus_aprobado" class="hidden">
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="fechaInicio" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de inicio:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="date" name="fecha_vigencia_inicio" class="form-control datepicker" placeholder="Fecha de inicio">
                         </div>
                     </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="fechaTermino" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de término:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="date" name="fecha_vigencia_fin" class="form-control datepicker" placeholder="Fecha de Término">
                         </div>
                     </div>
                </div>

                <div id="div_notificacion" class="hidden">
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="fechaNotificacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de notificación:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="date" name="fecha_notificacion" class="form-control datepicker" placeholder="Fecha de notificación">
                         </div>
                     </div>
                </div>

                <div id="div_monto" class="hidden">
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Monto financiado:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="text" name="monto_total" class="form-control" placeholder="Total">
                         </div>
                         <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Partida 2000:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="text" name="monto_p2" class="form-control" placeholder="Partida 2000">
                         </div>
                         <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Partida 3000:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="text" name="monto_p3" class="form-control" placeholder="Partida 3000">
                         </div>
                         <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Partida 5000:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="text" name="monto_p5" class="form-control" placeholder="Partida 5000">
                         </div>
                         <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Estimulos al personal:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="text" name="estimulos" class="form-control" placeholder="Estimulos al personal">
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