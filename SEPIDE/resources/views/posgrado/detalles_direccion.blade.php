@extends("templates.base")

@section('content')

<section id="content">
        <div class="content">
            <div class="row">
                <h1 class="text-center">Dirección de tesis</h1>
            </div>
            <form class="form-horizontal" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Tipo:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <p>{{$direccion->tipo}}</p>
                     </div>
                 </div>
                @if($direccion->tipo == "Institucional")
                <div class="" id="div_dir">
                @else
                <div class="hidden" id="div_dir">
                @endif
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="participacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Unidad Politécnica:</label>
                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <p>{{$direccion->unidad}}</p>
                         </div>
                     </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Nivel:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <p>{{$direccion->nivel}}</p>
                         </div>
                     </div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Programa:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <p>{{$direccion->programa}}</p>
                     </div>
                 </div>
            </div>
            <hr>
            <div class="row">

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="participacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Nombre del alumno:</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <p>{{$direccion->alumno}}</p>
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="participacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Título:</label>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <p>{{$direccion->titulo}}</p>
                     </div>
                 </div>
            </div>
            <hr>
            <div class="row">
                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="estatus" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Director(es):</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        <ul>
                         @foreach($inv_ind as $inv)
                            <li>{{$inv->investigador->nombre}} {{$inv->investigador->ap_paterno}} {{$inv->investigador->ap_materno}}</li>
                         @endforeach
                         </ul>
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">LGAC:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <p>{{$direccion->lgac}}</p>
                     </div>
                 </div>
                
                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Estátus:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <p>{{$direccion->estatus}}</p>
                     </div>
                 </div>

                @if($direccion->estatus == "En desarrollo")
                <div class="" id="div_dir_lim">
                @else
                <div class="hidden" id="div_dir_lim">
                @endif
                     <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="fecha" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha límite:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <p>{{$direccion->fecha_limite}}</p>
                         </div>
                     </div>
                </div>

                @if($direccion->estatus == "Terminada")
                <div class="" id="div_dir_ter">
                @else
                <div class="hidden" id="div_dir_ter">
                @endif
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="fecha" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha término:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <p>{{$direccion->fecha_termino}}</p>
                         </div>
                     </div>
                </div>
                
            </form>
            
        </div>

    </section>

@endsection