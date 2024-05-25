@include('shared.html')

@include('shared.head', ['pageTitle' => 'Dodaj nowy sklep'])

<body>
    @include('shared.navbar')

    <div class="container mt-5 mb-5">

        @include('shared.session-error')

        <div class="row mt-4 mb-4 text-center">
            <h1>Dodaj nowy sklep</h1>
        </div>

        @include('shared.validation-error')

        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <form method="POST" action="{{ route('shop.store') }}" class="needs-validation" novalidate>
                    @csrf
                    <div class="form-group mb-2">
                        <label for="name" class="form-label">Nazwa</label>
                        <input id="name" name="name" type="text" class="form-control @if ($errors->first('name')) is-invalid @endif" value="{{ old('name') }}">
                        <div class="invalid-feedback">Nieprawidłowa nazwa!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="address" class="form-label">Adres</label>
                        <div class="input-group mb-2">
                            <input id="address" type="text" name="address"
                                step="any" class="form-control @if ($errors->first('address')) is-invalid @endif" value="{{ old('address') }}">

                        </div>
                        <div class="invalid-feedback">Nieprawidłowy adres</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="phone_number" class="form-label">Numer telefonu</label>
                        <input id="phone_number" name="phone_number" type="number" class="form-control @if ($errors->first('phone_number')) is-invalid @endif" value="{{ old('phone_number') }}"></textarea>
                        <div class="invalid-feedback">Nieprawidłowy numer telefonu!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" name="email" class="form-control @if ($errors->first('email')) is-invalid @endif">
                        <div class="invalid-feedback">Nieprawidłowy email!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="industry" class="form-label">Branża</label>
                        <select id="industry" name="industry" class="form-select @if ($errors->first('industry')) is-invalid @endif">
                            <option value="Dom">Dom</option>
                            <option value="Ogród">Ogród</option>
                            <option value="Spożywcza">Spożywcza</option>
                            <option value="AGD">AGD</option>
                            <option value="Chemia">Chemia</option>
                            <option value="Zabawki">Zabawki</option>
                            <option value="Odzież">Odzież</option>
                        </select>
                        <div class="invalid-feedback">Nieprawidłowa branża!</div>
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
