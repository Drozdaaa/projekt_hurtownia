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
              <th scope="col">Data zamówienia</th>
              <th scope="col">Data dostawy</th>
              <th scope="col">Ilość</th>
              <th scope="col">ID Użytkownika</th>
              <th scope="col">ID Pracownika</th>
              <th scope="col">Akcje</th>
          </tr>
      </thead>
      <tbody>
        @forelse ($orders as $order)
            <tr>
                <th scope="row">{{$order->id}}</th>
                <td>{{$order->order_date}}</td>
                <td>{{$order->delivery_date}}</td>
                <td>{{$order->quantity}}</td>
                <td>{{$order->user->id}}</td>
                <td>{{$order->employee->id}}</td>
                <td><a href="{{route('shops.edit', $order->id)}}">Edycja</a></td>
            </tr>
        @empty
            <tr>
                <th scope="row" colspan="7">Brak zamówień.</th>
            </tr>
        @endforelse
      </tbody>
  </table>
  </div>
</div>
</body>
</html>
