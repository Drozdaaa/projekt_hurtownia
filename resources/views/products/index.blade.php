<!doctype html>
<html lang="pl" data-bs-theme="">
@include('shared.head',['pageTitle'=>'Hurtownia'])

<body>
    @include('shared.navbar')
    <div class="table-responsive-sm">
        <div class="container">
            <a href="{{ route('products.create') }}">Dodaj nowy produkt</a>
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nazwa</th>
                        <th scope="col">Typ</th>
                        <th scope="col">Cena</th>
                        <th scope="col">Ilość</th>
                        <th scope="col">Edytuj</th>
                        <th scope="col">Usuń</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->type->types }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>

                        <td><a href="{{ route('products.edit', $product->id) }}">Edycja</a></td>
                        <td>
                            <form method="POST" action="{{ route('products.destroy', $product->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Usuń</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <th scope="row" colspan="7">Brak produktów.</th>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
