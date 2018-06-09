<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ctrlsitio extends Controller
{
  public function accesarsitio(Request $reg)
  {
    $usuario = $reg -> input("usuario");
    $clave = $reg -> input("clave");
    $usuarios = \DB::select('select * from intusuario where usuario = ? and clave = ?', [$usuario,$clave]);
    if (!empty($usuarios)) {
      \Session::put('usuario',$usuarios[0]->usuario);
      \Session::put('beneficio',$usuarios[0]->nivel);
      return view('vwprincipal');
    }else {
      return view('vwfallido');
    }
  }
  public function salirsitio()
  {
    \Session::forget('usuario');
    return view('vwsalio');
  }
/*  public function mandarclave(Request $reg){
    $correo = $reg -> input("email");
    \Mail::send('vwmailclave', ['correo'=> $correo], function ($dest) use ($correo) {
            $dest->from('eliodellan1984@gmail.com', 'RugbyVenezuela');

            $dest->to($correo)->subject('Recuperacion de Clave');
        });
  }*/
}
