@extends("templates.base")

@section('content')

<section id="content">
        <div class="content">
            <div class="row">
                <h1 class="text-center">Transferencia de Tecnología e Innovación</h1>
            </div>
            <form class="form-horizontal" method="post">
            {{ csrf_field() }}
            <div class="row">
                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Nombre del contrato/convenio:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         {{$transferencia->nombre_transferencia}}
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="tipo" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Tipo:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         {{$transferencia->tipo}}
                     </div>
                 </div>

                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="licencia" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Licencia de explotación:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         {{$transferencia->licencia}}
                     </div>
                 </div>
            
                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="estatus" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Estatus:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            @if($transferencia->estatus == "ac")
                                  <p>Aceptado</p>
                            @elseif($transferencia->estatus == "fn")
                                  <p>Finalizado</p>
                            @else
                                  <p>&nbsp;</p>
                            @endif
                     </div>
                 </div>
            </div>
            <hr>
            <div class="row">
                @if($transferencia->estatus == "ac")
                <div class="" id="div_fecha_transferencia_inicio">
                @else
                <div class="hidden" id="div_fecha_transferencia_inicio">
                @endif
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="fechaInicio" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de inicio:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             {{$transferencia->fecha_inicio}}
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
                             {{$transferencia->fecha_termino}}
                         </div>
                     </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="receptor" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Receptor de la transferencia:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        {{$transferencia->receptor}}
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Monto de la transferencia:</label>
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        $ {{$transferencia->monto}}
                     </div>
                </div>
            </div>
            </form>
            
        </div>

    </section>

@endsection