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
                             {{$docencia->fecha_inicio}}
                         </div>
                     </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="fecha" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha término:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             {{$docencia->fecha_termino}}
                         </div>
                     </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="alcance" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Alcance:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             {{$docencia->tipo_alcance}}
                         </div>
                     </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="estatus" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Asignaturas:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        @foreach(explode(',', $docencia->asignaturas) as $asignatura)
                             {{$asignatura}}
                        @endforeach
                         </div>
                     </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="estatus" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Asistentes:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        @foreach(explode(',', $asistentes) as $asistente)
                             {{$asistente}}
                        @endforeach
                         </div>
                     </div>
                </div>

                <hr>
                @if($docencia->tipo_alcance == "Invitado")
                <div class="" id="div_invitados">
                @else
                <div class="hidden" id="div_invitados">
                @endif
                    @if($inv_ms != "")
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    @else
                    <div class="hidden form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    @endif
                        <div class="checkbox">
                            <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                Nivel medio superior
                            </label>
                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                <ul>
                                @foreach(explode(',', $inv_ms) as $inv)
                                    @if($inv != "")
                                    <li>{{$inv}}</li>
                                    @endif
                                @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    @if($inv_su !="")
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    @else
                    <div class="hidden form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    @endif
                        <div class="checkbox">
                            <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                Superior
                            </label>
                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            <ul>
                                @foreach(explode(',', $inv_su) as $inv)
                                    @if($inv != "")
                                    <li>{{$inv}}</li>
                                    @endif
                                @endforeach
                            </ul>
                            </div>
                        </div>
                    </div>
                    @if($inv_po != "")
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    @else
                    <div class="hidden form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    @endif
                        <div class="checkbox">
                            <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                Posgrado
                            </label>
                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            <ul>
                                @foreach(explode(',', $inv_po) as $inv)
                                    @if($inv != "")
                                    <li>{{$inv}}</li>
                                    @endif
                                @endforeach
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
            
        </div>

    </section>

@endsection