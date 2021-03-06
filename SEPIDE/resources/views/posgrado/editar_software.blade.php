@extends("templates.base")

@section('content')

<section id="content">
        <div class="content">
            <div class="row">
                <h1 class="text-center">Software</h1>
            </div>
            <form class="form-horizontal" method="post">
            {{ csrf_field() }}

                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="fecha" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Descripción:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="textarea" name="descripcion" class="form-control disabled" placeholder="Descripción" value="{{$software->descripcion}}">
                     </div>
                 </div>

                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="fecha" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha inicio (desarrollo):</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="fecha_inicio" class="fecha form-control datepicker disabled" placeholder="Fecha inicio" value="{{$software->fecha_inicio}}">
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="fecha" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha término:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="fecha_termino" class="fecha form-control datepicker disabled" placeholder="Fecha término" value="{{$software->fecha_termino}}">
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Registro INDAUTOR:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="registro" class="form-control disabled" placeholder="Registro INDAUTOR" value="{{$software->registro}}">
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Estátus:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <select name="estatus" class="form-control" id="elem_soft">
                            @if($software->estatus == "pr")
                                  <option value="">&nbsp;</option>
                                  <option value="pr" selected>Presentado</option>
                                  <option value="ap">Aprobado</option>
                            @elseif($software->estatus == "ap")
                                  <option value="">&nbsp;</option>
                                  <option value="pr">Presentado</option>
                                  <option value="ap" selected>Aprobado</option>
                            @else
                                  <option value="">&nbsp;</option>
                                  <option value="pr">Presentado</option>
                                  <option value="ap">Aprobado</option>
                            @endif
                                
                            </select>
                     </div>
                 </div>
                @if($software->estatus == "ap")
                <div id="div_fecha_ap" class="">
                @else
                <div id="div_fecha_ap" class="hidden">
                @endif
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="fecha" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de aprobación:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="text" name="fecha_aprobacion" class="fecha form-control datepicker disabled" placeholder="Fecha de aprobación" value="{{$software->fecha_aprobacion}}">
                         </div>
                     </div>
                </div>

                @if($software->estatus == "pr")
                <div id="div_fecha_pr" class="">
                @else
                <div id="div_fecha_pr" class="hidden">
                @endif
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="fecha" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de presentación:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="text" name="fecha_presentacion" class="fecha form-control datepicker disabled" placeholder="Fecha de presentación" value="{{$software->fecha_presentacion}}">
                         </div>
                     </div>
                </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="participacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Área de aplicación:</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="area_aplicacion" class="form-control disabled" placeholder="Área" value="{{$software->area_aplicacion}}">
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