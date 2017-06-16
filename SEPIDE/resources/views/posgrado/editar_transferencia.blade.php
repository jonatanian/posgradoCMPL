@extends("templates.base")

@section('content')

<section id="content">
        <div class="content">
            <div class="row">
                <h1 class="text-center">Transferencia de Tecnología e Innovación</h1>
            </div>
            <form class="form-horizontal" method="post">
            {{ csrf_field() }}
                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Nombre del contrato/convenio:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="nombre_transferencia" class="form-control" placeholder="Nombre" value="{{$transferencia->nombre_transferencia}}">
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="tipo" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Tipo:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <select name="tipo" class="form-control">
                            @if($transferencia->tipo == "Transferencia del conocimiento")
                                  <option value="">&nbsp;</option>
                                  <option value="Transferencia del conocimiento" selected>Transferencia de conocimiento</option>
                                  <option value="Innovación tecnológica">Innovación tecnológica</option>
                            @elseif($transferencia->tipo == "Innovación tecnológica")
                                  <option value="">&nbsp;</option>
                                  <option value="Transferencia del conocimiento">Transferencia de conocimiento</option>
                                  <option value="Innovación tecnológica" selected>Innovación tecnológica</option>
                            @else
                                  <option value="">&nbsp;</option>
                                  <option value="Transferencia del conocimiento">Transferencia de conocimiento</option>
                                  <option value="Innovación tecnológica">Innovación tecnológica</option>
                            @endif
                                
                            </select>
                     </div>
                 </div>

                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="licencia" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Licencia de explotación:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <select name="licencia" class="form-control">
                            @if($transferencia->licencia == "Transmisión parcial")
                                  <option value="">&nbsp;</option>
                                  <option value="Transmisión parcial" selected>Transmisión parcial</option>
                                  <option value="Transmisión total de derechos">Transmisión total de derechos</option>
                            @elseif($transferencia->licencia == "Transmisión total de derechos")
                                  <option value="">&nbsp;</option>
                                  <option value="Transmisión parcial">Transmisión parcial</option>
                                  <option value="Transmisión total de derechos" selected>Transmisión total de derechos</option>
                            @else
                                  <option value="">&nbsp;</option>
                                  <option value="Transmisión parcial">Transmisión parcial</option>
                                  <option value="Transmisión total de derechos">Transmisión total de derechos</option>
                            @endif
                                
                            </select>
                     </div>
                 </div>

                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="estatus" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Estatus:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <select name="estatus" class="form-control" id="elem_estatus_transferencia">
                            @if($transferencia->estatus == "ac")
                                  <option value="">&nbsp;</option>
                                  <option value="ac" selected>Aceptado</option>
                                  <option value="fn">Finalizado</option>
                            @elseif($transferencia->estatus == "fn")
                                  <option value="">&nbsp;</option>
                                  <option value="ac">Aceptado</option>
                                  <option value="fn" selected>Finalizado</option>
                            @else
                                  <option value="">&nbsp;</option>
                                  <option value="ac">Aceptado</option>
                                  <option value="fn">Finalizado</option>
                            @endif
                                
                            </select>
                     </div>
                 </div>
                @if($transferencia->estatus == "ac")
                <div class="" id="div_fecha_transferencia_inicio">
                @else
                <div class="hidden" id="div_fecha_transferencia_inicio">
                @endif
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="fechaInicio" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de inicio:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="text" name="fecha_inicio" class="fecha form-control datepicker disabled" placeholder="Fecha de inicio:" value="{{$transferencia->fecha_inicio}}">
                         </div>
                     </div>
                 </div>
                 @if($transferencia->estatus == "ac" || $transferencia->estatus == "fn")
                 <div class="" id="div_fecha_transferencia_termino">
                 @else
                 <div class="hidden" id="div_fecha_transferencia_termino">
                 @endif
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="fechaTermino" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de término:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="text" name="fecha_termino" class="fecha form-control datepicker disabled" placeholder="Fecha de término" value="{{$transferencia->fecha_termino}}">
                         </div>
                     </div>
                </div>
                 
                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="receptor" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Receptor de la transferencia:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="receptor" class="form-control" placeholder="Receptor de la transferencia" value="{{$transferencia->receptor}}">
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Monto de la transferencia:</label>
                    <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <span class="input-group-addon">$</span>
                    <input type="text" class="form-control" name="monto" id="monto" aria-label="Amount (to the nearest dollar)" placeholder="Monto" value="{{$transferencia->monto.'0'}}"> 
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
            $('#monto').maskMoney();

        });
    </script>
@endsection