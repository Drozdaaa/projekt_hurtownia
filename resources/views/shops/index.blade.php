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
              <th scope="col">Nazwa</th>
              <th scope="col">Adres</th>
              <th scope="col">Numer telefonu</th>
              <th scope="col">Email</th>
              <th scope="col">Branża</th>
              <th scope="col">Edytuj</th>

          </tr>
      </thead>
      <tbody>
        @forelse ($shops as $shop)
            <tr>
                <th scope="row">{{$shop->id}}</th>
                <td>{{$shop->name}}</td>
                <td>{{$shop->address}}</td>
                <td>{{$shop->phone_number}}</td>
                <td>{{$shop->email}}</td>
                <td>{{$shop->industry}}</td>

                <td><a href="{{route('shops.edit', $shop->id)}}">Edycja</a></td>
            </tr>
        @empty
            <tr>
                <th scope="row" colspan="6">Brak sklepów.</th>
            </tr>
        @endforelse
      </tbody>
  </table>
  </div>
</div>
