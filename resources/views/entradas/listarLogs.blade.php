@extends('layout.head')
@section('content')


    <!---listado-->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xs-3 col-md-6 col-lg-3">
                <h2 style="font-size: 30px;">Historial</h2>
            </div>
        </div>
        <div class="row justify-content-end">
        <div class="col-xs-3 col-md-3 col-lg-2">
            <button type="button" class="btn btn-secondary"><a href="{{route('entradas.logsPDF')}}" style="color: white; text-decoration:none;">PDF</a></button>
        </div></br>
        <div class="row justify-content-center">
            <div class="col-xs-3 col-md-12 col-lg-12">
                <!--se introducirá la lista de entradas en una tabla-->
                <table class="table table-sniped" >
                <tr>
                    <th>Operacion</th>
                    <th>Fecha</th>
                    <th>Eliminar</th>
                    
                </tr>
                @foreach ($listaLogs as $e)
                    <tr>
                     
                        <td>{{$e->operacion}}</td>
                        <td>{{$e->created_at}}</td>
                        <td><button type="button" class="btn btn-primary"><a href="{{route('entradas.destroyLogs', $e->id)}}" 
                        onclick="return confirm('Está a punto de eliminar la entrada del historial, ¿está seguro?')" style="color: white; text-decoration:none;">Eliminar</a></button>
                        </td>
                    </tr>
                @endforeach
                 
                </table>
                      
            </div>
        </div>
      

    </div>
   

    @endsection