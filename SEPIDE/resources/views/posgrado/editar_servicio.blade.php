@extends("templates.base")

@section('content')

<section id="content">
        <div class="content">
            <div class="row">
                <h1 class="text-center">Conferencias</h1>
            </div>
            <form class="form-horizontal" method="post">
            {{ csrf_field() }}

                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Servicio:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        @if($servicio->servicio == "Cursos")
                          <select name="servicio" class="form-control">
                                  <option value="">&nbsp;</option>
                                  <option value="Cursos" selected>Cursos</option>
                                  <option value="Laboratorio">Laboratorio</option>
                                  <option value="Consultoría">Consultoría</option>
                            </select>
                        @elseif($servicio->servicio == "Laboratorio")
                          <select name="servicio" class="form-control">
                                  <option value="">&nbsp;</option>
                                  <option value="Cursos">Cursos</option>
                                  <option value="Laboratorio" selected>Laboratorio</option>
                                  <option value="Consultoría">Consultoría</option>
                            </select>
                        @elseif($servicio->servicio == "Consultoría")
                          <select name="servicio" class="form-control">
                                  <option value="">&nbsp;</option>
                                  <option value="Cursos">Cursos</option>
                                  <option value="Laboratorio">Laboratorio</option>
                                  <option value="Consultoría" selected>Consultoría</option>
                            </select>
                        @else
                          <select name="servicio" class="form-control">
                                  <option value="">&nbsp;</option>
                                  <option value="Cursos">Cursos</option>
                                  <option value="Laboratorio">Laboratorio</option>
                                  <option value="Consultoría">Consultoría</option>
                            </select>
                        @endif
                        
                     </div>
                 </div>

                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Alcance:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        @if($servicio->alcance == "Externo")
                            <select name="alcance" class="form-control">
                                  <option value="">&nbsp;</option>
                                  <option value="Externo" selected>Externo</option>
                                  <option value="IPN">IPN</option>
                                  <option value="CMP+L">CMPL+L</option>
                            </select>
                        @elseif($servicio->alcance == "IPN")
                            <select name="alcance" class="form-control">
                                  <option value="">&nbsp;</option>
                                  <option value="Externo">Externo</option>
                                  <option value="IPN" selected>IPN</option>
                                  <option value="CMP+L">CMPL+L</option>
                            </select>
                        @elseif($servicio->alcance == "CMP+L")
                            <select name="alcance" class="form-control">
                                  <option value="">&nbsp;</option>
                                  <option value="Externo">Externo</option>
                                  <option value="IPN">IPN</option>
                                  <option value="CMP+L" selected>CMPL+L</option>
                            </select>
                        @else
                            <select name="alcance" class="form-control">
                                  <option value="">&nbsp;</option>
                                  <option value="Externo">Externo</option>
                                  <option value="IPN">IPN</option>
                                  <option value="CMP+L">CMPL+L</option>
                            </select>
                        @endif
                            
                     </div>
                 </div>

                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="fecha" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha inicio:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="fecha_inicio" class="fecha form-control datepicker disabled" placeholder="Fecha inicio" value="{{$servicio->fecha_inicio}}">
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="fecha" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha término:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="fecha_termino" class="fecha form-control datepicker disabled" placeholder="Fecha término" value="{{$servicio->fecha_termino}}">
                     </div>
                 </div>


                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="participacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Nombre del servicio:</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="nombre_servicio" class="form-control disabled" placeholder="Nombre del servicio" value="{{$servicio->nombre_servicio}}">
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="participacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Organización que recibe:</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="organizacion" class="form-control disabled" placeholder="Organización" value="{{$servicio->organizacion}}">
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Registro:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        @if($servicio->tipo_registro == "Oficio")
                            <select name="tipo_registro" class="form-control" id="elem_reg">
                                  <option value="" disabled>--Interno--</option>
                                  <option value="Oficio" selected>Oficio</option>
                                  <option value="Minuta de reunión">Minuta de reunión</option>
                                  <option value="otro">Otra</option>
                                  <option value="">--Comercial--</option>
                                  <option value="Orden de servicio">Orden de servicio</option>
                                  <option value="Convenio">Convenio</option>
                                  <option value="Contrato">Contrato</option>
                            </select>
                        @elseif($servicio->tipo_registro == "Minuta de reunión")
                            <select name="tipo_registro" class="form-control" id="elem_reg">
                                  <option value="" disabled>--Interno--</option>
                                  <option value="Oficio">Oficio</option>
                                  <option value="Minuta de reunión" selected>Minuta de reunión</option>
                                  <option value="otro">Otra</option>
                                  <option value="">--Comercial--</option>
                                  <option value="Orden de servicio">Orden de servicio</option>
                                  <option value="Convenio">Convenio</option>
                                  <option value="Contrato">Contrato</option>
                            </select>
                        @elseif($servicio->tipo_registro == "otro")
                            <select name="tipo_registro" class="form-control" id="elem_reg">
                                  <option value="" disabled>--Interno--</option>
                                  <option value="Oficio">Oficio</option>
                                  <option value="Minuta de reunión">Minuta de reunión</option>
                                  <option value="otro" selected>Otra</option>
                                  <option value="">--Comercial--</option>
                                  <option value="Orden de servicio">Orden de servicio</option>
                                  <option value="Convenio">Convenio</option>
                                  <option value="Contrato">Contrato</option>
                            </select>
                        @elseif($servicio->tipo_registro == "Orden de servicio")
                            <select name="tipo_registro" class="form-control" id="elem_reg">
                                  <option value="" disabled>--Interno--</option>
                                  <option value="Oficio">Oficio</option>
                                  <option value="Minuta de reunión">Minuta de reunión</option>
                                  <option value="otro">Otra</option>
                                  <option value="">--Comercial--</option>
                                  <option value="Orden de servicio" selected>Orden de servicio</option>
                                  <option value="Convenio">Convenio</option>
                                  <option value="Contrato">Contrato</option>
                            </select>
                        @elseif($servicio->tipo_registro == "Convenio")
                            <select name="tipo_registro" class="form-control" id="elem_reg">
                                  <option value="" disabled>--Interno--</option>
                                  <option value="Oficio">Oficio</option>
                                  <option value="Minuta de reunión">Minuta de reunión</option>
                                  <option value="otro">Otra</option>
                                  <option value="">--Comercial--</option>
                                  <option value="Orden de servicio">Orden de servicio</option>
                                  <option value="Convenio" selected>Convenio</option>
                                  <option value="Contrato">Contrato</option>
                            </select>
                        @elseif($servicio->tipo_registro == "Contrato")
                            <select name="tipo_registro" class="form-control" id="elem_reg">
                                  <option value="" disabled>--Interno--</option>
                                  <option value="Oficio">Oficio</option>
                                  <option value="Minuta de reunión">Minuta de reunión</option>
                                  <option value="otro">Otra</option>
                                  <option value="">--Comercial--</option>
                                  <option value="Orden de servicio">Orden de servicio</option>
                                  <option value="Convenio">Convenio</option>
                                  <option value="Contrato" selected>Contrato</option>
                            </select>
                        @else
                            <select name="tipo_registro" class="form-control" id="elem_reg">
                                  <option value="" disabled>--Interno--</option>
                                  <option value="Oficio">Oficio</option>
                                  <option value="Minuta de reunión">Minuta de reunión</option>
                                  <option value="otro">Otra</option>
                                  <option value="">--Comercial--</option>
                                  <option value="Orden de servicio">Orden de servicio</option>
                                  <option value="Convenio">Convenio</option>
                                  <option value="Contrato">Contrato</option>
                            </select>
                        @endif
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
                         <input type="text" name="registro" class="form-control disabled" placeholder="Registro" value="{{$servicio->registro}}">
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

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="estatus" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Asistentes:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="asistentes" data-role="tagsinput" value="{{$servicio->asistentes}}" />
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Costo del servicio:</label>
                    <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <span class="input-group-addon">$</span>
                    <input type="text" class="form-control" name="costo" aria-label="Amount (to the nearest dollar)" placeholder="Monto" value="{{$servicio->costo}}"> 
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