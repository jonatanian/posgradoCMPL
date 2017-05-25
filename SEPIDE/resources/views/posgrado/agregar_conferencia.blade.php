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
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Alcance:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <select name="alcance" class="form-control">
                                  <option value="">&nbsp;</option>
                                  <option value="Conferencia Nacional">Conferencia Nacional</option>
                                  <option value="Conferencia Institucional">Conferencia Institucional</option>
                                  <option value="Conferencia Internacional">Conferencia Internacional</option>
                            </select>
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="participacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Tema de la participación:</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="tema_participacion" class="form-control disabled" placeholder="Tema">
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="participacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Nombre del programa:</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="nombre_programa" class="form-control disabled" placeholder="Programa">
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