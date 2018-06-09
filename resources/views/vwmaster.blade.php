<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Federacion Venezolana de Rugby</title>
    <link rel="stylesheet" href="{{ url('/css/estilos1.css') }} ">
  </head>
  <body>
    <p id="user"><?php echo \Session::get('usuario'); ?></p>
    <h1 id="titulo">Rugby Venezuela FVR</h1>
    <div>
      @yield('cuerpo')
    </div>
  </body>
</html>
