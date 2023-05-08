<!DOCTYPE html>
<html lang="es">
<head>
     <!---zona head del html. Aqui se intruduciran los enlaces de bootstrap o css-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
        <div class="row justify-content-center" id="header">
            <div class="col-xs-3 col-md-6 col-lg-6">
                <h1 id="titu">Mi pequeño blog</h1>
            </div>

            <div class="col-xs-3 col-md-6 col-lg-6">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                           
                            <li class="nav-item">
                                    <a class="nav-link" href="http://localhost/TareaPHP6/public/inicio">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('entradas.index')}}">Listar Entradas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('entradas.create')}}">Crear Entrada</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('entradas.listarLogs')}}">Historial</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('logout')}}">Cerrar Sesion</a>
                                </li>
                            </ul>
                            
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    @yield('content')
</body>
<footer>
<div class="pie">
    <div>
        <p class="footer"> Mi blog Rosa</p>
    </div>
</div>
</footer>
</html>