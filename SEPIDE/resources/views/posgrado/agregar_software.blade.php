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
                         <input type="textarea" name="descripcion" class="form-control disabled" placeholder="Descripción">
                     </div>
                 </div>

                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="fecha" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha inicio (desarrollo):</label>
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
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Registro INDAUTOR:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="registro" class="form-control disabled" placeholder="Registro INDAUTOR">
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Estátus:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <select name="estatus" class="form-control">
                                  <option value="">&nbsp;</option>
                                  <option value="pr">Presentado</option>
                                  <option value="ap">Aprobado</option>
                            </select>
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="fecha" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de aprobación:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="fecha_aprobacion" class="fecha form-control datepicker disabled" placeholder="Fecha de aprobación">
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="participacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Área de aplicación:</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="area_aplicacion" class="form-control disabled" placeholder="Tema">
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