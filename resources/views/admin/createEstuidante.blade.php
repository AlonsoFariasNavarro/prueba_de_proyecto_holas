@extends('templates.master')

@section('hojas-estilo')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
@endsection

@section('contenido-principal')
    <div class="container-fluid min-vh-100" style="background-color:#051f31;">
        <div class="row">
            <div class="col-3"></div>
            <div class="col d-flex flex-column py-5">
                <div class="card">
                    <div class="card-header d-flex justify-content-center">
                        <p>Agregar Estudiante</p>
                    </div>
                    <div class="card-body">
                        <form action="{{route('estudiante.store')}}" method="POST">
                            @csrf
                            <div>
                                <label for="rut">RUT</label>
                                <input for="rut" id="rut" name="rut" class="form-control" type="text" >
                            </div>
                            <div>
                                <label for="nombre">Nombre</label>
                                <input for="nombre" id="nombre" name="nombre" class="form-control" type="text" >
                            </div>
                            <div>
                                <label for="apellido">Apellido</label>
                                <input for="apellido" id="apellido" name="apellido" class="form-control" type="text">
                            </div>
                            <div>
                                <label for="email">Email</label>
                                <input for="email" id="email" name="email" class="form-control" type="text">
                            </div>
                            <div class="d-flex justify-content-end pt-4">
                                <button class="btn btn-warning px-2" type="reset">Cancelar</button>
                                <button class="btn btn-success" type="submit">Confirmar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
@endsection