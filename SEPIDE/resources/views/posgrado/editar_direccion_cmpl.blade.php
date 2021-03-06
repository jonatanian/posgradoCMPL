@extends("templates.base")

@section('content')

<section id="content">
        <div class="content">
            <div class="row">
                <h1 class="text-center">Dirección CMP+L</h1>
            </div>
            <form class="form-horizontal" method="post">
            {{ csrf_field() }}

                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Programa:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        @if($direccion->programa == "Maestría en Ingeniería en P + L")
                            <select name="programa" class="form-control">
                                  <option value="">&nbsp;</option>
                                  <option value="Maestría en Ingeniería en P + L" selected>Maestría en Ingeniería en P + L</option>
                                  <option value="Doctorado en Energía">Doctorado en Energía</option>
                                  <option value="Maestría en Energía">Maestría en Energía</option>
                            </select>
                        @elseif($direccion->programa == "Doctorado en Energía")
                            <select name="programa" class="form-control">
                                  <option value="">&nbsp;</option>
                                  <option value="Maestría en Ingeniería en P + L">Maestría en Ingeniería en P + L</option>
                                  <option value="Doctorado en Energía" selected>Doctorado en Energía</option>
                                  <option value="Maestría en Energía">Maestría en Energía</option>
                            </select>
                        @elseif($direccion->programa == "Maestría en Energía")
                            <select name="programa" class="form-control">
                                  <option value="">&nbsp;</option>
                                  <option value="Maestría en Ingeniería en P + L">Maestría en Ingeniería en P + L</option>
                                  <option value="Doctorado en Energía">Doctorado en Energía</option>
                                  <option value="Maestría en Energía" selected>Maestría en Energía</option>
                            </select>
                        @else
                            <select name="programa" class="form-control">
                                  <option value="">&nbsp;</option>
                                  <option value="Maestría en Ingeniería en P + L">Maestría en Ingeniería en P + L</option>
                                  <option value="Doctorado en Energía">Doctorado en Energía</option>
                                  <option value="Maestría en Energía">Maestría en Energía</option>
                            </select>
                        @endif
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

                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">LGAC:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        @if($direccion->lgac == "Prevención y control de la contaminación")
                            <select name="lgac" class="form-control">
                                  <option value="">&nbsp;</option>
                                  <option value="Prevención y control de la contaminación" selected>Prevención y control de la contaminación</option>
                                  <option value="Energía">Energía</option>
                            </select>
                        @elseif($direccion->lgac == "Energía")
                            <select name="lgac" class="form-control">
                                  <option value="">&nbsp;</option>
                                  <option value="Prevención y control de la contaminación">Prevención y control de la contaminación</option>
                                  <option value="Energía" selected>Energía</option>
                            </select>
                        @else
                            <select name="lgac" class="form-control">
                                  <option value="">&nbsp;</option>
                                  <option value="Prevención y control de la contaminación">Prevención y control de la contaminación</option>
                                  <option value="Energía">Energía</option>
                            </select>
                        @endif
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Estátus:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        @if($direccion->estatus == "En desarrollo")
                            <select name="estatus" class="form-control" id="elem_reg">
                                  <option value="">&nbsp;</option>
                                  <option value="En desarrollo" selected>En desarrollo</option>
                                  <option value="Terminada">Terminada</option>
                            </select>
                        @elseif($direccion->estatus == "Terminada")
                            <select name="estatus" class="form-control" id="elem_reg">
                                  <option value="">&nbsp;</option>
                                  <option value="En desarrollo">En desarrollo</option>
                                  <option value="Terminada" selected>Terminada</option>
                            </select>
                        @else
                            <select name="estatus" class="form-control" id="elem_reg">
                                  <option value="">&nbsp;</option>
                                  <option value="En desarrollo">En desarrollo</option>
                                  <option value="Terminada">Terminada</option>
                            </select>
                        @endif
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