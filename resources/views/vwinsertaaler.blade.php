@extends('vwmaster')

@section('cuerpo')
  <h3> Agregar Alergias a los Miembros</h3>
  <script src="/js/javas1.js"></script>
  <form action="/insertaler" method="post">
    {{ csrf_field() }}
    Cedula:
    <input class="enfocable" type="text" name="cedula" autofocus><br>
    <br>
  </form>
  <a href="{{ url('/principal')}}">Pagina Principal</a>
@endsection
