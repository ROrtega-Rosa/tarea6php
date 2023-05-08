@extends('layout.head')
@section('content')


    <!---listado-->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xs-3 col-md-6 col-lg-3">
                <h2 style="font-size: 30px;">Listado</h2>
            </div>
        </div>
        <div class="row justify-content-end">
        <div class="col-xs-3 col-md-3 col-lg-2">
            <button type="button" class="btn btn-secondary"><a href="{{route('entradas.pdf')}}" style="color: white; text-decoration:none;">PDF</a></button>
            <button type="button" class="btn btn-secondary"><a href="{{route('entradas.excel')}}" style="color: white; text-decoration:none;">Excel</a></button>
        
        </div></br>
        <div class="row justify-content-center">
            <div class="col-xs-3 col-md-12 col-lg-12">
                <!--se introducirá la lista de entradas en una tabla-->
                <table class="table table-sniped" >
                <tr>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                    <th>fecha</th>
                    <th>Imagen</th>
                    <th>Operaciones</th>
                    
                </tr>
                @foreach ($entradas as $e)
                    <tr>
                     
                        <td>{{$e->titulo}}</td>
                        <td>{{$e->descripcion}}</td>
                        <td>{{$e->fecha}}</td>
                        <td><img src="../../public/blog/imagenes/{{$e->imagen}}" width="50"></td>
                        <td><button type="button" class="btn btn-primary"><a href="{{route('entradas.edit', $e->id)}}" style="color: white; text-decoration:none;">Editar</a></button>
                        <button type="button" class="btn btn-primary"><a href="{{route('entradas.destroy', $e->id)}}" 
                        onclick="return confirm('Está a punto de eliminar la entrada: {{$e->titulo}}, ¿está seguro?')" style="color: white; text-decoration:none;">Eliminar</a></button>
                        <button type="button" class="btn btn-primary"><a href="{{route('entradas.show', $e->id)}}" style="color: white; text-decoration:none;">Detalle</a></button></td>
                        
                    </tr>
                @endforeach
                 
                </table>
                    {{$entradas->links()}}    
            </div>
        </div>
      

    </div>
   

    @endsection