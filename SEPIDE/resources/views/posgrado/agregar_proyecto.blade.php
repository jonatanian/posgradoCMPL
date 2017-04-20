@extends("templates.base")

@section('content')

<section id="content">
        <div class="content">
            <div class="row">
                <h1 class="text-center">Proyectos de I+D+i</h1>
            </div>
            <form class="form-horizontal">
                 <div class="form-group">
                     <label for="inputName" class="control-label col-xs-2">Nombre:</label>
                     <div class="col-xs-10">
                         <input type="name" class="form-control" placeholder="Nombre">
                     </div>
                 </div>
                 <div class="form-group">
                     <label for="inputEmail" class="control-label col-xs-2">Email:</label>
                     <div class="col-xs-10">
                         <input type="email" class="form-control" placeholder="Email">
                     </div>
                 </div>
                 <div class="form-group">
                     <label for="inputPassword" class="control-label col-xs-2">Asunto:</label>
                     <div class="col-xs-10">
                         <input type="text" class="form-control" placeholder="Asunto">
                     </div>
                 </div>
                 <div class="form-group">
                     <div class="col-xs-offset-2 col-xs-10">
                         <button type="submit" class="btn btn-primary">Enviar</button>
                     </div>
                 </div>
                
            </form>
            
        </div>
    </section>

@endsection