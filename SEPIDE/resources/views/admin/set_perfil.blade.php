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
                                    <option value="4">Dr.</option>
                                
                                </select>

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
