@extends('layout.head')
@section('content')

    <!---insertar entrada-->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xs-3 col-md-6 col-lg-3">
                <h2 style="font-size: 30px;">Nueva Entrada</h2>
            </div>
        </div>
        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'descripcion' );
    </script>
        <div class="row justify-content-center">
            <div class="col-xs-3 col-md-6 col-lg-6">
                <form action="{{route('entradas.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <label for="titulo">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" value="{{old('titulo')}}" />
                        @if($errors->any())
                    <br>
                    @error('titulo')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror 
                @endif
                    </div></br>

                    <div class="row">
                        <label for="imagen">Imagen</label>
                        <input type="file" class="form-control-file" id="imagen" name="imagen" />
                        @if($errors->any())
                    <br>
                    @error('imagen')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror 
                @endif
                    </div></br>
                    <div class="row">
                        <label for="fecha">fecha</label>
                        <input type="date" class="form-control" id="fecha" name="fecha" value="{{old('fecha')}}" />
                    </div></br>
                    <div class="row">
                        <label for="descripcion">Descripción</label>
                        <textarea class= "ckeditor" id="descripcion" name="descripcion">{{old('descripcion')}}</textarea>

                    </div></br>
                    
                  
                    <div class="btn-group" role="group" aria-label="Basic example">

                        <button type="submit" class="btn btn-primary" name="boton">Enviar</button>
                        <button type="reset" class="btn btn-secondary" name="limpiar">Limpiar</button>

                    </div>

                </form>
            </div>
        </div>



    </div>

    @endsection