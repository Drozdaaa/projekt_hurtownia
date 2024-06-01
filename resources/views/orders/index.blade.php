<!doctype html>
<html lang="pl" data-bs-theme="">
    @include('shared.head',['pageTitle'=>'Hurtownia'])
<body>
    @include('shared.navbar')
    <div class="container">
        <form action="{{ route('orders.index') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" name="user_id" class="form-control" placeholder="ID Użytkownika" value="{{ $userId ?? '' }}">
                <button class="btn btn-primary" type="submit">Szukaj</button>
            </div>
        </form>
        <div class="table-responsive-sm">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Produkt</th>
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
                            <th scope="row">{{ $order->id }}</th>
                            <td>{{ $order->product->name }}</td>
                            <td>{{ $order->order_date }}</td>
                            <td>{{ $order->delivery_date }}</td>
                            <td>{{ $order->quantity }}</td>
                            <td>{{ $order->user->id }}</td>
                            <td>{{ $order->employee->id }}</td>
                            <td><a href="{{ route('orders.edit', $order->id) }}">Edycja</a></td>
                        </tr>
                    @empty
                        <tr>
                            <th scope="row" colspan="8">Brak zamówień.</th>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
