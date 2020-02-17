@extends('layout.plantillaAdmin')



@section('principal')

<div class="container">
    <div class="row">
    <h1>Agrega un nuevo Destino</h1>
        <div class="col-12">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            
            </ul>
        </div>
    <div class="col-12">   
    <form action="/destinoAlta" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Nombre Destino</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre Destino" name="nombre"
        value="{{old("title")}}">
            <span id="archivoHelp" class="form-text text-danger"></span>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail2">Precio(No colocar signos solo numero)</label>
            <input type="number" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="$precio" name="precio" value="{{old("precio")}}">
            <span id="archivoHelp" class="form-text text-danger"></span>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail3">Promocion(0-100%)"Si no tiene promo colocar 0"</label>
            <input type="number" class="form-control" id="exampleInputEmail3" aria-describedby="emailHelp" placeholder="%promocion" name="promocion"
            value="{{old("promocion")}}">
            <span id="archivoHelp" class="form-text text-danger"></span>
        </div>
        
        <div class="form-group">
        <label for="exampleInputEmail5">Provincia</label>
            <select class="form-control" name="provincia">
                <option value="">Elegir provincia</option>
                <?php foreach($provincias as $provincia): ?>
                <option value="{{$provincia->id_provincia}}">
                 {{$provincia->nombre_provincia}} </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFileLang" lang="es" name="imagenPerfil">
                <label class="custom-file-label" for="customFileLang">Seleccionar Foto de Perfil</label>
                <span id="archivoHelp" class="form-text text-danger"></span>
        </div>

    <div class="mt-3">
        <button type="submit" class="btn btn-primary">Agregar</button>
    </div>
        
    </form>
</div>   
    
    
    
    </div>


</div>
    
@endsection