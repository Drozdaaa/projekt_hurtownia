@include('shared.html')

@include('shared.head', ['pageTitle' => 'Edytuj Pracowników'])

<body>
    @include('shared.navbar')

        <div class="row mt-4 mb-4 text-center">
            <h1>Edytuj dane pracowników</h1>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <form method="POST" action="{{ route('employees.update', $employee->id) }}" class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="container">
                    <div class="form-group mb-2">
                        <label for="name" class="form-label">Imię</label>
                        <input id="name" name="name" type="text"
                        class="form-control @if ($errors->first('name')) is-invalid @endif" value="{{ $employee->name }}">
                        <div class="invalid-feedback">Nieprawidłowe imię!</div>
                    </div>

                    <div class="form-group mb-2">
                        <label for="surname" class="form-label">Nazwisko</label>
                        <input id="surname" name="surname" type="text"
                        class="form-control @if ($errors->first('surname')) is-invalid @endif"  value="{{ $employee->surname }}">
                        <div class="invalid-feedback">Nieprawidłowe nazwisko!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="phone_number" class="form-label">Numer telefonu</label>
                        <input id="phone_number" name="phone_number" type="text"
                        class="form-control @if ($errors->first('phone_number')) is-invalid @endif"  value="{{ $employee->phone_number }}">
                        <div class="invalid-feedback">Nieprawidłowy numer telefonu!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="salary" class="form-label">Zarobki</label>
                        <input id="salary" type="number" name="salary" min="0" placeholder="0"
                        class="form-control @if ($errors->first('salary')) is-invalid @endif"  value="{{ $employee->salary }}">
                        <div class="invalid-feedback">Nieprawidłowa wartość!</div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group mb-3">
                            <input id="email" type="email" name="email"
                                step="any" class="form-control @if ($errors->first('email')) is-invalid @endif" value="{{ $employee->email }}">
                        </div>
                        <div class="invalid-feedback">Nieprawidłowy email!</div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="position" class="form-label">Stanowisko</label>
                        <div class="input-group mb-3">
                            <select id="position" type="text" name="position"step="any" class="form-select @if ($errors->first('position')) is-invalid @endif" value="{{ $employee->position }}">
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
                        </div>
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
