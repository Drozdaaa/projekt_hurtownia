<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Hurtownia</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Start</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Sklepy
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Dla domu</a></li>
              <li><a class="dropdown-item" href="#">Dle ogrodu</a></li>
              <li><a class="dropdown-item" href="#">Artykuły spożywcze</a></li>
              <li><a class="dropdown-item" href="#">AGD</a></li>
              <li><a class="dropdown-item" href="#">Chemia</a></li>
              <li><a class="dropdown-item" href="#">Zabawki</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Nasi dostawcy</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Admin
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item @if (str_contains(request()->path(), 'shops')) active @endif" href="{{ route('shops.index') }}">Sklepy</a></li>
              <li><a class="dropdown-item" href="#">Dostawcy</a></li>
              <li><a class="dropdown-item" href="#">Zamówienia</a></li>
              <li><a class="dropdown-item @if (str_contains(request()->path(), 'employees')) active @endif" href="{{ route('employees.index') }}">Pracownicy</a></li>
            </ul>
          </li>
        </ul>

      </div>
    </div>
  </nav>
