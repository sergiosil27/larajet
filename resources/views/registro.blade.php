@extends('adminlte::page')

@section('title', 'Registro')

@section('content_header')
    <h1>Registro</h1>
@stop

@section('content')

    <form class="row g-3 ">
        <!--<div class="col-auto">
        <label for="documento" class="visually-hidden">Documento</label>
            <input type="text" class="form-control" id="documento" placeholder="Documento">
        </div>-->
        <div class="col-auto">
        <div class="input-group mb-3">
        <input type="text" class="form-control" name="documento" id="documento" placeholder="Documento">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button">a</i></button>
        </div>
        </div>
        </div>
        <div class="col-auto">
        <label for="tipoDocumento" class="visually-hidden">Tipo Documento</label>
            <Select class="form-control" name="tipoDocumento" id="tipoDocumento" placeholder="Genero">
                <option value="" hidden></option>
                <option value="AI">Adulto sin Identificación</option>
                <option value="CC">Cédula de Ciudadanía</option>                
                <option value="CE">Cedula Extranjería</option>
                <option value="MI">Menor sin Identificación</option>
                <option value="PA">Pasaporte</option>
                <option value="RC">Registro Civil</option>
                <option value="TI">Tarjeta Identidad</option>
            </Select>
        </div>
        
        <div class="col-auto">
            <label for="nacimiento" class="visually-hidden">Nacimiento</label>
            <input type="date" class="form-control" name="nacimiento" id="nacimiento" placeholder="Nacimiento">
        </div>
        <div class="col-auto">
            <label for="genero" class="visually-hidden">Genero</label>
            <Select class="form-control" name="genero" id="genero" placeholder="Genero">
                <option value="" hidden></option>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
            </Select>
            
        </div>
        <div class="col-auto">
        <label for="inputPassword2" class="visually-hidden">Nombres</label>
            <input type="text" class="form-control" id="nombres" placeholder="Nombres">
        </div>
        <div class="col-auto">
            <label for="apellidos" class="visually-hidden">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" placeholder="Apellidos">
        </div>
        <div class="col-auto">
            <label for="ubicacion" class="visually-hidden">Ubicacion</label>
            <input type="text" class="form-control" id="ubicacion" placeholder="Ubicacion">
        </div>
        <div class="col-auto">
            <label for="telefono" class="visually-hidden">Telefono</label>
            <input type="text" class="form-control" id="telefono" placeholder="Telefono">
        </div>
        <div class="col-auto">
            <label for="entidad" class="visually-hidden">Entidad</label>
            <input type="text" class="form-control" id="entidad" placeholder="Entidad">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
        </div>
    </form>
    <!--<div>
    <form class="form">
        <input type="text" />
        <input type="email" />
        <input type="password" />
        <button type="submit">Enviar</button>
    </form>
    </div>-->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/forms.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
