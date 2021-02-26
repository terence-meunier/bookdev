@include ('layouts.header')

<body class="antialiased">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    <article class="dark:text-white">
        <header>
            <h2>{{ $product->title }}</h2>
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
</div>
</body>

@include ('layouts.footer')
