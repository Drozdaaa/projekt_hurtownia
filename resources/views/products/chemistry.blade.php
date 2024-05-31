<!doctype html>
<html lang="pl" data-bs-theme="">
    @include('shared.head',['pageTitle'=>'Hurtownia'])
<body>
    @include('shared.navbar')

    <div id="home" class="container mt-5">
        <div class="row">
          <h1>Chemia</h1>
        </div>
        <div class="row">
          @forelse ($products as $product)
              <div class="col-12 col-sm-6 col-lg-3">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title">{{ $product->name }}</h5>
                          <p class="card-text">{{ $product->price }}</p>

                      </div>
                  </div>
              </div>
              @empty
                  <p>Brak produktów.</p>
              @endforelse
          </div>
      </div>
