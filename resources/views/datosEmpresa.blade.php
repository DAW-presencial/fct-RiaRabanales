@extends('layouts.layout')

@section('contenido')
<div class="row d-flex justify-content-center">
    <!-- Info: https://www.studentstutorial.com/laravel/insert-data-laravel -->
    <h3 class="text-center mt-20">Ficha de recogida de datos</h3>
    <div class="col-6">
        <form method="post" action="/empresaSubmit">
            @csrf
            <div class="form-group">
                <label for="empresaNombre">Nombre de la empresa</label>
                <input type="text" class="form-control" id="empresaNombre" name="empresaNombre" required/>
            </div>
            <div class="form-group">
                <label for="empresaCif">CIF</label>
                <input type="text" class="form-control" id="empresaCif" name="empresaCif" required/>
            </div>
            <div class="form-group">
                <label for="empresaDireccion">Dirección</label>
                <input type="text"id="empresaDireccion" name="empresaDireccion">
            </div>
            <div class="row">
                <div class="col-8 form-group">
                    <label for="empresaPoblacion">Población</label>
                    <input type="text" id="empresaPoblacion" name="empresaPoblacion" placeholder="07001"/>
                </div>
                <div class="col-4 form-group">
                    <label for="empresaCP">CP</label>
                    <input type="text" id="empresaCP" name="empresaCP" placeholder="07001"/>
                </div>
            </div>
            <div class="form-group">
                <label for="empresaMail">E-mail</label>
                <input type="mail" id="empresaMail" name="empresaMail">
            </div>
            <div class="row">
                <div class="col-6 form-group">
                    <label for="empresaTel1">Teléfono 1</label>
                    <input type="text" id="empresaTel1" name="empresaTel1" />
                </div>
                <div class="col-6 form-group">
                    <label for="empresaTel2">Teléfono 2</label>
                    <input type="text" id="empresaTel2" name="empresaTel2"  />
                </div>
            </div>
            <hr/>
            <div class="form-group">
                <label for="represNombre">Nombre del representante</label>
                <input type="text" id="represNombre" name="represNombre">
            </div>
            <div class="form-group">
                <label for="represNif">NIF del representante</label>
                <input type="text" id="represNif" name="represNif">
            </div>
            <div class="form-group">
                <label for="represMail">E-mail del representante</label>
                <input type="text" id="represMail" name="represMail">
            </div>
            <br>
            <button type="reset" class="btn btn-primary">Borrar</button>
            <button type="submit" class="btn btn-primary">Enviar</button>    
        </form>
    </div>
</div>
@endsection