<!doctype html>
<html lang="pl" data-bs-theme="">
    @include('shared.head',['pageTitle'=>'Hurtownia'])
<body>
    @include('shared.navbar')
    <br>
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="card text-center">
                <div class="card-header">
                  Featured
                </div>
                <div class="card-body">
                  <h2 class="card-title">Special title treatment</h2>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="card-footer text-body-secondary">
                  2 days ago
                </div>
              </div>
          </div>
          <div class="carousel-item">
            <div class="card text-center">
                <div class="card-header">
                  Featured
                </div>
                <div class="card-body">
                  <h2 class="card-title">Special title treatment</h2>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="card-footer text-body-secondary">
                  2 days ago
                </div>
              </div>
          </div>
          <div class="carousel-item">
            <div class="card text-center">
                <div class="card-header">
                  Featured
                </div>
                <div class="card-body">
                  <h2 class="card-title">Special title treatment</h2>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="card-footer text-body-secondary">
                  2 days ago
                </div>
              </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <br>

      <div class="container">
            <div class="container text-center">
                <div class="row">
                    @forelse ($randomSuppliers as $supplier)
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card">

                                <div class="card-body">
                                    <h5 class="card-title">{{ $supplier->name }}</h5>
                                    <p class="card-text">{{ $supplier->description }}</p>
                                    
                                </div>
                            </div>
                        </div>
                        @empty
                            <p>Brak wycieczek.</p>
                        @endforelse
                    </div>
