@extends('vwmaster')

@section('cuerpo')
  <script src="/js/javas1.js"></script>
  <h3> Agregar Federacion</h3>
  <script src="/js/javas1.js"></script>
  <form action="/insertfede" method="post">
    {{ csrf_field() }}

    <br>
  </form>
  <a href="{{ url('/principal')}}">Pagina Principal</a>
@endsection
