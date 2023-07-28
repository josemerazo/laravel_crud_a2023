@php
    $saludo = 'Nuevas';
@endphp
@extends('template')
@section('content')
    <div class="container">
        <h1>Creación de persona {{ $saludo }}</h1>
        <form action="{{ url('personas') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input name="nombre" type="text" class="form-control"
                    value="{{ isset($persona->nombre) ? $persona->nombre : '' }}" id="nombre"
                    placeholder="Ejemplo: James Jordy">

            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input name="apellido" type="text" class="form-control" id="apellido"
                    value="{{ isset($persona->apellido) ? $persona->apellido : '' }}" placeholder="Ejemplo: Ruiz Panezo">
            </div>
            <div class="form-group">
                <label for="edad">Edad</label>
                <input name="edad" type="number" step="1" min="0" class="form-control" id="edad"
                value="{{ isset($persona->edad) ? $persona->edad : '' }}" placeholder="Ejemplo: 12">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
@endsection
