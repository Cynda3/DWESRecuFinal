<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts.head')
	<title>@yield('title')</title>
</head>
<body>

  <div class="flex-center position-ref full-height">
      <div class="content">
          <div class="title m-b-md">
              <a href="/">Examen</a>
          </div>

          <div class="links">
						<a href="/seleccionarVuelo">1. Vuelos</a>
						<a href="/formulario">2. Nuevo Pasajero</a>
						<a href="">3. Asignar avion</a>
						<a href="/usuarios">4. API Github</a>
						<!--
						<a href="{route('reserva',1)}">Reserva</a> -->
          </div>
          <hr><br><br>
					<div class="op">
          	@yield('content')
					</div>
      </div>
  </div>

	<footer class="footer">
		@include('layouts.footer')
	</footer>

</body>
</html>
