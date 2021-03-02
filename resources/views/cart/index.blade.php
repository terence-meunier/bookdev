@include ('layouts.header')

<body class="antialiased">
<div class="dark:text-white dark:bg-gray-800 text-center">
    <h2>Votre panier</h2>
</div>
@if(!empty($products))
    <div class="dark:text-white dark:bg-gray-800 text-center">
        <table width="100%">
            <thead>
            <tr>
                <td>#</td>
                <td>Title</td>
                <td>Prix unitaire TTC</td>
                <td>Qté</td>
            </tr>
            </thead>
            <tbody>
            @foreach ($products as $id => $product)
                <tr>
                    <td>{{ $id }}</td>
                    <td>{{ $product->title }}</td>
                    <td>{{$product->price_with_vat}}</td>
                    <td>{{ session('cart')[$id] }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="text-right">
            <p><strong>Prix total TTC : {{$totalprice}}</strong></p>
        </div>
    </div>
@else
    <div>
        <p>Il n'y a pas d'articles dans le panier</p>
    </div>
@endif
</body>

@include ('layouts.footer')
