@include ('layouts.header')

<body class="antialiased">
<div class="dark:text-white dark:bg-gray-800 text-center">
    <h2>{{ $category->name }}</h2>
</div>
<div class="dark:text-white dark:bg-gray-800 text-center">
    @foreach ($products as $product)
        <article>
            <header>
                <h3><a href="{{ route('product.show', ['product' => $product]) }}">{{ $product->title }}</a></h3>
            </header>
            <p>{{ $product->description }}</p>
            <footer>
                <ul>
                    <li>Prix : {{ $product->price_ht }} €/HT</li>
                    <li>Poids : {{ $product->weight }} g</li>
                    <li>Stock : {{ $product->stock }}</li>
                </ul>
            </footer>
        </article>
    @endforeach
</div>
</body>

@include ('layouts.footer')
