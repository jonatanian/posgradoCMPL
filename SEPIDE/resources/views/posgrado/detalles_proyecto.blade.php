@extends("templates.base")

@section('content')

<section id="content">
        <div class="content">
            <div class="row">
                <h1 class="text-center">Proyectos de I+D+i</h1>
            </div>
            <form class="form-horizontal" action="{{url('/proyectos/agregar')}}" method="post">
                {{ csrf_field() }}
                <div class="row">
                     <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Nombre:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">{{$proyecto->nombre_proyecto}}</div>
                     </div>
                     <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="inputEmail" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Financiamiento:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">{{$proyecto->financiamiento->nombre_financiamiento}}</div>
                     </div>

                    @if($proyecto->financiamiento_id == 0)
                        <div class="" id="div_otro">
                    @else
                        <div class="hidden" id="div_otro">
                    @endif
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                             <label for="otro" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Otro:</label>
                             <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">{{$proyecto->otro}}</div>
                         </div>
                    </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="programa" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Programa:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">{{$proyecto->programa}}</div>
                     </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="estatus" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Estatus:</label>
                            @if($proyecto->estatus == 'ap')
                                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">Aprobado</div>
                            @elseif($proyecto->estatus == 'pr')
                                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">Presentado</div>
                            @else
                                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">No aprobado</div>
                            @endif
                     </div>
                    @if($proyecto->estatus == "pr")
                    <div id="div_estatus_presentado" class="">
                    @else
                    <div id="div_estatus_presentado" class="hidden">
                    @endif
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                             <label for="fechaPresentacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de presentación:</label>
                             <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">{{$proyecto->fecha_presentacion}}</div>
                         </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                             <label for="fechaVencimiento" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de vencimiento:</label>
                             <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">{{$proyecto->fecha_vencimiento}}</div>
                         </div>
                    </div>
                    @if($proyecto->estatus == "ap")
                    <div id="div_estatus_aprobado" class="">
                    @else
                    <div id="div_estatus_aprobado" class="hidden">
                    @endif
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                             <label for="fechaInicio" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de inicio:</label>
                             <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">{{$proyecto->fecha_vigencia_inicio}}</div>
                         </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                             <label for="fechaTermino" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de término:</label>
                             <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">{{$proyecto->fecha_vigencia_fin}}</div>
                         </div>
                    </div>
                    @if($proyecto->estatus == "ap" || $proyecto->estatus == "na")
                    <div id="div_notificacion" class="">
                    @else
                    <div id="div_notificacion" class="hidden">
                    @endif
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                             <label for="fechaNotificacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de notificación:</label>
                             <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">{{$proyecto->fecha_notificacion}}</div>
                         </div>
                    </div>
                </div>
                    @if($proyecto->estatus == "ap")
                    <hr>
                    <div class="row">
                    <div id="div_monto" class="">
                    @else
                    <div id="div_monto" class="hidden">
                    @endif
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                             <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Monto financiado:</label>
                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">$ {{$proyecto->monto_total}}</div>
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Partida 2000:</label>
                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">$ {{$proyecto->monto_p2}}</div>
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Partida 3000:</label>
                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">$ {{$proyecto->monto_p3}}</div>
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Partida 5000:</label>
                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">$ {{$proyecto->monto_p5}}</div>
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Estimulos al personal:</label>
                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">$ {{$proyecto->estimulos}}</div>
                         </div>
                    </div>
                </div>
                <hr>
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
                
            </form>
            
        </div>

    </section>

@endsection