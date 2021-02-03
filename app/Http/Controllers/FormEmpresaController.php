<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;

class FormEmpresaController extends Controller
{
    //Aquí creo y cargo el formulario:
    public function crearFormEmpresa(Request $request) {
        return view('datosEmpresa');
    }

    public function guardarEmpresa(Request $request) {
        $data = $request->all();        //Con input() me va igual de bien que con all()
        try {
            $empresa = new Empresa;
            $empresa->nombre = $data['empresaNombre'];
            $empresa->cif = $data['empresaCif'];
            $empresa->mail = $data['empresaMail'];
            $empresa->save();
            return redirect('/empresa')->with('status',"Empresa guardada");
        } catch(Exception $e) {
            return redirect('/empresa')->with('failed',"Error al guardar la empresa");
        }

    }
}
