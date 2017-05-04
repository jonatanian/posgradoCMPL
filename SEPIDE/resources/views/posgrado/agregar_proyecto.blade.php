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
                              <option value"" disabled>-- Externo --</option>
                              <option value="1">CONACYT</option>
                              <option value="2">CDMX</option>
                              <option value="" disabled>-- Interno --</option>
                              <option value="3">Multidiciplinario</option>
                              <option value="4">SIP</option>
                              <option value="otro">Otro...</option>
                        </select>
                     </div>
                 </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <label for="otro" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Otro:</label>
                     <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                         <input type="text" class="form-control" placeholder="Otro">
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
                         <select id="elem_estatus" class="form-control">
                              <option value="">&nbsp;</option>
                              <option value="presentado">Presentado</option>
                              <option value="aprobado">Aprobado</option>
                              <option value="naprobado">No aprobado</option>
                        </select>
                     </div>
                 </div>
                 <div id="div_estatus_presentado" class="hidden">
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="fechaPresentacion" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de presentación:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="date" class="form-control datepicker" placeholder="Fecha de presentacion">
                         </div>
                     </div>
                     <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="fechaVencimiento" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de vencimiento:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="date" class="form-control datepicker" placeholder="Fecha de vencimiento">
                         </div>
                     </div>
                </div>
                <div id="div_estatus_aprobado" class="hidden">
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="fechaInicio" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de inicio:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="date" class="form-control datepicker" placeholder="Fecha de inicio">
                         </div>
                     </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <label for="fechaTermino" class="control-label col-xs-2 col-sm-2 col-md-2 col-lg-2">Fecha de término:</label>
                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             <input type="date" class="form-control datepicker" placeholder="Fecha de Término">
                         </div>
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