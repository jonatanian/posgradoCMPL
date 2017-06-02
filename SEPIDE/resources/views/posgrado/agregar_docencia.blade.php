@extends("templates.base")

@section('content')

<section id="content">
        <div class="content">
            <div class="row">
                <h1 class="text-center">Docencia</h1>
            </div>
            <form class="form-horizontal" method="post">
            {{ csrf_field() }}
                <div class="row">
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
                             <select class="form-control" name="tipo_alcance" id="elem_invitado">
                                    <option value="">&nbsp;</option>
                                      <option value="Programa sede CMPL">Programa sede CMPL</option>
                                      <option value="Invitado">Invitado</option>
                                </select>
                         </div>
                     </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="estatus" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Asignaturas:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="text" name="asignaturas" data-role="tagsinput" />
                         </div>
                     </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="estatus" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Asistentes:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="text" name="asistentes" data-role="tagsinput" />
                         </div>
                     </div>
                </div>

                <hr>
                <div class="hidden" id="div_invitados">
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="checkbox">
                            <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                <input type="checkbox" value="Nivel medio superior" name="nivel1">
                                Nivel medio superior
                            </label>
                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                <input type="text" name="medio_superior" data-role="tagsinput" />
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="checkbox">
                            <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                <input type="checkbox" value="Superior" name="nivel2">
                                Superior
                            </label>
                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                <input type="text" name="superior" data-role="tagsinput" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="checkbox">
                            <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                <input type="checkbox" value="Posgrado" name="nivel3">
                                Posgrado
                            </label>
                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                <input type="text" name="posgrado" data-role="tagsinput" />
                            </div>
                        </div>
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