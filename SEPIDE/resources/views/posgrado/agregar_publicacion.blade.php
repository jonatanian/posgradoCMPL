@extends("templates.base")

@section('content')

<section id="content">
        <div class="content">
            <div class="row">
                <h1 class="text-center">Publicaciones</h1>
            </div>
            <form class="form-horizontal">
                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Nombre:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" class="form-control" placeholder="Nombre">
                     </div>
                 </div>
                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="tipo" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Tipo:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <select class="form-control">
                              <option value="volvo">Científico-Técnico</option>
                              <option value="saab">Divulgación</option>
                              <option value="mercedes">Libro</option>
                              <option value="audi">Capitulo de libro</option>
                              <option value="audi">Memoria de congreso o simposio</option>
                        </select>
                     </div>
                 </div>
                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Alcance:</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            <select class="form-control">
                                  <option value="volvo">Nacional</option>
                                  <option value="saab">Internacional</option>
                            </select>
                        </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="medio" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Medio de la publicacioón:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <select class="form-control">
                              <option value="volvo">INDAUTOR</option>
                              <option value="saab">JCR</option>
                              <option value="mercedes">Indexada</option>
                              <option value="mercedes">Otro...</option>
                        </select>
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="otro" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Otro:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" class="form-control" placeholder="Otro...">
                     </div>
                 </div>
                 
                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="fechaAceptacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de aceptación:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="date" class="form-control datepicker" placeholder="Fecha de aceptación">
                     </div>
                 </div>
                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="fechaPublicacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de publicaión:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="date" class="fecha form-control datepicker disabled" placeholder="Fecha de publicación">
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