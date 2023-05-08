@extends('layout.plantilla')


@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <table class="table table-striped text-center">
                <tr>
                    <th>Categoría</th>
                    <th>Usuario</th>
                    <th>Título</th>
                    <th>Imagen</th>
                    <th>Descripcion</th>
                    <th>fecha</th>
                   
                </tr>
                
                @foreach ($resultado as $e)
                    <tr>
                        <td>{{$e->categoria_id}}</td>
                        <td>{{$e->usuario_id}}</td>
                        <td>{{$e->titulo}}</td>
                        <td><img src="../../public/blog/imagenes/{{$e->imagen}}" width="50"></td>
                        <td>{{$e->descripcion}}</td>
                        <td>{{$e->fecha}}</td>
                        
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <br>   
@endsection