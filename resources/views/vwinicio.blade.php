@extends('vwmaster')
@section('cuerpo')
    <div id="estilo1">
      <script src="{{ url('/js/javas1.js') }}"></script>
      <form action="{{ url('/accesositio') }}" method="post">
      {{ csrf_field() }}
      Usuario:
      <input type="text" class="enfocable" name="usuario" id="usuario" autofocus><br>
      <br>
      Clave:
      <input type="password" name="clave" id="clave"><br>
      <br>
      <input type="submit" value="Enviar">
      <input type="reset" onclick="enfoca()" value="Limpiar">
      </form>
      <nav>
        |<a href="{{ url('/insertausuario') }}"> Auto Registro</a> |
        <a href="{{ url('/recuperarclavev') }}"> Recuperar Clave</a> |
      </nav>
    </div>
  @endsection
