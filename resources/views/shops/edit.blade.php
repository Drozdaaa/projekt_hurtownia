@include('shared.html')

@include('shared.head', ['pageTitle' => 'Edytuj Sklepy'])

<body>
    @include('shared.navbar')

    <div class="container mt-5 mb-5">



        <div class="row mt-4 mb-4 text-center">
            <h1>Edytuj dane sklepów</h1>
        </div>



        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <form method="POST" action="{{ route('shops.update', $shop->id) }}" class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-2">
                        <label for="name" class="form-label">Nazwa</label>
                        <input id="name" name="name" type="string"
                        class="form-control @if ($errors->first('name')) is-invalid @endif" value="{{ $shop->name }}">
                        <div class="invalid-feedback">Nieprawidłowe nazwa!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="address" class="form-label">Adres</label>
                        <input id="address" name="address" type="string"
                        class="form-control @if ($errors->first('address')) is-invalid @endif"  value="{{ $shop->address }}">
                        <div class="invalid-feedback">Nieprawidłowy Adres!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="phone_number" class="form-label">Numer telefonu</label>
                        <input id="phone_number" name="phone_number" type="int"
                        class="form-control @if ($errors->first('phone_number')) is-invalid @endif"  value="{{ $shop->phone_number }}">
                        <div class="invalid-feedback">Nieprawidłowy numer telefonu!</div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group mb-3">
                            <input id="email" type="string" name="email" 
                                step="any" class="form-control @if ($errors->first('email')) is-invalid @endif" value="{{ $shop->email }}">
                        </div>
                        <div class="invalid-feedback">Nieprawidłowy email!</div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="industry" class="form-label">Branża</label>
                        <div class="input-group mb-3">
                            <input id="industry" type="text" name="industry" 
                                step="any" class="form-control @if ($errors->first('industry')) is-invalid @endif" value="{{ $shop->industry }}">

                        </div>
                        <div class="invalid-feedback">Nieprawidłowa branża</div>
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
