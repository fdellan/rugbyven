@extends('vwmaster')

@section('cuerpo')
<h3> Agregar Asociaciones de Estados</h3>
<script src="/js/javas1.js"></script>
<form action="/insertasoc" method="post">
  {{ csrf_field() }}

  <br>
</form>
<a href="{{ url('/principal')}}">Pagina Principal</a>
@endsection
