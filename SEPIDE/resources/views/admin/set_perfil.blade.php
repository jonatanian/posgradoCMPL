@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ingresa tus datos personales</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/set_perfil') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('name') }}">

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="ap_paterno" class="col-md-4 control-label">Apellido paterno</label>

                            <div class="col-md-6">
                                <input id="ap_paterno" type="text" class="form-control" name="ap_paterno" value="{{ old('name') }}">

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="ap_materno" class="col-md-4 control-label">Apellido materno</label>

                            <div class="col-md-6">
                                <input id="ap_materno" type="text" class="form-control" name="ap_materno" value="{{ old('name') }}">

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Grado</label>

                            <div class="col-md-6">
                                <select name="grado" class="form-control">
                                    <option value=""></option>
                                    <option value="1">Lic.</option>
                                    <option value="2">Ing.</option>
                                    <option value="3">Mtro.</option>
                                    <option value="5">Mtra.</option>
                                    <option value="4">Dr.</option>
                                    <option value="6">Dra.</option>
                                
                                </select>

                            </div>
                        </div>     

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="profesor_adscrito" class="col-md-4 control-label">Adscripción a programa CMP+L</label>
                            <div class="col-md-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="1" name="adscripcion1">
                                        Maestría en ingeniería en ingeniería en Producción más Límpia
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="2" name="adscripcion3">
                                        Maestría en Energía
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="3" name="adscripcion2">
                                        Doctorado en Energía
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="profesor_adscrito" class="col-md-4 control-label">Profesor adscrito</label>

                            <div class="col-md-6">
                                <select name="profesor_adscrito" class="form-control">
                                    <option value=""></option>
                                    <option value="Colegiado">Colegiado</option>
                                    <option value="Asignatura">Asignatura</option>
                                    <option value="Asistente">Asistente</option>
                                    <option value="Invitado o visitante">Invitado o visitante</option>
                                </select>

                            </div>
                        </div>   

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="profesor_posgrado" class="col-md-4 control-label">Profesor posgrado</label>
                            <div class="col-md-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="1" name="profesor1">
                                        PNPC Núcleo básico
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="2" name="profesor2">
                                        PNPC Núcleo asociado
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="3" name="profesor3">
                                        SNI
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="4" name="profesor4">
                                        EDI
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="5" name="profesor5">
                                        COFA
                                    </label>
                                </div>
                            </div>
                        </div>             

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
