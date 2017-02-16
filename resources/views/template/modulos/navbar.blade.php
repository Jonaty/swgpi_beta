<header>

@php
	function activeMenu($url)
	{
		return request()->is($url) ? 'enlace' : '';
	}
@endphp
	<nav>
		<ul class="nav nav-pills">
	
			{{-- <li><a class="{{ activeMenu('/') }}" href="{{ route('home') }}">Inicio</a></li> --}}
			
			@if (auth()->check())

		
			<a type="button" href=""><span class="glyphicon glyphicon-home
				"></span>Home</a>

            @if (auth()->user()->hasRoles('admin'))
            
            <li><a class="{{ activeMenu('administradores') }}" href="{{ route('administradores.index') }}">Admin</a></li>

            @elseif(auth()->user()->hasRoles('user'))

            <li><a class="{{ activeMenu('usuarios') }}" href="{{ route('usuarios.index') }}">Usuario</a></li>

            @elseif(auth()->user()->hasRoles('moderador'))

            <li><a class="{{ activeMenu('moderadores') }}" href="{{ route('moderadores.index') }}">Moderador</a></li>
            
            @endif

			<li class="font_size"><a href="/salir">Cerrar Sesión de {{ auth()->user()->nombre }}</a></li>


			@endif

			{{-- <li class="font_size"><a class="{{ activeMenu('login') }}" href="/login">Login</a></li> --}}

			@if (auth()->guest())
				<li><a class="{{ activeMenu('login') }}" href="{{ route('login') }}">Login</a></li>
			@endif
		</ul>
	</nav>
</header>