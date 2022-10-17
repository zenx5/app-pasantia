<nav class="navbar navbar-expand-lg p-4" >
<div class="container">
<a class="navbar-brand" href="{{route('inicio')}}">El Pasante</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto" >
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
      @include('store.partials.menu-user')
    </ul>
  </div>
</div>
</nav>
