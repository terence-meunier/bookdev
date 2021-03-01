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
                <td>Qté</td>
            </tr>
            </thead>
            <tbody>
            @foreach ($products as $id => $product)
                <tr>
                    <td>{{ $id }}</td>
                    <td>{{ $product->title }}</td>
                    <td>{{ session('cart')[$id] }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@else
    <div>
        <p>Il n'y a pas d'articles dans le panier</p>
    </div>
@endif
</body>

@include ('layouts.footer')
