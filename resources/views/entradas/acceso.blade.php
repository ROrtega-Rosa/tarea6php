@extends('layout.plantilla')
@section('content')


    <div class="container-fluid">
        <form method="post" action="{{route('inicia-sesion')}}">
            @csrf
            <div class="row justify-content-center">
                <div class="col-xs-3 col-md-3 col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">Usuario/email:
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="email" name="email" >
                    </label>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xs-3 col-md-3 col-lg-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Contraseña:
                        <input type="password" class="form-control" id="exampleFormControlInput1"  name="password">
                    </label>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xs-3 col-md-3 col-lg-3">
            
                    <div>
                        <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
                    </div>
                </div>
            </div>
        </form>

    </div>

@endsection