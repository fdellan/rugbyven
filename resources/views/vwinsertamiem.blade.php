@extends('vwmaster')

@section('cuerpo')
  <script src="/js/javas1.js"></script>
  <h3> Agregar Miembros de Clubes</h3>
  <script src="/js/javas1.js"></script>
  <form action="/insertmiem" method="post">
    {{ csrf_field() }}
    Cedula:
    <input class="enfocable" type="text" name="cedula" autofocus><br>
    <br>
  </form>
  <a href="{{ url('/principal')}}">Pagina Principal</a>
@endsection
