@extends("templates.base")

@section('content')

<section id="content">
        <div class="content">
            <div class="row">
                <h1 class="text-center">Movilidad</h1>
            </div>
            <form class="form-horizontal" method="post">
            {{ csrf_field() }}

                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Tipo:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        <select name="tipo" class="form-control">
                        @if($movilidad->tipo == "Individual")
                              <option value="">&nbsp;</option>
                                  <option value="Individual" selected>Individual</option>
                                  <option value="De estudiante">De estudiante</option>
                        @elseif($movilidad->tipo == "De estudiante")
                                  <option value="">&nbsp;</option>
                                  <option value="Individual">Individual</option>
                                  <option value="De estudiante" selected>De estudiante</option>
                        @else
                                  <option value="">&nbsp;</option>
                                  <option value="Individual">Individual</option>
                                  <option value="De estudiante">De estudiante</option>
                        @endif
                         
                                  
                        </select>
                     </div>
                 </div>

                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="nombrePrograma" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Nombre del alumno:</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="alumno" class="form-control disabled" placeholder="Alumno" value="{{$movilidad->alumno}}">
                     </div>
                 </div>

                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="nombrePrograma" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Nombre del programa:</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="nombre_programa" class="form-control disabled" placeholder="Nombre del programa" value="{{$movilidad->nombre_programa}}">
                     </div>
                 </div>

                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="fecha" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha inicio:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="fecha_inicio" class="fecha form-control datepicker disabled" placeholder="Fecha inicio"value="{{$movilidad->fecha_inicio}}">
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="fecha" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha término:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="fecha_termino" class="fecha form-control datepicker disabled" placeholder="Fecha término" value="{{$movilidad->fecha_termino}}">
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Alcance:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <select name="alcance" class="form-control">
                            @if($movilidad->alcance == "Nacional")
                                  <option value="">&nbsp;</option>
                                  <option value="Nacional" selected>Nacional</option>
                                  <option value="Internacional">Internacional</option>
                            @elseif($movilidad->alcance == "Internacional")
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
                     <label for="participacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Institución destino:</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="institucion_destino" class="form-control disabled" placeholder="Institución" value="{{$movilidad->institucion_destino}}">
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