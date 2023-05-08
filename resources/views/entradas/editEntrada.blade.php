@extends('layout.head')
@section('content')

    <!--editar entrada-->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xs-3 col-md-6 col-lg-3">
                <h2 style="font-size: 30px;">Editar Entrada</h2>
            </div>
        </div>
        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'descripcion' );
    </script>
        <div class="row justify-content-center">
            <div class="col-xs-3 col-md-6 col-lg-6">
                <form action="{{route('entradas.update', $entrada)}}" method="post" enctype="multipart/form-data">
                @csrf
            
                @method('put')
                <div class="row">
                        <label for="titulo">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" value="{{old('titulo', $entrada->titulo)}}" />
                        @if($errors->any())
                    <br>
                    @error('titulo')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror 
                @endif
                    </div></br>

                    <div class="row">
                    <label for="imagen">Imagen</label>
                    <input type="file" class="form-control-file" id="imagen" name="imagen"/>
                    <td><img src="../../blog/imagenes/{{$entrada->imagen}}" width="50"></td>
                
                        @if($errors->any())
                         <br>
                         @error('imagen')
                        <div class="alert alert-danger">{{$message}}</div>
                         @enderror 
                        @endif
                    </div></br>
                    <div class="row">
                        <label for="fecha">fecha</label>
                        <input type="date" class="form-control" id="fecha" name="fecha" value="{{old('fecha',$entrada->fecha)}}" />
                    </div></br>
                    <div class="row">
                        <label for="descripcion">Descripción</label>
                        <textarea class= "ckeditor" id="descripcion" name="descripcion">{{old('descripcion', $entrada->descripcion)}}</textarea>

                    </div></br>
                    
                  
                    <div class="btn-group" role="group" aria-label="Basic example">

                        <button type="submit" class="btn btn-primary" name="boton">Actualizar</button>
                        <button type="reset" class="btn btn-secondary" name="limpiar">Limpiar</button>

                    </div>

                </form>
            </div>
        </div>



    </div>
    @endsection