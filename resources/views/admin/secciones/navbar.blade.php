<header>
    <div class="menu_bar">
        <a href="#" class="bt-menu"><i class="fa fa-bars"></i> Menu</a>
    </div>
    <nav>
        <ul>
            <li><a href="{{route('/')}}" style="text-shadow: 2px 1px 2px #04B7CC;"> GPOC System </a></li>
            <li><a href="{{route('/')}}"><i class="fa fa-home"></i> Inicio</a></li>
            @guest
            <li>
                <a id="navbarDropdown" href="{{route('name-project')}}">
                    <i class="fa fa-wrench"></i> Insumos <span class="caret"></span>
                </a>
            </li>
            <li>
                <a href="{{ route('login') }}"><i class="fa fa-user"></i> {{ __('Iniciar sesión') }}</a>
            </li>
            @if (Route::has('register'))
            <li>
                <a href="{{ route('register') }}"><i class="fa fa-sign-in-alt"></i> {{ __('Registrarse') }}</a>
            </li>
            @endif
            @else
            @if(Auth::user()->type == 'Administrador')
            <li><a href="{{route('insumos.index')}}"><i class="fa fa-building"></i> Insumos</a></li>
            <li><a href="{{route('usuarios.index')}}"><i class="fa fa-users"></i> Usuarios</a></li>
            <li><a href="{{route('proyectos.index')}}"><i class="fa fa-users"></i> Proyectos</a></li>
            <li><a href="{{route('proveedores.index')}}"><i class="fa fa-users"></i> Proveedores</a></li>
            <li>
                <a id="navbarDropdown" href="{{route('name-project')}}">
                    <i class="fa fa-wrench"></i>Calcular Presupuesto <span class="caret"></span>
                </a>
            </li>
            <li><a href="{{route('showList')}}"><i class="fa fa-list"></i> Ver lista</a></li>
            @endif
            @if(Auth::user()->type == 'Usuario')
            <li>
                <a id="navbarDropdown" href="{{route('name-project')}}">
                    <i class="fa fa-wrench"></i> Insumos <span class="caret"></span>
                </a>
            </li>
            <li><a href="{{route('showList')}}"><i class="fa fa-list"></i> Ver lista</a></li>
            @endif
            <li>
                <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a id="bt-option" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fa fa-power-off"></i> {{ __('Cerrar sesión') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
            {{--
            <li>
                <a href="">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Buscar...">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
                    </form>
                </a>
            </li>
            --}}
        </ul>
    </nav>
</header>
