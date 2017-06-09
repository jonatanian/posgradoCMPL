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
                            @if($direccion->tipo == "CMP+L")
                                <option value="">&nbsp;</option>
                                  <option value="CMP+L" selected>CMP+L</option>
                                  <option value="Institucional">Institucional</option>
                            @elseif($direccion->tipo == "Institucional")
                                <option value="">&nbsp;</option>
                                  <option value="CMP+L">CMP+L</option>
                                  <option value="Institucional" selected>Institucional</option>
                            @else
                                <option value="">&nbsp;</option>
                                  <option value="CMP+L">CMP+L</option>
                                  <option value="Institucional">Institucional</option>
                            @endif
                            </select>
                     </div>
                 </div>
                @if($direccion->tipo == "Institucional")
                <div class="" id="div_dir">
                @else
                <div class="hidden" id="div_dir">
                @endif
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="participacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Unidad Politécnica:</label>
                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="text" name="unidad" class="form-control disabled" placeholder="Unidad..." value="{{$direccion->unidad}}">
                         </div>
                     </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Nivel:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <select name="nivel" class="form-control">
                                @if($direccion->nivel == "Superior")
                                      <option value="">&nbsp;</option>
                                      <option value="Superior" selected>Superior</option>
                                      <option value="Posgrado">Posgrado</option>
                                @elseif($direccion->nivel == "Posgrado")
                                      <option value="">&nbsp;</option>
                                      <option value="Superior">Superior</option>
                                      <option value="Posgrado" selected>Posgrado</option>
                                @else
                                      <option value="">&nbsp;</option>
                                      <option value="Superior">Superior</option>
                                      <option value="Posgrado">Posgrado</option>
                                @endif
                                    
                                </select>
                         </div>
                     </div>
                </div>

                @if($direccion->tipo == "Institucional")
                <div class="" id="div_pro_ins">
                @else
                <div class="hidden" id="div_pro_ins">
                @endif
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Programa:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="text" name="programa_ins" class="form-control disabled" placeholder="Programa" value="{{$direccion->programa}}">
                         </div>
                     </div>
                </div>

                @if($direccion->tipo == "CMP+L")
                <div class="" id="div_pro_cmpl">
                @else
                <div class="hidden" id="div_pro_cmpl">
                @endif
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Programa:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            <select name="programa_cmpl" class="form-control">
                            @if($direccion->programa == "Maestría en Ingeniería en P + L")
                                <option value="">&nbsp;</option>
                                <option value="Maestría en Ingeniería en P + L" selected>Maestría en Ingeniería en P + L</option>
                                <option value="Doctorado en Energía">Doctorado en Energía</option>
                                <option value="Maestría en Energía">Maestría en Energía</option>
                            @elseif($direccion->programa == "Doctorado en Energía")
                                <option value="">&nbsp;</option>
                                <option value="Maestría en Ingeniería en P + L">Maestría en Ingeniería en P + L</option>
                                <option value="Doctorado en Energía" selected>Doctorado en Energía</option>
                                <option value="Maestría en Energía">Maestría en Energía</option>
                            @elseif($direccion->programa == "Maestría en Energía")
                                <option value="">&nbsp;</option>
                                <option value="Maestría en Ingeniería en P + L">Maestría en Ingeniería en P + L</option>
                                <option value="Doctorado en Energía">Doctorado en Energía</option>
                                <option value="Maestría en Energía" selected>Maestría en Energía</option>
                            @else
                                <option value="">&nbsp;</option>
                                <option value="Maestría en Ingeniería en P + L">Maestría en Ingeniería en P + L</option>
                                <option value="Doctorado en Energía">Doctorado en Energía</option>
                                <option value="Maestría en Energía">Maestría en Energía</option>
                            @endif
                            </select>
                         </div>
                     </div>
                </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="participacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Nombre del alumno:</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="alumno" class="form-control disabled" placeholder="Nombre del alumno" value="{{$direccion->alumno}}">
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="participacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Título:</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="titulo" class="form-control disabled" placeholder="Título" value="{{$direccion->titulo}}">
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="estatus" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Director(es):</label>
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

                @if($direccion->tipo == "Institucional")
                <div class="" id="div_lgac_ins">
                @else
                <div class="hidden" id="div_lgac_ins">
                @endif
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">LGAC:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            <input type="text" name="lgac_ins" class="form-control disabled" placeholder="Línea general de aplicación de conocimiento" value="{{$direccion->lgac}}">
                         </div>
                     </div>
                </div>

                @if($direccion->tipo == "CMP+L")
                <div class="" id="div_lgac_cmpl">
                @else
                <div class="hidden" id="div_lgac_cmpl">
                @endif
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">LGAC:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <select name="lgac_cmpl" class="form-control">
                                @if($direccion->lgac == "Prevención y control de la contaminación")
                                      <option value="">&nbsp;</option>
                                      <option value="Prevención y control de la contaminación" selected>Prevención y control de la contaminación</option>
                                      <option value="Energía">Energía</option>
                                @elseif($direccion->lgac == "Energía")
                                      <option value="">&nbsp;</option>
                                      <option value="Prevención y control de la contaminación">Prevención y control de la contaminación</option>
                                      <option value="Energía" selected>Energía</option>
                                @else
                                      <option value="">&nbsp;</option>
                                      <option value="Prevención y control de la contaminación">Prevención y control de la contaminación</option>
                                      <option value="Energía">Energía</option>
                                @endif
                                </select>
                         </div>
                     </div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Estátus:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <select name="estatus" class="form-control" id="elem_reg">
                            @if($direccion->estatus == "En desarrollo")
                                  <option value="">&nbsp;</option>
                                  <option value="En desarrollo" selected>En desarrollo</option>
                                  <option value="Terminada">Terminada</option>
                            @elseif($direccion->estatus == "Terminada")
                                  <option value="">&nbsp;</option>
                                  <option value="En desarrollo">En desarrollo</option>
                                  <option value="Terminada" selected>Terminada</option>
                            @else
                                  <option value="">&nbsp;</option>
                                  <option value="En desarrollo">En desarrollo</option>
                                  <option value="Terminada">Terminada</option>
                            @endif
                            </select>
                     </div>
                 </div>

                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="fecha" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha límite:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="fecha_limite" class="fecha form-control datepicker disabled" placeholder="Fecha límite" value="{{$direccion->fecha_limite}}">
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