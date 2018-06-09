<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ctrlusuario extends Controller
{

  //inserta alergias
  public function insertaraler(Request $reg)
  {
    self::auditor(\Session::get('usuario'),"alergia","inserto ");
    return view('vwexitoso');
  }

  //inserta asociaciones
  public function insertarsoc(Request $reg)
  {
    self::auditor(\Session::get('usuario'),"asociacion","inserto ");
    return view('vwexitoso');
  }

  //inserta clubes
  public function insertarclub(Request $reg)
  {
    self::auditor(\Session::get('usuario'),"equipo","inserto ");
    return view('vwexitoso');
  }

  //inserta federaciones
  public function insertaraler(Request $reg)
  {
    self::auditor(\Session::get('usuario'),"federacion","inserto ");
    return view('vwexitoso');
  }

  //inserta lesiones
  public function insertaraler(Request $reg)
  {
    self::auditor(\Session::get('usuario'),"lesion","inserto ");
    return view('vwexitoso');
  }

  //inserta miembros
  public function insertaraler(Request $reg)
  {
    self::auditor(\Session::get('usuario'),"miembro","inserto ");
    return view('vwexitoso');
  }

  //inserta posiciones
  public function insertaraler(Request $reg)
  {
    self::auditor(\Session::get('usuario'),"posicion","inserto ");
    return view('vwexitoso');
  }
}
