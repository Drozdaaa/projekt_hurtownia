<!doctype html>
<html lang="pl" data-bs-theme="">
@include('shared.head', ['pageTitle' => 'Dodaj nowy produkt'])

<body>
    @include('shared.navbar')

    <div class="container mt-5 mb-5">
        @include('shared.session-error')

        <div class="row mt-4 mb-4 text-center">
            <h1>Dodaj nowy produkt</h1>
        </div>

        @include('shared.validation-error')

        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <form method="POST" action="{{ route('products.store') }}" class="needs-validation" novalidate>
                    @csrf
                    <div class="form-group mb-2">
                        <label for="name" class="form-label">Nazwa</label>
                        <input id="name" name="name" type="text" class="form-control @if ($errors->first('name')) is-invalid @endif" value="{{ old('name') }}">
                        <div class="invalid-feedback">Nieprawidłowa nazwa produktu!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="price" class="form-label">Cena</label>
                        <input id="price" type="number" name="price" step="any" class="form-control @if ($errors->first('price')) is-invalid @endif" value="{{ old('price') }}">
                        <div class="invalid-feedback">Nieprawidłowa cena!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="quantity" class="form-label">Ilość</label>
                        <input id="quantity" name="quantity" type="number" class="form-control @if ($errors->first('quantity')) is-invalid @endif" value="{{ old('quantity') }}">
                        <div class="invalid-feedback">Nieprawidłowa ilość!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="product_type_id" class="form-label">Typ produktu</label>
                        <select id="product_type_id" name="product_type_id" class="form-select @if ($errors->first('product_type_id')) is-invalid @endif">
                            @foreach($types as $type)
                            <option value="{{ $type->id }}">{{ $type->types }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">Nieprawidłowy typ produktu!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="supplier_id" class="form-label">Dostawca</label>
                        <select id="supplier_id" name="supplier_id" class="form-select @if ($errors->first('supplier_id')) is-invalid @endif">
                            @foreach($suppliers as $supplier)
                            <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">Nieprawidłowy dostawca!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="shop_id" class="form-label">Sklep</label>
                        <select id="shop_id" name="shop_id" class="form-select @if ($errors->first('shop_id')) is-invalid @endif">
                            @foreach($shops as $shop)
                            <option value="{{ $shop->id }}">{{ $shop->name }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">Nieprawidłowy sklep!</div>
                    </div>

                    <div class="text-center mt-4 mb-4">
                        <input class="btn btn-success" type="submit" value="Dodaj produkt">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
