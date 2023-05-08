@extends('layout.plantilla')
@section('content')


<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-xs-3 col-md-6 col-lg-4">
        <h1 style="font-size: 45px;">Bienvenidos al Blog</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-xs-3 col-md-6 col-lg-4">
        <form class="form" type="get" action="{{route('entradas.buscar')}}">
        <input class="form-control my-2 my-sm-0" name="buscar" type="search" placeholder="Buscar una entrada"></br>
        <button class="btn btn-primary" type="submit">Buscar</button>
    </form>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-xs-3 col-md-6 col-lg-5">
        <div class="row justify-content-center">
            <img  src="{{asset('img/blog.png')}}" style="padding: 30px;" width="500" height="300">
        </div>
        </div>
    </div>
</div>

    @endsection