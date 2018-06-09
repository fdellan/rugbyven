
@extends('vwmaster')

@section('cuerpo')
  <div>
    <h3> Menu de Opciones</h3>

    <?php if (\Session::get('beneficio')=='1') { ?>
        <nav>
          |<a href="{{ url('/insertafede') }}"> Registro de Federacion</a> |
          <a href="{{ url('/insertaasoc') }}">Registro de Asociacion</a> |
          <a href="{{ url('/insertaclub') }}">Registro de Club</a> |
          <a href="{{ url('/insertamiem') }}">Registro Miembros de un Club</a> |
          <a href="{{ url('/insertaaler') }}">Alergias</a> |
          <a href="{{ url('/insertaposi') }}">Posiciones</a> |
          <a href="{{ url('/insertalesi') }}">Lesiones</a> |
        </nav>
        <p id="user"><a href="{{ url('/insertausuario') }}">Ingresar Usuario Nuevo</a></p> <br>
    <?php } ?>
    <?php if (\Session::get('beneficio')=='2') { ?>
        <nav>
          |<a href="{{ url('/insertafede') }}"> Registro de Federacion</a> |
          <a href="{{ url('/insertaasoc') }}">Registro de Asociacion</a> |
          <a href="{{ url('/insertaclub') }}">Registro de Club</a> |
          <a href="{{ url('/insertamiem') }}">Registro Miembros de un Club</a> |
          <a href="{{ url('/insertaaler') }}">Alergias</a> |
          <a href="{{ url('/insertaposi') }}">Posiciones</a> |
          <a href="{{ url('/insertalesi') }}">Lesiones</a> |
        </nav>
    <?php } ?>
    <?php if (\Session::get('beneficio')=='3') { ?>
        <nav>
          <a href="{{ url('/insertamiem') }}">Registro Miembros de un Club</a> |
          <a href="{{ url('/insertaaler') }}">Alergias</a> |
          <a href="{{ url('/insertaposi') }}">Posiciones</a> |
          <a href="{{ url('/insertalesi') }}">Lesiones</a> |
        </nav>
    <?php } ?>
    <a href="{{ url('/salidasitio') }}">Salir</a><br>
  </div>
@endsection
