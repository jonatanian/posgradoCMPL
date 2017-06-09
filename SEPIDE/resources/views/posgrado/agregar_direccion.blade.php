@extends("templates.base")

@section('content')

<section id="content">
        <div class="content">
            <div class="row">
                <h1 class="text-center">Dirección de tesis</h1>
            </div>
            <form class="form-horizontal" method="post">
            {{ csrf_field() }}

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Tipo:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <select name="tipo" class="form-control" id="elem_direccion">
                                  <option value="">&nbsp;</option>
                                  <option value="CMP+L">CMP+L</option>
                                  <option value="Institucional">Institucional</option>
                            </select>
                     </div>
                 </div>

                <div class="hidden" id="div_dir">
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="participacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Unidad Politécnica:</label>
                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="text" name="unidad" class="form-control disabled" placeholder="Unidad...">
                         </div>
                     </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Nivel:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <select name="nivel" class="form-control">
                                    <option value="">&nbsp;</option>
                                      <option value="Superior">Superior</option>
                                      <option value="Posgrado">Posgrado</option>
                                </select>
                         </div>
                     </div>
                </div>

                <div class="hidden" id="div_pro_ins">
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Programa:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="text" name="programa_ins" class="form-control disabled" placeholder="Programa">
                         </div>
                     </div>
                </div>

                <div class="hidden" id="div_pro_cmpl">
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Programa:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <select name="programa_cmpl" class="form-control">
                                    <option value="">&nbsp;</option>
                                      <option value="Maestría en Ingeniería en P + L">Maestría en Ingeniería en P + L</option>
                                      <option value="Doctorado en Energía">Doctorado en Energía</option>
                                    <option value="Maestría en Energía">Maestría en Energía</option>
                                </select>
                         </div>
                     </div>
                </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="participacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Nombre del alumno:</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="alumno" class="form-control disabled" placeholder="Nombre del alumno">
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="participacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Título:</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="titulo" class="form-control disabled" placeholder="Título">
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="estatus" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Director(es):</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <select id="elem_estatus" name="investigadores[]" class="form-control" multiple>
                              @foreach($investigadores as $inv)
                                <option value="{{$inv['id']}}">{{$inv['nombre']}} {{$inv['ap_paterno']}} {{$inv['ap_materno']}}</option>
                              @endforeach
                        </select>
                     </div>
                 </div>

                <div class="hidden" id="div_lgac_ins">
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">LGAC:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            <input type="text" name="lgac_ins" class="form-control disabled" placeholder="Línea general de aplicación de conocimiento">
                         </div>
                     </div>
                </div>

                <div class="hidden" id="div_lgac_cmpl">
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">LGAC:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <select name="lgac_cmpl" class="form-control">
                                    <option value="">&nbsp;</option>
                                      <option value="Prevención y control de la contaminación">Prevención y control de la contaminación</option>
                                      <option value="Energía">Energía</option>
                                </select>
                         </div>
                     </div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Estátus:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <select name="estatus" class="form-control" id="elem_reg">
                                  <option value="">&nbsp;</option>
                                  <option value="En desarrollo">En desarrollo</option>
                                  <option value="Terminada">Terminada</option>
                            </select>
                     </div>
                 </div>

                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="fecha" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha límite:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="fecha_limite" class="fecha form-control datepicker disabled" placeholder="Fecha límite">
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