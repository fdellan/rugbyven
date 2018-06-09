@extends('vwmaster')

@section('cuerpo')
  <div id="estilo1">
    <h3> Operacion Exitosa</h3>
    <?php
      if (Session::has('usuario')){
    ?>
        <a href="{{ url('/principal') }}">Volver...</a>
    <?php
      }else{
    ?>
        <a href="{{ url('/') }}">Volver...</a>
    <?php
      }
    ?>

  </div>
@endsection
