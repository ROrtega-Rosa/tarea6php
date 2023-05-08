<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xs-3 col-md-6 col-lg-3">
                <h2 style="font-size: 30px;">Historial</h2>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-xs-3 col-md-12 col-lg-12">
                <!--se introducirá la lista de entradas en una tabla-->
                <table class="table table-sniped" >
                <tr>
                    <th>Operacion</th>
                    <th>Fecha</th>
                       
                </tr>
                @foreach ($listaLogs as $e)
                    <tr>
                     
                        <td>{{$e->operacion}}</td>
                        <td>{{$e->created_at}}</td>
                        
                        
                @endforeach
                 
                </table>
                       
            </div>
        </div>
      

    </div>
</body>
</html>