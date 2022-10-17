@if(Auth::check())
    <li class="dropdown ml-2 nav-item">
        <a class="dropdown-toggle" class="" role="button" data-toggle="dropdown" aria-expanded="false" style="color:#ededed;">
            <i class="fas fa-user" style="margin-top:11px;"></i> {{Auth::user()->user}} <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">
            <li><a href="{{route('logout')}}">Finalizar sesión</a></li>
        </ul>
    </li>
@else
    <li class="dropdown ml-2 nav-item">
        <a class="dropdown-toggle text-hover" href="#" role="button" class="" data-toggle="dropdown" aria-expanded="false">
             <i class="fas fa-user" style="margin-top:11px;"></i> Login
        </a>
        <ul class="dropdown-menu" role="menu">
            <li><a href="{{route('login')}}">Iniciar sesión</a></li>
        </ul>
    </li>
@endif
