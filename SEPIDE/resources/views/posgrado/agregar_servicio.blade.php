@extends("templates.base")

@section('content')

<section id="content">
        <div class="content">
            <div class="row">
                <h1 class="text-center">Servicios</h1>
            </div>
            <form class="form-horizontal" method="post">
            {{ csrf_field() }}

                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Servicio:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <select name="servicio" class="form-control">
                                  <option value="">&nbsp;</option>
                                  <option value="Cursos">Cursos</option>
                                  <option value="Laboratorio">Laboratorio</option>
                                  <option value="Consultoría">Consultoría</option>
                            </select>
                     </div>
                 </div>

                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Alcance:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <select name="alcance" class="form-control">
                                  <option value="">&nbsp;</option>
                                  <option value="Externo">Externo</option>
                                  <option value="IPN">IPN</option>
                                  <option value="CMP+L">CMPL+L</option>
                            </select>
                     </div>
                 </div>

                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="fecha" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha inicio:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="fecha_inicio" class="fecha form-control datepicker disabled" placeholder="Fecha inicio">
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="fecha" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha término:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="fecha_termino" class="fecha form-control datepicker disabled" placeholder="Fecha término">
                     </div>
                 </div>


                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="participacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Nombre del servicio:</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="nombre_servicio" class="form-control disabled" placeholder="Nombre del servicio">
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="participacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Organización que recibe:</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="organizacion" class="form-control disabled" placeholder="Organización">
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Registro:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
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
                     </div>
                 </div>

                <div class="hidden" id="div_otro">
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="participacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Otra:</label>
                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="text" name="otro_registro" class="form-control disabled" placeholder="Otra...">
                         </div>
                     </div>
                </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="participacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Num. registro:</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="registro" class="form-control disabled" placeholder="Registro">
                     </div>
                 </div>

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

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="estatus" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Estudiantes:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="estudiantes" data-role="tagsinput" />
                     </div>
                 </div>
                <!--
                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="estatus" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Asistentes:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="asistentes" data-role="tagsinput" />
                     </div>
                 </div>
                -->
                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Costo del servicio:</label>
                    <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <span class="input-group-addon">$</span>
                    <input type="text" class="form-control" name="costo" id ="monto" aria-label="Amount (to the nearest dollar)" placeholder="Monto"> 
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