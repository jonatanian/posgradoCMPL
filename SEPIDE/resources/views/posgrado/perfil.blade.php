@extends("templates.base")

@section('content')
    <section id="content">
        <div class="content">
            <div class="row">
                <h1 class="text-center">{{$investigador['grado']}} {{$investigador['nombre']}} {{$investigador['ap_paterno']}} {{$investigador['ap_materno']}}</h1><br>
                <h2 class="text-center">I+D+i</h2>
            </div>
            <div class="row">
                <table>
                    @if(!empty($proyectos))
                    <tr>
                    <div>
                        <h3>Proyectos:</h3>
                        <ul>
                        @foreach($proyectos as $proyecto)
                            <li><a href="{{ url('proyectos/'.$proyecto->id) }}">{{$proyecto->nombre_proyecto}}</a></li>
                        @endforeach
                        </ul>
                    </div>
                    </tr>
                    @endif

                    @if(!empty($publicaciones))
                    <tr>
                    <div>
                        <h3>Publicaciones:</h3>
                        <ul>
                        @foreach($publicaciones as $publicacion)
                            <li><a href="{{ url('publicaciones/'.$publicacion->id) }}">{{$publicacion->nombre_publicacion}}</a></li>
                        @endforeach
                        </ul>
                    </div>
                    </tr>
                    @endif

                    @if(!empty($congresos))
                    <tr>
                    <div>
                        <h3>Congresos:</h3>
                        <ul>
                        @foreach($congresos as $congreso)
                            <li><a href="{{ url('congresos/'.$congreso->id) }}">{{$congreso->nombre_congreso}}</a></li>
                        @endforeach
                        </ul>
                    </div>
                    </tr>
                    @endif

                    @if(!empty($patentes))
                    <tr>
                    <div>
                        <h3>Patentes:</h3>
                        <ul>
                        @foreach($patentes as $patente)
                            <li><a href="{{ url('patentes/'.$patente->id) }}">{{$patente->nombre_patente}}</a></li>
                        @endforeach
                        </ul>
                    </div>
                    </tr>
                    @endif

                    @if(!empty($transferencias))
                    <tr>
                    <div>
                        <h3>Transferencias:</h3>
                        <ul>
                        @foreach($transferencias as $transferencia)
                            <li><a href="{{ url('transferencias/'.$transferencia->id) }}">{{$transferencia->nombre_transferencia}}</a></li>
                        @endforeach
                        </ul>
                    </div>
                    </tr>
                    @endif

                    @if(!empty($conferencias))
                    <tr>
                    <div>
                        <h3>Conferencias:</h3>
                        <ul>
                        @foreach($conferencias as $conferencia)
                            <li><a href="{{ url('conferencias/'.$conferencia->id) }}">{{$conferencia->nombre_programa}}</a></li>
                        @endforeach
                        </ul>
                    </div>
                    </tr>
                    @endif

                    @if(!empty($software))
                    <tr>
                    <div>
                        <h3>Software:</h3>
                        <ul>
                        @foreach($software as $soft)
                            <li><a href="{{ url('software/'.$soft->id) }}">{{$soft->descripcion}}</a></li>
                        @endforeach
                        </ul>
                    </div>
                    </tr>
                    @endif

                    @if(!empty($movilidad))
                    <tr>
                    <div>
                        <h3>Movilidad:</h3>
                        <ul>
                        @foreach($movilidad as $mov)
                            <li><a href="{{ url('movilidad/'.$mov->id) }}">{{$mov->nombre_programa}}</a></li>
                        @endforeach
                        </ul>
                    </div>
                    </tr>
                    @endif
                </table>
            </div>
            <div class="row">
                <h2 class="text-center">Adscripción al programa CMP+L</h2>
                @foreach($adscripciones as $ads)
                    <h3 class="text-center">{{$ads->adscripcion->nombre}}</h3>
                @endforeach
            </div>

            <div class="row">
            @if($prof_ads)
                <h2 class="text-center">Profesor Adscrito</h2>
                <h3 class="text-center">{{$prof_ads->profesor_adscrito}}</h3>
            </div>
            @endif
            <div class="row">
                <h2 class="text-center">Profesor Posgrado PNPC</h2>
                <h3 class="text-center"></h3>
            </div>
        </div>
    </section>
@endsection