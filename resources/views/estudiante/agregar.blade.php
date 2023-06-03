@extends('templates.master')
@section('titulo','agregar')


@section('body')
<div class="container d-flex align-items-center justify-content-center">    
        <div class="row-12">
            <div class="col-12 px-6 py-5 ">
                <div class="card" >
                    <div class="card-body" style="background-color:#5db4b9 ;">
                        <form>
                            <div class="title">
                                <h1>Ingresar una propuesta</h1>
                            </div>
                            <div class="form-group py-3">
                            <label class="form-label" for="">Rut del estudiante </label>
                            <input type="text" class="form-control" id="">
                            </div>
                            
                            <div class="form-group py-3">
                            <label class="form-label " for="Propuesta">Propuesta</label>
                            <textarea class="form-control" id="Propuesta" rows="5"></textarea>
                            </div>
                        </form>
                        <div class="text-end py-3">                        
                            <a href="#" class="btn btn-success ">ENVIAR PROPUESTA </a>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection

