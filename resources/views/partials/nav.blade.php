<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Laravel Pau</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse"
          data-target="#navbarSupportedContent">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">

      <li class="nav-item">
        <a class="nav-link" href="{{ route('inicio') }}">Inicio</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('posts.index') }}">
          Listado de fichas
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('posts.create') }}">
          Crear ficha
        </a>
      </li>

    </ul>

    <span class="navbar-text text-white">
        {{ fechaActual('d/m/Y') }}
    </span>

  </div>
</nav>
