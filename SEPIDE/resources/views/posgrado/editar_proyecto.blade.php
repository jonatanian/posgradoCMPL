@extends("templates.base")

@section('content')

<section id="content">
        <div class="content">
            <div class="row">
                <h1 class="text-center">Proyectos de I+D+i</h1>
            </div>
            <form class="form-horizontal" method="post">
                {{ csrf_field() }}
                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Nombre:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="nombre_proyecto" class="form-control" placeholder="Nombre" value="{{$proyecto->nombre_proyecto}}">
                     </div>
                 </div>
                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="inputEmail" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Financiamiento:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        
                         <select name="financiamiento_id" class="form-control" id="elem_financ">
                              <option value="" disabled>-- Externo --</option>
                              @foreach($financiamiento as $fin)
                                @if($fin->tipo == 'ext')
                                    @if($fin->id == $proyecto->financiamiento_id)
                                        <option value="{{$fin->id}}" selected>{{$fin->nombre_financiamiento}}</option>
                                    @else
                                        <option value="{{$fin->id}}">{{$fin->nombre_financiamiento}}</option>
                                    @endif
                                @endif
                              @endforeach
                            <option value="" disabled>-- Interno --</option>
                                @foreach($financiamiento as $fin)
                                  @if($fin->tipo == 'int')
                                    @if($fin->id == $proyecto->financiamiento_id)
                                        <option value="{{$fin->id}}" selected>{{$fin->nombre_financiamiento}}</option>
                                    @else
                                        <option value="{{$fin->id}}">{{$fin->nombre_financiamiento}}</option>
                                    @endif
                                  @endif
                                @endforeach
                            @if($proyecto->financiamiento_id == 0)
                            <option value="0" selected>Otro</option>
                            @else
                            <option value="0">Otro</option>
                            @endif
                        </select>
                     </div>
                 </div>

                @if($proyecto->financiamiento_id == 0)
                    <div class="" id="div_otro">
                @else
                    <div class="hidden" id="div_otro">
                @endif
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="otro" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Otro:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="text" name="otro" class="form-control" placeholder="Otro" value="{{$proyecto->otro}}">
                         </div>
                     </div>
                 </div>

                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="programa" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Programa:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="programa" class="form-control" placeholder="Programa" value="{{$proyecto->programa}}">
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="estatus" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Estatus:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <select id="elem_estatus" name="estatus" class="form-control">
                              <option value="">&nbsp;</option>
                              @if($proyecto->estatus == "pr")
                                  <option value="pr" selected>Presentado</option>
                                  <option value="ap">Aprobado</option>
                                  <option value="na">No aprobado</option>
                              @elseif($proyecto->estatus == "ap")
                                  <option value="pr">Presentado</option>
                                  <option value="ap" selected>Aprobado</option>
                                  <option value="na">No aprobado</option>
                              @elseif($proyecto->estatus == "na")
                                  <option value="pr">Presentado</option>
                                  <option value="ap">Aprobado</option>
                                  <option value="na" selected>No aprobado</option> 
                              @else
                                  <option value="pr">Presentado</option>
                                  <option value="ap">Aprobado</option>
                                  <option value="na">No aprobado</option>
                              @endif

                        </select>
                     </div>
                 </div>
                 @if($proyecto->estatus == "pr")
                    <div id="div_estatus_presentado" class="">
                 @else
                    <div id="div_estatus_presentado" class="hidden">
                 @endif
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="fechaPresentacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de presentación:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="text" name="fecha_presentacion" class="form-control datepicker" placeholder="Fecha de presentacion" value="{{$proyecto->fecha_presentacion}}">
                         </div>
                     </div>
                     <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="fechaVencimiento" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de vencimiento:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="text" name="fecha_vencimiento" class="form-control datepicker" placeholder="Fecha de vencimiento" value"{{$proyecto->fecha_vencimiento}}">
                         </div>
                     </div>
                </div>
                @if($proyecto->estatus == "ap")
                    <div id="div_estatus_aprobado" class="">
                @else
                    <div id="div_estatus_aprobado" class="hidden">
                @endif
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="fechaInicio" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de inicio:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="text" name="fecha_vigencia_inicio" class="form-control datepicker" placeholder="Fecha de inicio" value="{{$proyecto->fecha_vigencia_inicio}}">
                         </div>
                     </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="fechaTermino" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de término:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="text" name="fecha_vigencia_fin" class="form-control datepicker" placeholder="Fecha de Término" value="{{$proyecto->fecha_vigencia_fin}}">
                         </div>
                     </div>
                </div>
                @if($proyecto->estatus == "ap" || $proyecto->estatus == "na")
                    <div id="div_notificacion" class="">
                @else
                    <div id="div_notificacion" class="hidden">
                @endif
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="fechaNotificacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de notificación:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="text" name="fecha_notificacion" class="form-control datepicker" placeholder="Fecha de notificación" value="{{$proyecto->fecha_notificacion}}">
                         </div>
                     </div>
                </div>
                @if($proyecto->estatus == "ap")
                    <div id="div_monto" class="">
                @else
                    <div id="div_monto" class="hidden">
                @endif
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Monto financiado:</label>
                         <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <span class="input-group-addon">$</span>
                            <input type="text" class="form-control" name="monto_total" id="total" aria-label="Amount (to the nearest dollar)" placeholder="Monto financiado" value="{{$proyecto->monto_total.'0'}}"> 
                         </div>

                         <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Partida 2000:</label>
                         <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <span class="input-group-addon">$</span>
                            <input type="text" class="form-control" name="monto_p2" id="p2" aria-label="Amount (to the nearest dollar)" placeholder="Partida 2000" value="{{$proyecto->monto_p2.'0'}}"> 
                         </div>

                         <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Partida 3000:</label>
                         <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <span class="input-group-addon">$</span>
                            <input type="text" class="form-control" name="monto_p3" id="p3" aria-label="Amount (to the nearest dollar)" placeholder="Partida 3000" value="{{$proyecto->monto_p3.'0'}}"> 
                         </div>

                         <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Partida 5000:</label>
                         <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <span class="input-group-addon">$</span>
                            <input type="text" class="form-control" name="monto_p5" id="p5" aria-label="Amount (to the nearest dollar)" placeholder="Partida 5000" value="{{$proyecto->monto_p5.'0'}}"> 
                         </div>

                         <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Estimulos al personal:</label>
                         <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <span class="input-group-addon">$</span>
                            <input type="text" class="form-control" name="estimulos" id="est" aria-label="Amount (to the nearest dollar)" placeholder="Estimulos al personal" value="{{$proyecto->estimulos.'0'}}"> 
                         </div>
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

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="estatus" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Estudiantes:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="estudiantes" data-role="tagsinput" value="{{$est_ind}}"/>
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
@section('scripts')
    <script>
        $(function() {
            $('#total').maskMoney();
            $('#p2').maskMoney();
            $('#p3').maskMoney();
            $('#p5').maskMoney();
            $('#est').maskMoney();
        });

        $( "#btn-sub" ).click(function() {
            total = $('#total').val().replace(',','');
            total = total.replace(',','');
            total = parseFloat(total.replace(',',''));

            p2 = $('#p2').val().replace(',','');
            p2 = p2.replace(',','');
            p2 = parseFloat(p2.replace(',',''));

            p3 = $('#p3').val().replace(',','');
            p3 = p3.replace(',','');
            p3 = parseFloat(p3.replace(',',''));

            p5 = $('#p5').val().replace(',','');
            p5 = p5.replace(',','');
            p5 = parseFloat(p5.replace(',',''));

            est = $('#est').val().replace(',','');
            est = est.replace(',','');
            est = parseFloat(est.replace(',',''));

            sub = p2 + p3 + p5 + est;
            if(total != sub){
                $("#total").css('background-color', '#EA5858');
                alert('Los montos introducidos no coinciden con el Monto Financiado.');
                event.preventDefault();
            }
        });

    </script>
@endsection