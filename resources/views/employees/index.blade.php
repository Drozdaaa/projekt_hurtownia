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
              <th scope="col">Imie</th>
              <th scope="col">Nazwisko</th>
              <th scope="col">Stanowisko</th>
              <th scope="col">Email</th>
              <th scope="col">Numer telefonu</th>
              <th scope="col">Edytuj</th>

          </tr>
      </thead>
      <tbody>
        @forelse ($employees as $employee)
            <tr>
                <th scope="row">{{$employee->id}}</th>
                <td>{{$employee->name}}</td>
                <td>{{$employee->surname}}</td>
                <td>{{$employee->position}}</td>
                <td>{{$employee->email}}</td>
                <td>{{$employee->phone_number}}</td>

                <td><a href="{{route('employees.edit', $employee->id)}}">Edycja</a></td>
            </tr>
        @empty
            <tr>
                <th scope="row" colspan="7">Brak pracowników.</th>
            </tr>
        @endforelse
      </tbody>
  </table>
  </div>
</div>
