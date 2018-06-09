@extends('vwmaster')

@section('cuerpo')
  <script src="/js/javas1.js"></script>
  <h3> Agregar Posiciones de los Miembros de un Club</h3>
  <script src="/js/javas1.js"></script>
  <form action="/insertposi" method="post">
    {{ csrf_field() }}
    Cedula:
    <input class="enfocable" type="text" name="cedula" autofocus><br>
    <br>
  </form>
  <a href="{{ url('/principal')}}">Pagina Principal</a>
@endsection
