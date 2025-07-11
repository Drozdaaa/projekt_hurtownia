<!doctype html>
<html lang="pl" data-bs-theme="">
    @include('shared.head',['pageTitle'=>'Hurtownia'])
<body>
    @include('shared.navbar')
<div class="table-responsive-sm">
    <div class="container">
        <a href="{{ route('suppliers.create') }}">Dodaj nowego dostawcę</a>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nazwa</th>
                <th scope="col">Adres</th>
                <th scope="col">Numer telefonu</th>
                <th scope="col">Email</th>
                <th scope="col">Edytuj</th>
                <th scope="col">Usuń</th>
            </tr>
      </thead>
      <tbody>
        @forelse ($suppliers as $supplier)
            <tr>
                <th scope="row">{{$supplier->id}}</th>
                <td>{{$supplier->name}}</td>
                <td>{{$supplier->address}}</td>
                <td>{{$supplier->phone_number}}</td>
                <td>{{$supplier->email}}</td>

                <td><a href="{{route('suppliers.edit', $supplier->id)}}">Edycja</a></td>
                <td>
                    <form method="POST" action="{{ route('suppliers.destroy', $supplier->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Usuń</button>
                    </form>
                </td>
            </tr>
        @empty

            <tr>
                <th scope="row" colspan="5">Brak dostwaców.</th>
            </tr>
        @endforelse
      </tbody>
  </table>
  </div>
</div>
