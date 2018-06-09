@extends('vwmaster')
@section('cuerpo')
  <div id="estilo1">
    <form action="{{ url('/recuperaclave') }}" method="post">
      {{ csrf_field() }}
      Email:
      <input type="text" name="email">
      <input type="submit" value="Enviar">
      <input type="reset" value="Limpiar">
    </form>
    <br>
    <a href="{{url('/')}}"> Inicio... </a>
  </div>
@endsection
