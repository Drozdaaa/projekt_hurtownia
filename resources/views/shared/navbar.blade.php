<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Hurtownia</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active @if (str_contains(request()->path(), 'shops')) active @endif" aria-current="page" href="{{ route('hurtownia.index') }}">Start</a>
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
              <li><a class="dropdown-item" href="#">Odzież</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Nasi dostawcy</a>
          </li>
          @can('is-admin')
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Admin
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item @if (str_contains(request()->path(), 'shops')) active @endif" href="{{ route('shops.index') }}">Sklepy</a></li>
              <li><a class="dropdown-item @if (str_contains(request()->path(), 'suppliers')) active @endif" href="{{ route('suppliers.index') }}">Dostawcy</a></li>
              <li><a class="dropdown-item @if (str_contains(request()->path(), 'orders')) active @endif" href="{{ route('orders.index') }}">Zamówienia</a></li>
              <li><a class="dropdown-item @if (str_contains(request()->path(), 'employees')) active @endif" href="{{ route('employees.index') }}">Pracownicy</a></li>
            </ul>
            @endcan
        </li>
        </ul>
        <ul id="navbar-user" class="navbar-nav mb-2 mb-lg-0">
            <li class="pr-5">
                <button class="nav-link" onclick="themeToggle()"> <i class="bi-moon-stars"></i></button>
            </li>
            @if (Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">{{ Auth::user()->name }}, wyloguj się... </a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Zaloguj się...</a>
                </li>
            @endif
        </ul>
      </div>
    </div>
  </nav>
