@extends('vwmaster')

@section('cuerpo')
<h3> Agregar Clubes a las Asociaciones</h3>
<script src="/js/javas1.js"></script>
<form action="/insertclub" method="post">
  {{ csrf_field() }}

  <br>
</form>
<a href="{{ url('/principal')}}">Pagina Principal</a>
@endsection
