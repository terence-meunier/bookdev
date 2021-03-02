@include ('layouts.header')

<body class="antialiased">
<div class="relative flex justify-center dark:text-white dark:bg-gray-800">
    <h2>Catégories des produits</h2>
    <ul>
        @foreach ($categories as $category)
            <li><a href="{{ route('category.show', ['category' => $category]) }}">{{ $category->name }}</a></li>
        @endforeach
    </ul>
</div>
<div class="relative items-center sm:justify-between ">
    @foreach ($products as $product)
        <article class="dark:text-white dark:bg-gray-800 text-center">
            <header>
                <h2><a href="{{ route('product.show', ['product' => $product]) }}">{{ $product->title }}</a></h2>
            </header>
            <p>{{ $product->description }}</p>
            <p><strong>{{ $product->price_with_vat }} €</strong></p>
        </article>
    @endforeach
</div>
</body>

@include ('layouts.footer')
