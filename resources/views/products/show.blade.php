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
                <li>Prix HT : {{ $product->price_ht }} €/HT</li>
                <li>Prix TTC : {{$product->price_with_vat}} €/TTC</li>
                <li>Poids : {{ $product->weight }} g</li>
                <li>Stock : {{ $product->stock }}</li>
            </ul>
            <form action="{{ route('cart.store', ['product' => $product]) }}" method="post">
                @csrf
                @method('POST')
                <label for="qte">Quantité : </label>
                <input type="number" id="qte" name="qte" value="1" min="1"/>
                <input type="submit" value="Ajouter au panier"/>
                @error('qte')
                {{ $message }}
                @enderror
            </form>
        </footer>
    </article>
</div>
</body>

@include ('layouts.footer')
