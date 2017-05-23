@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ingresa tu nuevo password</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Contraseña:</label>

                            <div class="col-md-6">
                                <input id="nombre" type="password" class="form-control" name="password" value="{{ old('name') }}">

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="ap_paterno" class="col-md-4 control-label">Confirmar password:</label>

                            <div class="col-md-6">
                                <input id="ap_paterno" type="password" class="form-control" name="passwordc" value="{{ old('name') }}">

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
