@extends("templates.base")

@section('content')

<section id="content">
        <div class="content">
            <div class="row">
                <h1 class="text-center">Congresos</h1>
            </div>
            <form class="form-horizontal" method="post">
            {{ csrf_field() }}
                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Nombre:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="nombre_congreso" class="form-control" placeholder="Nombre" value="{{$congreso->nombre_congreso}}">
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Alcance:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <select name="alcance" class="form-control">
                            @if($congreso->ancance == "Nacional")
                                  <option value="">&nbsp;</option>
                                  <option value="Nacional" selected>Nacional</option>
                                  <option value="Internacional">Internacional</option>
                            @elseif($congreso->alcance == "Internacional")
                                  <option value="">&nbsp;</option>
                                  <option value="Nacional">Nacional</option>
                                  <option value="Internacional" selected>Internacional</option>
                            @else
                                  <option value="">&nbsp;</option>
                                  <option value="Nacional">Nacional</option>
                                  <option value="Internacional">Internacional</option>
                            @endif
                                  
                         </select>
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="participacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Participación:</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            <select name="participacion" class="form-control">
                            @if($congreso->participacion == "Presentación oral")
                              <option value="">&nbsp;</option>
                              <option value="Presentación oral" selected>Presentación oral</option>
                              <option value="Póster">Póster</option>
                              <option value="Asistente">Asistente</option>
                              <option value="Comité organizador">Comité organizador</option>
                              <option value="Comité editorial">Comité editorial</option>
                            @elseif($congreso->participacion == "Póster")
                              <option value="">&nbsp;</option>
                              <option value="Presentación oral">Presentación oral</option>
                              <option value="Póster" selected>Póster</option>
                              <option value="Asistente">Asistente</option>
                              <option value="Comité organizador">Comité organizador</option>
                              <option value="Comité editorial">Comité editorial</option>
                            @elseif($congreso->participacion == "Asistente")
                              <option value="">&nbsp;</option>
                              <option value="Presentación oral">Presentación oral</option>
                              <option value="Póster">Póster</option>
                              <option value="Asistente" selected>Asistente</option>
                              <option value="Comité organizador">Comité organizador</option>
                              <option value="Comité editorial">Comité editorial</option>
                            @elseif($congreso->participacion == "Comité organizador")
                              <option value="">&nbsp;</option>
                              <option value="Presentación oral">Presentación oral</option>
                              <option value="Póster">Póster</option>
                              <option value="Asistente">Asistente</option>
                              <option value="Comité organizador" selected>Comité organizador</option>
                              <option value="Comité editorial">Comité editorial</option>
                            @elseif($congreso->participacion == "Comité editorial")
                              <option value="">&nbsp;</option>
                              <option value="Presentación oral">Presentación oral</option>
                              <option value="Póster">Póster</option>
                              <option value="Asistente">Asistente</option>
                              <option value="Comité organizador">Comité organizador</option>
                              <option value="Comité editorial" selected>Comité editorial</option>
                            @else
                              <option value="">&nbsp;</option>
                              <option value="Presentación oral">Presentación oral</option>
                              <option value="Póster">Póster</option>
                              <option value="Asistente">Asistente</option>
                              <option value="Comité organizador">Comité organizador</option>
                              <option value="Comité editorial">Comité editorial</option>
                            @endif
                              
                            </select>
                        </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="fecha" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de inicio:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="fecha_inicio" class="fecha form-control datepicker disabled" placeholder="Fecha de inicio" value="{{$congreso->fecha_inicio}}">
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="fecha" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de término:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="fecha_termino" class="fecha form-control datepicker disabled" placeholder="Fecha de término" value="{{$congreso->fecha_termino}}">
                     </div>
                 </div>
                 
                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="registros" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Registros:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        <select name="tipo_registro" class="form-control" id="elem_reg">
                        @if($congreso->tipo_registro == "ISSN")
                            <option value="">&nbsp;</option>
                              <option value="ISSN" selected>ISSN</option>
                              <option value="ISBN">ISBN</option>
                              <option value="otro">Otro...</option>
                        @elseif($congreso->tipo_registro == "ISBN")
                           <option value="">&nbsp;</option>
                              <option value="ISSN">ISSN</option>
                              <option value="ISBN" selected>ISBN</option>
                              <option value="otro">Otro...</option>
                        @elseif($congreso->tipo_registro == "otro")
                            <option value="">&nbsp;</option>
                              <option value="ISSN">ISSN</option>
                              <option value="ISBN">ISBN</option>
                              <option value="otro" selected>Otro...</option>
                        @else
                            <option value="">&nbsp;</option>
                              <option value="ISSN">ISSN</option>
                              <option value="ISBN">ISBN</option>
                              <option value="otro">Otro...</option>
                        @endif
                        </select>
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
                             <input type="text" name="otro" class="form-control" placeholder="Otro" value="{{$congreso->otro}}">
                         </div>
                     </div>
                 </div>

                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Número de registro:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="registro" class="form-control" placeholder="Registro" value="{{$congreso->registro}}">
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
                                {! $bandera = 0 !}
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