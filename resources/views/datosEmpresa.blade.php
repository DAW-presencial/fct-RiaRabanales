@extends('layouts.layout')
<!-- Info: https://www.studentstutorial.com/laravel/insert-data-laravel -->
<!-- falta: titularidad pca/pvda, nombre coordinador fct, nif -->

@section('contenido')
<div class="row d-flex justify-content-center">
    <h3 class="text-center mt-20">Ficha de recogida de datos</h3>
    <div class="col-6">
        <form method="post" action="/empresaSubmit">
            @csrf
            <div class="row">
                <div class="col-8 form-group">
                    <label for="empresaNombre">Nombre de la empresa</label>
                    <input type="text" class="form-control" id="empresaNombre" name="empresaNombre" required />
                </div>
                <div class="col-4 form-group">
                    <label for="empresaNombre">CIF</label>
                    <input type="text" class="form-control" id="empresaNombre" name="empresaNombre" required />
                </div>
            </div>
            <div class="form-group">
                <label for="empresaDireccion">Dirección</label>
                <input type="text" class="form-control" id="empresaDireccion" name="empresaDireccion"  />
            </div>
            <div class="row">
                <div class="col-4 form-group">
                    <label for="empresaCP">CP</label>
                    <input type="text" class="form-control" id="empresaCP" name="empresaCP" />
                </div>
                <div class="col-8 form-group">
                    <label for="empresaPoblacion">Población</label>
                    <input type="text" class="form-control" id="empresaPoblacion" name="empresaPoblacion" />
                </div>
                
            </div>
            <div class="form-group">
                <label for="empresaMail">E-mail</label>
                <input type="mail" class="form-control" id="empresaMail" name="empresaMail" />
            </div>
            <div class="row">
                <div class="col-4 form-group">
                    <label for="empresaTel1">Teléfono 1</label>
                    <input type="text" class="form-control" id="empresaTel1" name="empresaTel1" />
                </div>
                <div class="col-4 form-group">
                    <label for="empresaTel2">Teléfono 2</label>
                    <input type="text" class="form-control" id="empresaTel2" name="empresaTel2"  />
                </div>
                <div class="col-4 form-group">
                    <label for="empresaFax">Fax</label>
                    <input type="text" class="form-control" id="empresaFax" name="empresaFax" />
                </div>
            </div>
            <div class="form-group d-flex justify-content-between py-2">
                <label>Sector de actividad</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sector" id="primario" value="primario">
                    <label class="form-check-label" for="primario">primario</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sector" id="secundario" value="secundario">
                    <label class="form-check-label" for="secundario">secundario</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sector" id="terciario" value="terciario">
                    <label class="form-check-label" for="terciario">terciario</label>
                </div>
            </div>
            <div class="form-group">
                <label for="empresaActividad">Actividad principal</label>
                <input type="text" class="form-control" id="empresaActividad" name="empresaActividad" />
            </div>
            <div class="form-group pt-2">
                <label>Titularidad</label>
                <div class="form-check form-check-inline px-5">
                    <input class="form-check-input" type="radio" name="titularidad" id="publica" value="publica">
                    <label class="form-check-label" for="publica">pública</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="titularidad" id="privada" value="privada">
                    <label class="form-check-label" for="privada">privada</label>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-8 form-group">
                    <label for="represNombre">Nombre del representante de empresa</label>
                    <input type="text" class="form-control" id="represNombre" name="represNombre" />
                </div>
                <div class="col-4 form-group">
                    <label for="represNif">NIF o NIE</label>
                    <input type="text" class="form-control" id="represNif" name="represNif" />
                </div>
            </div>
            <div class="form-group">
                <label for="represMail">E-mail del representante</label>
                <input type="text" class="form-control" id="represMail" name="represMail" />
            </div>
            <hr/>
            <div class="form-group">
                <label for="comentarios">Comentarios</label>
                <textarea class="form-control" id="comentarios" name="comentarios" rows="3"></textarea>
            </div>
            <br>
            <div class="d-flex justify-content-between px-3">
                <button type="reset" class="btn btn-dark">Borrar</button>
                <button type="submit" class="btn btn-dark">Enviar</button>    
            </div>
        </form>
    </div>
</div>
@endsection