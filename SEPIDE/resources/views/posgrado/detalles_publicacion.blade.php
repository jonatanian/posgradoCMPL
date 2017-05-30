@extends("templates.base")

@section('content')

<section id="content">
        <div class="content">
            <div class="row">
                <h1 class="text-center">Publicaciones</h1>
            </div>
            <form class="form-horizontal" method="post">
            {{ csrf_field() }}
            <div class="row">
                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Nombre:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         {{$publicacion->nombre_publicacion}}
                     </div>
                 </div>
                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="tipo" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Tipo:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10"> 
                        {{$publicacion->tipo}}
                     </div>
                 </div>
                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Alcance:</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            {{$publicacion->alcance}}
                        </div>
                 </div>
              </div>
              <hr>
              <div class="row">
                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="medio" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Medio de la publicación:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         {{$publicacion->medio_publicacion}}
                     </div>
                 </div>
                @if($publicacion->medio_publicacion == "otro")
                <div class="" id="div_otro">
                @else
                <div class="hidden" id="div_otro">
                @endif
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="otro" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Otro:</label>
                         {{$publicacion->otro}}
                     </div>
                </div>

                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="medio" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Registro:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         {{$publicacion->tipo_registro}}
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
                             {{$publicacion->otro_registro}}
                         </div>
                     </div>
                 </div>

                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="otro" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Número de registro:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         {{$publicacion->registro}}
                     </div>
                 </div>
              </div>
              <hr>
              <div class="row">
                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="fechaAceptacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de aceptación:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         {{$publicacion->fecha_aceptacion}}
                     </div>
                 </div>
                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="fechaPublicacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de publicación:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        {{$publicacion->fecha_publicacion}}
                     </div>
                  
                 </div>
              </div>
              <hr>
              <div class="row">
                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="estatus" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Autores:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <ul>
                         @foreach($inv_ind as $inv)
                            <li>{{$inv->investigador->nombre}} {{$inv->investigador->ap_paterno}} {{$inv->investigador->ap_materno}}</li>
                         @endforeach
                         </ul>
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="estatus" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Estudiantes:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <ul>
                         @foreach($est_ind as $est)
                            <li>{{$est->estudiante}}</li>
                        @endforeach
                        </ul>
                     </div>
                 </div>
              </div>
                
            </form>
            
        </div>

    </section>

@endsection