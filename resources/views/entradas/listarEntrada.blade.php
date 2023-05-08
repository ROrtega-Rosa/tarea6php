@extends('layout.head')
@section('content')

    <!---card--->
   
   
    <div class="row justify-content-center">
            <div class="col-xs-12 col-md-12 col-lg-3">

                    <div class="card mb-3">
                    <img src='../../blog/imagenes/{{$entrada->imagen}}' class="card-img-top" alt="" style="width: 500px;">
                        <div class="card-body">
                            <h5 class="card-title">"Titulo: "{{$entrada->titulo}}</h5>
                            <p class="card-text">"Categoria: "{{$entrada->categoria_id}}</small></p>
                            <p class="card-text">"Usuario: "{{$entrada->usuario_id}}</p>
                            <p class="card-text">"Fecha: "{{$entrada->fecha}}</small></p>
                            <p class="card-text">"Descripcion: "{{$entrada->descripcion}}</small></p>
                        </div>
                    </div>  
            </div>
        </div>
    </div>

@endsection