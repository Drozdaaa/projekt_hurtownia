<!doctype html>
<html lang="pl" data-bs-theme="">
    @include('shared.head',['pageTitle'=>'Hurtownia'])
<body>
    @include('shared.navbar')
<div class="table-responsive-sm">
    <div class="container">
    <table class="table table-hover table-striped">
      <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Imię</th>
            <th scope="col">Nazwisko</th>
            <th scope="col">Stanowisko</th>
            <th scope="col">Email</th>
            <th scope="col">Numer telefonu</th>
            <th scope="col">Zarobki</th>
            <th scope="col">Liczba zamówień</th>
            <th scope="col">Edytuj</th>
            <th scope="col">Usuń</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($employees as $employee)
            <tr>
                <th scope="row">{{ $employee->id }}</th>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->surname }}</td>
                <td>{{ $employee->position }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->phone_number }}</td>
                <td>{{ $employee->salary }}</td>
                <td>{{ $employee->order_count }}</td>
                <td><a href="{{ route('employees.edit', $employee->id) }}">Edycja</a></td>
                <td>
                    <form method="POST" action="{{ route('employees.destroy', $employee->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Usuń</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <th scope="row" colspan="10">Brak pracowników.</th>
            </tr>
        @endforelse
    </tbody>
  </table>
  </div>
</div>
