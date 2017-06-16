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
                         <input type="text" name="nombre_publicacion" class="form-control" placeholder="Nombre" value="{{$publicacion->nombre_publicacion}}">
                     </div>
                 </div>
                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="tipo" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Tipo:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <select name="tipo" class="form-control">
                              <option valur="">&nbsp;</option>
                              @if($publicacion->tipo == "Científico-Técnico")
                              <option value="Científico-Técnico" selected>Científico-Técnico</option>
                              <option value="Divulgación">Divulgación</option>
                              <option value="Libro">Libro</option>
                              <option value="Capitulo de libro">Capitulo de libro</option>
                              <option value="Memoria de congreso o simposio">Memoria de congreso o simposio</option>
                              @elseif($publicacion->tipo == "Divulgación")
                              <option value="Científico-Técnico">Científico-Técnico</option>
                              <option value="Divulgación" selected>Divulgación</option>
                              <option value="Libro">Libro</option>
                              <option value="Capitulo de libro">Capitulo de libro</option>
                              <option value="Memoria de congreso o simposio">Memoria de congreso o simposio</option>
                              @elseif($publicacion->tipo == "Libro")
                              <option value="Científico-Técnico">Científico-Técnico</option>
                              <option value="Divulgación">Divulgación</option>
                              <option value="Libro" selected>Libro</option>
                              <option value="Capitulo de libro">Capitulo de libro</option>
                              <option value="Memoria de congreso o simposio">Memoria de congreso o simposio</option>
                              @elseif($publicacion->tipo == "Capitulo de libro") 
                              <option value="Científico-Técnico">Científico-Técnico</option>
                              <option value="Divulgación">Divulgación</option>
                              <option value="Libro">Libro</option>
                              <option value="Capitulo de libro" selected>Capitulo de libro</option>
                              <option value="Memoria de congreso o simposio">Memoria de congreso o simposio</option>
                              @elseif($publicacion->tipo == "Memoria de congreso o simposio")
                              <option value="Científico-Técnico">Científico-Técnico</option>
                              <option value="Divulgación">Divulgación</option>
                              <option value="Libro">Libro</option>
                              <option value="Capitulo de libro">Capitulo de libro</option>
                              <option value="Memoria de congreso o simposio" selected>Memoria de congreso o simposio</option>
                              @else
                              <option value="Científico-Técnico">Científico-Técnico</option>
                              <option value="Divulgación">Divulgación</option>
                              <option value="Libro">Libro</option>
                              <option value="Capitulo de libro">Capitulo de libro</option>
                              <option value="Memoria de congreso o simposio">Memoria de congreso o simposio</option>
                              @endif
                        </select>
                     </div>
                 </div>
                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Alcance:</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            <select name="alcance" class="form-control">
                                @if($publicacion->alcance == "Nacional")
                                  <option value="Nacional" selected>Nacional</option>
                                  <option value="Internacional">Internacional</option>
                                @elseif($publicacion->alcance == "Internacional")
                                  <option value="Nacional">Nacional</option>
                                  <option value="Internacional" selected>Internacional</option>
                                @else
                                  <option value="Nacional">Nacional</option>
                                  <option value="Internacional">Internacional</option>
                                @endif
                                 
                            </select>
                        </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="medio" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Medio de la publicación:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <select name="medio_publicacion" class="form-control" id="elem_medio">
                            @if($publicacion->medio_publicacion == "INDAUTOR")
                              <option value="INDAUTOR" selected>INDAUTOR</option>
                              <option value="JCR">JCR</option>
                              <option value="Indexada">Indexada</option>
                              <option value="otro">Otro...</option>
                            @elseif($publicacion->medio_publicacion == "JRC")
                              <option value="INDAUTOR">INDAUTOR</option>
                              <option value="JCR" selected>JCR</option>
                              <option value="Indexada">Indexada</option>
                              <option value="otro">Otro...</option>
                            @elseif($publicacion->medio_publicacion == "Indexada")
                              <option value="INDAUTOR">INDAUTOR</option>
                              <option value="JCR">JCR</option>
                              <option value="Indexada" selected>Indexada</option>
                              <option value="otro">Otro...</option>
                            @elseif($publicacion->medio_publicacion == "otro")
                              <option value="INDAUTOR">INDAUTOR</option>
                              <option value="JCR">JCR</option>
                              <option value="Indexada">Indexada</option>
                              <option value="otro" selected>Otro...</option>
                            @else
                              <option value="INDAUTOR">INDAUTOR</option>
                              <option value="JCR">JCR</option>
                              <option value="Indexada">Indexada</option>
                              <option value="otro">Otro...</option>
                            @endif
                              
                        </select>
                     </div>
                 </div>
                @if($publicacion->medio_publicacion == "otro")
                <div class="" id="div_otro">
                @else
                <div class="hidden" id="div_otro">
                @endif
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="otro" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Otro:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="text" name="otro" class="form-control" placeholder="Otro..." value="{{$publicacion->otro}}">
                         </div>
                     </div>
                </div>

                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="medio" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Registro:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <select name="tipo_registro" class="form-control" id="elem_registro">
                            @if($publicacion->tipo_registro == "ISSN")
                              <option value="ISSN" selected>ISSN</option>
                              <option value="ISBN">ISBN</option>
                              <option value="otro">Otro...</option>
                            @elseif($publicacion->tipo_registro == "ISBN")
                              <option value="ISSN">ISSN</option>
                              <option value="ISBN" selected>ISBN</option>
                              <option value="otro">Otro...</option>
                            @elseif($publicacion->tipo_registro == "otro")
                              <option value="ISSN">ISSN</option>
                              <option value="ISBN">ISBN</option>
                              <option value="otro" selected>Otro...</option>
                            @else
                              <option value="ISSN">ISSN</option>
                              <option value="ISBN">ISBN</option>
                              <option value="otro">Otro...</option>
                            @endif
                              
                        </select>
                     </div>
                 </div>
                 @if($publicacion->tipo_registro == "otro")
                 <div class="" id="div_otro_registro">
                 @else
                 <div class="hidden" id="div_otro_registro">
                 @endif
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="otro" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Otro (regístro):</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="text" name="otro_registro" class="form-control" placeholder="Otro..." value="{{$publicacion->otro_registro}}">
                         </div>
                     </div>
                 </div>

                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="otro" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Número de registro:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="registro" class="form-control" placeholder="Número de registro" value="{{$publicacion->registro}}">
                     </div>
                 </div>
                 
                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="fechaAceptacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de aceptación:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="fecha_aceptacion" class="form-control datepicker" placeholder="Fecha de aceptación" value="{{$publicacion->fecha_aceptacion}}">
                     </div>
                 </div>
                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="fechaPublicacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de publicación:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="fecha_publicacion" class="fecha form-control datepicker disabled" placeholder="Fecha de publicación" value="{{$publicacion->fecha_publicacion}}">
                     </div>
                  
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="estatus" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Otros autores (docentes):</label>
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
                     <label for="estatus" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Otros autores (estudiantes):</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" name="estudiantes" data-role="tagsinput" value="{{$est_ind}}"/>
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