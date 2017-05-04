@extends("templates.base")

@section('content')
    <section id="content">
        <div class="content">
            <div class="row">
                <h1 class="text-center">{{$investigador->nombre}} {{$investigador->ap_paterno}} {{$investigador->ap_materno}}</h1>
            </div>
            
        </div>
    </section>
@endsection