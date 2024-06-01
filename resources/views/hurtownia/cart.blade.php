<!doctype html>
<html lang="pl" data-bs-theme="">
    @include('shared.head',['pageTitle'=>'Hurtownia'])
<body>
    @include('shared.navbar')

    <div class="container">
        <h1>Twój koszyk</h1>
        @if($cartItems->isEmpty())
            <p>Twój koszyk jest pusty</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Produkt</th>
                        <th>Ilość</th>
                        <th>Cena</th>
                        <th>Suma</th>
                        <th>Edycja</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cartItems as $item)
                        <tr>
                            <td>{{ $item->product->name }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>${{ $item->product->price }}</td>
                            <td>${{ $item->product->price * $item->quantity }}</td>
                            <td>
                                <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Usuń</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <h3>Total Cost: ${{ $totalCost }}</h3>

            <form action="{{ route('cart.checkout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-success">Zapłać</button>
            </form>
        @endif
    </div>
</body>
</html>
