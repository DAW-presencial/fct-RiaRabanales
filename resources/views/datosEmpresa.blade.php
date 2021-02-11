@extends('layouts.layout')
<!-- Info: https://www.studentstutorial.com/laravel/insert-data-laravel -->
<!--  https://stackoverflow.com/questions/47879154/laravel-checkbox-state-after-failed-validation -->

@section('contenido')
<div class="row d-flex justify-content-center">
    <!-- <h2 class="text-center mt-20">Ficha de recogida de datos</h2> -->
    <h2 class="text-center mt-20">{{__('formEmpresa_titulo')}}</h2>
    <div class="col-10 col-md-8">
        <!-- Aquí mi array de errores -->
        <p class="text-warning">
            @if ($errors->any())        <!-- ojo: en formato laravel no lleva {} -->
                <ul class="list-group list-unstyled text-warning">Debe corregir los siguientes problemas:
                    @foreach ($errors->all() as $error)
                        <li class="border-none px-3">&#8594; <span class="text-muted">{{$error}}</span></li>
                    @endforeach
                </ul>
                <hr/>
            @endif
        </p>

        <!-- Aquí el formulario -->
        <form method="post" action="/empresaSubmit">
            @csrf
            <div class="row">
                <div class="col-8 form-group">
                    <label for="empresaNombre">Nombre de la <strong>empresa</strong></label>
                    <input type="text" class="form-control" id="empresaNombre" name="empresaNombre" value="{{old('empresaNombre')}}" required />
                    <p class="text-warning small">{{$errors->first('empresaNombre')}}</p>
                </div>
                <div class="col-4 form-group">
                    <label for="empresaCif">CIF</label>
                    <input type="text" class="form-control" id="empresaCif" name="empresaCif" value="{{old('empresaCif')}}" required />
                    <p class="text-warning small">{{$errors->first('empresaCif')}}
                </div>
            </div>
            <div class="form-group">
                <label for="empresaDireccion">Dirección</label>
                <input type="text" class="form-control" id="empresaDireccion" name="empresaDireccion" value="{{old('empresaDireccion')}}" />
            </div>
            <div class="row">
                <div class="col-4 form-group">
                    <label for="empresaCP">CP</label>
                    <input type="text" class="form-control" id="empresaCP" name="empresaCP" value="{{old('empresaCP')}}" />
                </div>
                <div class="col-8 form-group">
                    <label for="empresaPoblacion">Población</label>
                    <input type="text" class="form-control" id="empresaPoblacion" name="empresaPoblacion" value="{{old('empresaPoblacion')}}" />
                </div>    
            </div>
            <div class="form-group">
                <label for="empresaMail">E-mail</label>
                <input type="mail" class="form-control" id="empresaMail" name="empresaMail" value="{{old('empresaMail')}}" />
                <p class="text-warning small">{{$errors->first('empresaMail')}}
            </div>
            <div class="row">
                <div class="col-4 form-group">
                    <label for="empresaTel1">Teléfono 1</label>
                    <input type="text" class="form-control" id="empresaTel1" name="empresaTel1" value="{{old('empresaTel1')}}" />
                </div>
                <div class="col-4 form-group">
                    <label for="empresaTel2">Teléfono 2</label>
                    <input type="text" class="form-control" id="empresaTel2" name="empresaTel2" value="{{old('empresaTel2')}}" />
                </div>
                <div class="col-4 form-group">
                    <label for="empresaFax">Fax</label>
                    <input type="text" class="form-control" id="empresaFax" name="empresaFax" value="{{old('empresaFax')}}" />
                </div>
            </div>
            <div class="form-group d-flex justify-content-between py-2">
                <label>Sector de actividad</label>
                <div class="form-check form-check-inline">
                    <!-- Así mantengo la permanencia de los radios -->
                    <input class="form-check-input" type="radio" name="sector" id="primario" value="primario"
                        {{ (old('sector') == "primario") ? "checked" : "" }}
                    >
                    <label class="form-check-label" for="primario">primario</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sector" id="secundario" value="secundario"
                        {{ (old('sector') == "secundario") ? "checked" : "" }}
                    >
                    <label class="form-check-label" for="secundario">secundario</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sector" id="terciario" value="terciario"
                        {{ (old('sector') == "terciario") ? "checked" : "" }}
                    >
                    <label class="form-check-label" for="terciario">terciario</label>
                </div>
            </div>
            <div class="form-group">
                <label for="empresaActividad">Actividad principal</label>
                <input type="text" class="form-control" id="empresaActividad" name="empresaActividad" value="{{old('empresaActividad')}}" />
            </div>
            <div class="form-group pt-2">
                <label>Titularidad</label>
                <div class="form-check form-check-inline px-5">
                    <input class="form-check-input" type="radio" name="titularidad" id="publica" value="publica"
                        {{ (old('titularidad') == "publica") ? "checked" : "" }}
                    >
                    <label class="form-check-label" for="publica">pública</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="titularidad" id="privada" value="privada"
                        {{ (old('titularidad') == "privada") ? "checked" : "" }}
                    >
                    <label class="form-check-label" for="privada">privada</label>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-8 form-group">
                    <label for="represNombre">Nombre del representante de empresa</label>
                    <input type="text" class="form-control" id="represNombre" name="represNombre" value="{{old('represNombre')}}" />
                </div>
                <div class="col-4 form-group">
                <label for="represMail">E-mail</label>
                <input type="text" class="form-control" id="represMail" name="represMail" value="{{old('represMail')}}" />
            </div>
            <hr class="ml-2 mt-3"/>
            <div class="form-group">
                <label for="centroNombre">Nombre del <strong>centro de trabajo</strong></label>
                <input type="text" class="form-control" id="centroNombre" name="centroNombre" value="{{old('centroNombre')}}" />
            </div>
            <div class="col-8 form-group">
                <label for="centroDireccion">Dirección</label>
                <input type="text" class="form-control" id="centroDireccion" name="centroDireccion" value="{{old('centroDireccion')}}" />
            </div>
            <div class="col-4 form-group">
                <label for="centroPoblacion">Población</label>
                <input type="text" class="form-control" id="centroPoblacion" name="centroPoblacion" value="{{old('centroPoblacion')}}" />
            </div>
            <hr class="ml-2 mt-3"/>
            <div class="col-8 form-group">
                <label for="tutorNombre">Nombre del <strong>tutor de empresa</strong></label>
                <input type="text" class="form-control" id="tutorNombre" name="tutorNombre" value="{{old('tutorNombre')}}" />
            </div>
            <div class="col-4 form-group">
                <label for="tutorNif">NIF o NIE</label>
                <input type="text" class="form-control" id="tutorNif" name="tutorNif" value="{{old('tutorNif')}}" />
            </div>
            <div class="form-group col-12">
                <label for="tutorMail">E-mail del tutor</label>
                <input type="text" class="form-control" id="tutorMail" name="tutorMail" value="{{old('tutorMail')}}" />
            </div>
            <div class="form-group col-12">
                <label for="lugarTrabajo"><strong>Lugar de trabajo</strong></label>
                <input type="text" class="form-control" id="lugarTrabajo" name="lugarTrabajo" value="{{old('lugarTrabajo')}}" />
            </div>
            <div class="form-group col-12">
                <label for="comentarios">Comentarios</label>
                <textarea class="form-control" id="comentarios" name="comentarios" rows="3">{{old('comentarios')}}</textarea>
            </div>
            <br>
            <!-- TODO lugar y fecha de firma -->
            <div class="d-flex justify-content-between p-3">
                <button type="reset" class="btn btn-dark">Borrar</button>
                <button type="submit" class="btn btn-dark">Enviar</button>    
            </div>
        </form>
    </div>
</div>
@endsection