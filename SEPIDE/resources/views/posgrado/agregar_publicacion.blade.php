@extends("templates.base")

@section('content')

<section id="content">
        <div class="content">
            <div class="row">
                <h1 class="text-center">Publicaciones</h1>
            </div>
            <form class="form-horizontal" method="post">
            {{ csrf_field() }}
                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Nombre:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="nombre_publicacion" class="form-control" placeholder="Nombre">
                     </div>
                 </div>
                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="tipo" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Tipo:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <select name="tipo" class="form-control">
                              <option valur="">&nbsp;</option>
                              <option value="Científico-Técnico">Científico-Técnico</option>
                              <option value="Divulgación">Divulgación</option>
                              <option value="Libro">Libro</option>
                              <option value="Capitulo de libro">Capitulo de libro</option>
                              <option value="Memoria de congreso o simposio">Memoria de congreso o simposio</option>
                        </select>
                     </div>
                 </div>
                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Alcance:</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            <select name="alcance" class="form-control">
                                  <option value="Nacional">Nacional</option>
                                  <option value="Internacional">Internacional</option>
                            </select>
                        </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="medio" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Medio de la publicación:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <select name="medio_publicacion" class="form-control" id="elem_medio">
                              <option value="INDAUTOR">INDAUTOR</option>
                              <option value="JCR">JCR</option>
                              <option value="Indexada">Indexada</option>
                              <option value="otro">Otro...</option>
                        </select>
                     </div>
                 </div>
                <div class="hidden" id="div_otro">
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="otro" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Otro:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="text" name="otro" class="form-control" placeholder="Otro...">
                         </div>
                     </div>
                </div>

                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="medio" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Registro:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <select name="tipo_registro" class="form-control" id="elem_registro">
                              <option value="ISSN">ISSN</option>
                              <option value="ISBN">ISBN</option>
                              <option value="otro">Otro...</option>
                        </select>
                     </div>
                 </div>

                 <div class="hidden" id="div_otro_registro">
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="otro" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Otro (regístro):</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="text" name="otro_registro" class="form-control" placeholder="Otro...">
                         </div>
                     </div>
                 </div>

                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="otro" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Número de registro:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="registro" class="form-control" placeholder="Número de registro">
                     </div>
                 </div>
                 
                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="fechaAceptacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de aceptación:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="fecha_aceptacion" class="form-control datepicker" placeholder="Fecha de aceptación">
                     </div>
                 </div>
                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="fechaPublicacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de publicación:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="fecha_publicacion" class="fecha form-control datepicker disabled" placeholder="Fecha de publicación">
                     </div>
                  
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="estatus" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Otros autores (docentes):</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <select id="elem_estatus" name="investigadores[]" class="form-control" multiple>
                              @foreach($investigadores as $inv)
                                <option value="{{$inv['id']}}">{{$inv['nombre']}} {{$inv['ap_paterno']}} {{$inv['ap_materno']}}</option>
                              @endforeach
                        </select>
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="estatus" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Otros autores (estudiantes):</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="estudiantes" data-role="tagsinput" />
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