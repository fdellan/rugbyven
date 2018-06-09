@extends('vwmaster')

@section('cuerpo')
  <script src="{{ url('/js/javas1.js') }}"></script>
  <form action="{{ url('/insertausuario') }}" method="post">
    {{ csrf_field() }}
    Cedula:
    <input class="enfocable" type="text" name="cedula" autofocus><br>
    <br>
    Nombre:
    <input type="text" name="nombre"><br>
    <br>
    Usuario:
    <input type="text" name="usuario"><br>
    <br>
    Clave:
    <input type="password" name="clave"><br>
    <br>
    Email:
    <input type="text" name="email"><br>
    <br>
    <?php
      if (Session::has('usuario')){
    ?>
        <input type="radio" name="nivelu" value="1">Super Usuario |
        <input type="radio" name="nivelu" value="2">Administrador Federativo |
        <input type="radio" name="nivelu" value="3">Administrador Asociativo |
        <input type="radio" name="nivelu" value="4">Administrador Clubes |
        <input type="radio" name="nivelu" value="5">Usuario Miembro |<br><br>
        <input type="checkbox" name="miembro" value="ambos">Registrarme como Miembro <br><br>
    <?php
      }else{
    ?>
        <input type="radio" name="nivelu" value="5" checked readonly>Usuario Miembro<br><br>
        <input type="checkbox" name="miembro" value="ambos" checked >Registrarme como Miembro <br><br>
    <?php
      }
    ?>
    <input type="submit" name="enviar1" value="Enviar">
    <input type="reset" value="Limpiar" onclick="enfoca()">
  </form>
  <?php
    if (Session::has('usuario')){
  ?>
      <a href="{{ url('/principal') }}">Pagina Principal...</a>
  <?php
    }else{
  ?>
      <a href="{{ url('/') }}">Inicio...</a>
  <?php
    }
  ?>
@endsection
