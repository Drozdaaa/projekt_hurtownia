@include('shared.html')

@include('shared.head', ['pageTitle' => 'Edytuj Dostawców'])

<body>
    @include('shared.navbar')

    <div class="container mt-5 mb-5">
        <div class="row mt-4 mb-4 text-center">
            <h1>Edytuj dane dostwaców</h1>
        </div>


        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <form method="POST" action="{{ route('suppliers.update', $supplier->id) }}" class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-2">
                        <label for="name" class="form-label">Nazwa</label>
                        <input id="name" name="name" type="string"
                        class="form-control @if ($errors->first('name')) is-invalid @endif" value="{{ $supplier->name }}">
                        <div class="invalid-feedback">Nieprawidłowe nazwa!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="address" class="form-label">Adres</label>
                        <input id="address" name="address" type="string"
                        class="form-control @if ($errors->first('address')) is-invalid @endif"  value="{{ $supplier->address }}">
                        <div class="invalid-feedback">Nieprawidłowy Adres!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="phone_number" class="form-label">Numer telefonu</label>
                        <input id="phone_number" name="phone_number" type="int"
                        class="form-control @if ($errors->first('phone_number')) is-invalid @endif"  value="{{ $supplier->phone_number }}">
                        <div class="invalid-feedback">Nieprawidłowy numer telefonu!</div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group mb-3">
                            <input id="email" type="string" name="email"
                                step="any" class="form-control @if ($errors->first('email')) is-invalid @endif" value="{{ $supplier->email }}">
                        </div>
                        <div class="invalid-feedback">Nieprawidłowy email!</div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Opis</label>
                        <div class="input-group mb-3">
                        <textarea id="description" name="description" type="text" rows="5"
                        class="form-control @if ($errors->first('description')) is-invalid @endif" >{{ $supplier->description }}</textarea>
                        </div>
                        <div class="invalid-feedback">Nieprawidłowy opis!</div>
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
