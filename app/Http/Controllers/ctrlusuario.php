<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ctrlusuario extends Controller
{
  public function auditor($fusuario,$ftabla,$faccion){
    \DB::insert('insert into intauditor (usuario,tabla,accion) '.
    'values (?,?,?)',[$fusuario,$ftabla,$faccion]);
  }

  public function insertarusuario(Request $reg)
  {
    $cedula = $reg -> input("cedula");
    $nombre= $reg -> input("nombre");
    $usuario= $reg -> input("usuario");
    $clave= $reg -> input("clave");
    $email= $reg -> input("email");
    $nivel=$reg -> input("nivelu");
    /*$miembro=$reg -> input("miembro");*/
    if(\Session::has('usuario')){
      $miembroaud=\Session::get('usuario');
    }else {
      $miembroaud=$usuario;
    }
    if(!empty($reg -> input("miembro"))){
      \DB::insert('insert into miembro (identifica) values (?)',[$cedula]);
      self::auditor($miembroaud,"miembro","inserto a ".$usuario );
    }
    \DB::insert('insert into intusuario (cedula,nombre,usuario,clave,nivel,email) '.
    'values (?,?,?,?,?,?)',[$cedula,$nombre,$usuario,$clave,$nivel,$email]);
    self::auditor($miembroaud,"intusuario","inserto a ".$usuario );
    return view('vwexitoso');
  }
  public function recuperarclave()
  {
    return view('vwpasotest');
  }
}
