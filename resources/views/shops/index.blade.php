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
              <th scope="col">Marka</th>
              <th scope="col">Model</th>
              <th scope="col">Rodzaj</th>
              <th scope="col">Rok produkcji</th>
              <th scope="col">Stan techniczny</th>
              <th scope="col">Dostępność</th>

          </tr>
      </thead>
      <tbody>
        @forelse ($shops as $shop)
            <tr>
                <th scope="row">{{$shop->id}}</th>
                <td>{{$shop->name}}</td>
                <td>{{$shop->address}}</td>
                <td>{{$shop->phone_number}}</td>
                <td>{{$shop->email}} rok</td>
                <td>{{$shop->industry}}</td>

                <td><a href="{{route('shops.edit', $shop->id)}}">Edycja</a></td>
            </tr>
        @empty
            <tr>
                <th scope="row" colspan="7">Brak maszyn.</th>
            </tr>
        @endforelse
      </tbody>
  </table>
  </div>
</div>
