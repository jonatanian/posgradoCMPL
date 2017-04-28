@extends("templates.base")

@section('content')

<section id="content">
        <div class="content">
            <div class="row">
                <h1 class="text-center">Proyectos de I+D+i</h1>
            </div>
            <form class="form-horizontal">
                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Nombre:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" class="form-control" placeholder="Nombre">
                     </div>
                 </div>
                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="inputEmail" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Financiamiento:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <select class="form-control">
                              <option value="volvo">Multidiciplinario</option>
                              <option value="saab">CONACYT</option>
                              <option value="mercedes">CDMX</option>
                              <option value="audi">SIP</option>
                              <option value="audi">Otro...</option>
                        </select>
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="otro" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Otro:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" class="form-control" placeholder="Financiamiento">
                     </div>
                 </div>

                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="programa" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Programa:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" class="form-control" placeholder="Programa">
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="estatus" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Estatus:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <select class="form-control">
                              <option value="volvo">Presentado</option>
                              <option value="saab">Aprobado</option>
                              <option value="mercedes">No aprobado</option>
                        </select>
                     </div>
                 </div>
                 
                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="fechaEstatus" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de estatus:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="date" class="form-control datepicker" placeholder="Fecha de estatus">
                     </div>
                 </div>
                 <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="vigencia" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Vigencia del proyecto (inicio):</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="date" class="fecha form-control datepicker disabled" placeholder="Inicio">
                     </div>
                  
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="vigencia" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Vigencia del proyecto (término):</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="date" class="fecha form-control datepicker disabled" placeholder="Término">
                     </div>
                  
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="inputName" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Monto financiado:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" class="form-control" placeholder="Monto financiado">
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