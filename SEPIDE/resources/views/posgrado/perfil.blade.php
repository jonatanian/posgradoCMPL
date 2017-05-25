@extends("templates.base")

@section('content')
    <section id="content">
        <div class="content">
            <div class="row">
                <h1 class="text-center">{{$investigador['grado']}} {{$investigador['nombre']}} {{$investigador['ap_paterno']}} {{$investigador['ap_materno']}}</h1><br>
                <h2 class="text-center">I+D+i</h2>
            </div>
            <div class="row">
                <dl>
                    @if(!empty($proyectos))
                    <dt>
                    <div class="row col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <h3>Proyectos:</h3>
                        <ul>
                        @foreach($proyectos as $proyecto)
                            <li><a href="{{ url('proyectos/'.$proyecto->id) }}">{{$proyecto->nombre_proyecto}}</a></li>
                        @endforeach
                        </ul>
                    </div>
                    </dt>
                    @endif

                    @if(!empty($publicaciones))
                    <dt>
                    <div class="row col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <h3>Publicaciones:</h3>
                        <ul>
                        @foreach($publicaciones as $publicacion)
                            <li><a href="{{ url('publicaciones/'.$publicacion->id) }}">{{$publicacion->nombre_publicacion}}</a></li>
                        @endforeach
                        </ul>
                    </div>
                    </dt>
                    @endif

                    @if(!empty($congresos))
                    <dt>
                    <div class="row col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <h3>Congresos:</h3>
                        <ul>
                        @foreach($congresos as $congreso)
                            <li><a href="{{ url('congresos/'.$congreso->id) }}">{{$congreso->nombre_congreso}}</a></li>
                        @endforeach
                        </ul>
                    </div>
                    </dt>
                    @endif

                    @if(!empty($patentes))
                    <dt>
                    <div class="row col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <h3>Patentes:</h3>
                        <ul>
                        @foreach($patentes as $patente)
                            <li><a href="{{ url('patentes/'.$patente->id) }}">{{$patente->nombre_patente}}</a></li>
                        @endforeach
                        </ul>
                    </div>
                    </dt>
                    @endif

                    @if(!empty($transferencias))
                    <dt>
                    <div class="row col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <h3>Transferencias:</h3>
                        <ul>
                        @foreach($transferencias as $transferencia)
                            <li><a href="{{ url('transferencias/'.$transferencia->id) }}">{{$transferencia->nombre_transferencia}}</a></li>
                        @endforeach
                        </ul>
                    </div>
                    </dt>
                    @endif

                    @if(!empty($conferencias))
                    <dt>
                    <div class="row col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <h3>Conferencias:</h3>
                        <ul>
                        @foreach($conferencias as $conferencia)
                            <li><a href="{{ url('conferencias/'.$conferencia->id) }}">{{$conferencia->nombre_programa}}</a></li>
                        @endforeach
                        </ul>
                    </div>
                    </dt>
                    @endif

                    @if(!empty($software))
                    <dt>
                    <div class="row col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <h3>Software:</h3>
                        <ul>
                        @foreach($software as $soft)
                            <li><a href="{{ url('software/'.$soft->id) }}">{{$soft->descripcion}}</a></li>
                        @endforeach
                        </ul>
                    </div>
                    </dt>
                    @endif

                    @if(!empty($movilidad))
                    <dt>
                    <div class="row col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <h3>Movilidad:</h3>
                        <ul>
                        @foreach($movilidad as $mov)
                            <li><a href="{{ url('movilidad/'.$mov->id) }}">{{$mov->nombre_programa}}</a></li>
                        @endforeach
                        </ul>
                    </div>
                    </dt>
                    @endif
                </dl>
            </div>
            <div class="row">
                <h2 class="text-center">Adscripción al programa CMP+L</h2>
                @foreach($adscripciones as $ads)
                    <h3 class="text-center">{{$ads->adscripcion->nombre}}</h3>
                @endforeach
            </div>

            <div class="row">
                <h2 class="text-center">Profesor Adscrito</h2>
                <h3 class="text-center">{{$prof_ads->profesor_adscrito}}</h3>
            </div>

            <div class="row">
                <h2 class="text-center">Profesor Posgrado PNPC</h2>
                <h3 class="text-center"></h3>
            </div>
        </div>
    </section>
@endsection