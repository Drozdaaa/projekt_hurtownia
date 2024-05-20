@include('shared.html')

@include('shared.head', ['pageTitle' => 'Edytuj Maszyny'])

<body>
    @include('shared.navbar')

    <div class="container mt-5 mb-5">



        <div class="row mt-4 mb-4 text-center">
            <h1>Edytuj dane maszyn</h1>
        </div>



        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <form method="POST" action="{{ route('shops.update', $shop->id) }}" class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-2">
                        <label for="brand" class="form-label">Nazwa</label>
                        <input id="brand" name="brand" type="text"
                        class="form-control @if ($errors->first('brand')) is-invalid @endif" value="{{ $machine->brand }}">
                        <div class="invalid-feedback">Nieprawidłowe nazwa!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="model" class="form-label">Model</label>
                        <input id="model" name="model" type="text"
                        class="form-control @if ($errors->first('model')) is-invalid @endif"  value="{{ $machine->model }}">
                        <div class="invalid-feedback">Nieprawidłowy Model!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="type" class="form-label">Typ</label>
                        <input id="type" name="type" type="text"
                        class="form-control @if ($errors->first('type')) is-invalid @endif"  value="{{ $machine->type }}">
                        <div class="invalid-feedback">Nieprawidłowy typ!</div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="production_year" class="form-label">Rok produkcji</label>
                        <div class="input-group mb-3">
                            <input id="production_year" type="number" name="production_year" min="0" placeholder="0"
                                step="any" class="form-control @if ($errors->first('production_year')) is-invalid @endif" value="{{ $machine->production_year }}">
                        </div>
                        <div class="invalid-feedback">Nieprawidłowy rok!</div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="technical_condition" class="form-label">Stan techniczny</label>
                        <div class="input-group mb-3">
                            <input id="technical_condition" type="text" name="technical_condition" min="0" placeholder="0"
                                step="any" class="form-control @if ($errors->first('technical_condition')) is-invalid @endif" value="{{ $machine->technical_condition }}">

                        </div>
                        <div class="invalid-feedback">Nieprawidłowy stan techniczny</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="availability" class="form-label">Dostępność</label>
                        <input id="availability" name="availability" type="text"
                        class="form-control @if ($errors->first('availability')) is-invalid @endif" value="{{ $machine->availability }}">
                        <div class="invalid-feedback">Nieprawidłowa dostępność!</div>
                    </div>

                    <div class="text-center mt-4 mb-4">
                        <input class="btn btn-success" type="submit" value="Wyślij">
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

</html>
