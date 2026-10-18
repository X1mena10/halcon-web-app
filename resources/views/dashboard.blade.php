<h1>Panel de Control (Dashboard)</h1>
<p>Bienvenido, estás autenticado correctamente.</p>
<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>