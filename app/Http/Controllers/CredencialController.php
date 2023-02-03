<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Credencial;


class CredencialController extends Controller
{
    public function getAllCredencial(){

        $credencial = Credencial::all();

        
        return $credencial;
    }
    
    public function getFindPerson($email){

        $findPerson = Credencial::where('email', $email)
        ->get(['idcredencialpersona','nombre_primero','nombre_segundo','appaterno','apmaterno','cargo','direccion','telefono','email','ubicacion','sitio_web','imagen_foto'])
        ->firstOrFail();

                    
        return $findPerson;

    }
}
