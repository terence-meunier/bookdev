@include ('layouts.header')

<body class="antialiased">
<div class="dark:text-white dark:bg-gray-800 text-center">
    <h2>Votre panier</h2>
</div>
@if(!empty($products))
    <div class="dark:text-white dark:bg-gray-800 text-center">
        <form action="{{ route('cart.update') }}" method="post">
            @csrf
            @method('PUT')
            <table width="100%">
                <thead>
                <tr>
                    <td>#</td>
                    <td>Title</td>
                    <td>Qté</td>
                </tr>
                </thead>
                <tbody>
                @foreach ($products as $id => $product)
                    <tr>
                        <td>{{ $id }}</td>
                        <td>{{ $product->title }}</td>
                        <td><input type="number" name="{{ $id }}" value="{{ session('cart')[$id] }}" min="1"/></td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="2"></td>
                    <td><input type="submit" value="Modifier les quantités"/></td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
@else
    <div>
        <p>Il n'y a pas d'articles dans le panier</p>
    </div>
@endif
</body>

@include ('layouts.footer')
