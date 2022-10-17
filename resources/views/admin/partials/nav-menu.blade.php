<nav class="navbar navbar-expand-lg p-4">
<div class="container">
<a class="navbar-brand" href="{{route('inicio')}}">El Pasante</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon "></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{route('inicio')}}">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('servicios')}}">Precios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('register')}}">Registro</a>
      </li>
      @if(Auth::check())
          <li class="dropdown ml-2">
              <a class="dropdown-toggle" class="" role="button" data-toggle="dropdown" aria-expanded="false" style="color:#ededed;">
                  <i class="fas fa-user" style="margin-top:11px;"></i> {{Auth::user()->user}} <span class="caret"></span>  
              </a>
              <ul class="dropdown-menu" role="menu">
                  <li><a href="{{route('logout')}}">Finalizar sesión</a></li>
              </ul>
          </li>
      @else
          <li class="dropdown ml-2">
              <a class="dropdown-toggle" href="#" role="button" class="" data-toggle="dropdown" aria-expanded="false">
                  <i class="fas fa-user" style="margin-top:11px; color:black;"></i> Login<span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                  <li><a href="{{route('login')}}">Iniciar sesión</a></li>
              </ul>
          </li>
      @endif    
    </ul>
  </div>
</div>
</nav>