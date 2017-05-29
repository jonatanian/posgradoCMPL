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
                         <input type="text" name="nombre_congreso" class="form-control" placeholder="Nombre">
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Alcance:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <select name="alcance" class="form-control">
                                  <option value="">&nbsp;</option>
                                  <option value="Nacional">Nacional</option>
                                  <option value="Internacional">Internacional</option>
                            </select>
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="participacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Participación:</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            <select name="participacion" class="form-control">
                              <option value="">&nbsp;</option>
                              <option value="Presentación oral">Presentación oral</option>
                              <option value="Póster">Póster</option>
                              <option value="Asistente">Asistente</option>
                              <option value="Comité organizador">Comité organizador</option>
                              <option value="Comité editorial">Comité editorial</option>
                            </select>
                        </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="fecha" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de inicio:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="fecha_inicio" class="fecha form-control datepicker disabled" placeholder="Fecha de inicio">
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="fecha" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de término:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="fecha_termino" class="fecha form-control datepicker disabled" placeholder="Fecha de término">
                     </div>
                 </div>
                 
                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="registros" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Registros:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <select name="tipo_registro" class="form-control" id="elem_reg">
                                  <option value="">&nbsp;</option>
                                  <option value="ISSN">ISSN</option>
                                  <option value="ISBN">ISBN</option>
                                  <option value="otro">Otro...</option>
                            </select>
                     </div>
                 </div>

                 <div class="hidden" id="div_otro">
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Otro:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="text" name="otro" class="form-control" placeholder="Otro">
                         </div>
                     </div>
                 </div>

                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Número de registro:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="registro" class="form-control" placeholder="Registro">
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