<!doctype html>
<html lang="pl" data-bs-theme="">
@include('shared.head', ['pageTitle' => 'Hurtownia'])
<body>
    @include('shared.navbar')

    <div id="home" class="container mt-5">
        <div class="row">
            <h1>Dla domu</h1>
        </div>
        <div class="row">
            @forelse ($products as $product)
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->price }}$</p>
                        <p class="card-text">Dostawca: {{ $product->supplier->name }}</p>
                        <p class="card-text">{{ $product->shop->name }}</p>
                        <p class="card-text">Dostępna ilość produktu: {{ $product->quantity }}</p>

                        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <div class="form-group">
                                <label for="quantity-{{ $product->id }}">Ilość</label>
                                <input type="number" name="quantity" id="quantity-{{ $product->id }}" class="form-control" min="1" value="1" required>
                                @if ($errors->has('quantity') && old('product_id') == $product->id)
                                    <span class="text-danger">{{ $errors->first('quantity') }}</span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Dodaj do koszyka</button>
                        </form>
                    </div>
                </div>
            </div>
            @empty
            <p>Brak produktów.</p>
            @endforelse
        </div>
    </div>
</body>
</html>
