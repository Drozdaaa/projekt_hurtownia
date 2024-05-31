@include('shared.html')

@include('shared.head', ['pageTitle' => 'Dodaj nowego pracownika'])

<body>
    @include('shared.navbar')

    <div class="container mt-5 mb-5">

        @include('shared.session-error')

        <div class="row mt-4 mb-4 text-center">
            <h1>Dodaj nowego pracownika</h1>
        </div>

        @include('shared.validation-error')

        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <form method="POST" action="{{ route('employees.store') }}" class="needs-validation" novalidate>
                    @csrf
                    <div class="form-group mb-2">
                        <label for="name" class="form-label">Imie</label>
                        <input id="name" name="name" type="text" class="form-control @if ($errors->first('name')) is-invalid @endif" value="{{ old('name') }}">
                        <div class="invalid-feedback">Nieprawidłowe imie!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="surname" class="form-label">Nazwisko</label>
                        <div class="input-group mb-2">
                            <input id="surname" type="text" name="surname"
                                step="any" class="form-control @if ($errors->first('surname')) is-invalid @endif" value="{{ old('surname') }}">

                        </div>
                        <div class="invalid-feedback">Nieprawidłowe nazwisko!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="phone_number" class="form-label">Numer telefonu</label>
                        <input id="phone_number" name="phone_number" type="number" class="form-control @if ($errors->first('phone_number')) is-invalid @endif" value="{{ old('phone_number') }}">
                        <div class="invalid-feedback">Nieprawidłowy numer telefonu!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="salary" class="form-label">Zarobki</label>
                        <input id="salary" name="salary" type="number" class="form-control @if ($errors->first('salary')) is-invalid @endif" value="{{ old('salary') }}">
                        <div class="invalid-feedback">Nieprawidłowa wartość!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" name="email" class="form-control @if ($errors->first('email')) is-invalid @endif">
                        <div class="invalid-feedback">Nieprawidłowy email!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="position" class="form-label">Stanowisko</label>
                        <select id="position" name="position" class="form-select @if ($errors->first('position')) is-invalid @endif">
                            <option value="Order Picker">Order Picker</option>
                            <option value="Magazynier">Magazynier</option>
                            <option value="Kierownik Magazynu">Kierownik Magazynu</option>
                            <option value="Pracownik Biura Obsługi Klienta">Pracownik Biura Obsługi Klienta</option>
                            <option value="Specjalista ds. Logistyki">Specjalista ds. Logistyki</option>
                            <option value="Operator Wózka Widłowego	">Operator Wózka Widłowego	</option>
                            <option value="Kierowca">Kierowca</option>
                            <option value="Specjalista ds. Kontroli Jakości">Specjalista ds. Kontroli Jakości</option>
                            <option value="Koordynator Dostaw">Koordynator Dostaw</option>
                            <option value="Specjalista ds. Sprzedaży">Kierowca</option>
                        </select>
                        <div class="invalid-feedback">Nieprawidłowe stanowisko!</div>
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
