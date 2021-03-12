@include ('layouts.header')
<article class="text-center">
    <header>
        <h3>Commande N°{{ $order->number }}</h3>
    </header>
    <p>

    </p>
    <footer>
        <ul>
            <li>Date de la commande : {{ $order->order_create->format('d/m/Y') }}</li>
            <li>Date de livraison : {{ $order->order_delivery->format('d/m/Y') }}</li>
        </ul>
    </footer>
</article>
<h3 class="dark:bg-gray-800 dark:text-white text-center">Récapitulatif de la commande</h3>
<table width="100%" class="text-center border">
    <thead>
    <tr class="dark:bg-gray-800 dark:text-white">
        <td>#</td>
        <td>Produit</td>
        <td>Prix unitaire TTC</td>
        <td>Quantité</td>
        <td>Prix Total TTC</td>
    </tr>
    </thead>
    <tbody>
    @foreach($order->orders_has_products as $line)
        <tr>
            <td>{{ $line->products->id }}</td>
            <td>{{ $line->products->title }}</td>
            <td>{{ $line->products->price_with_vat }}€</td>
            <td>{{ $line->quantity }}</td>
            <td>{{ $line->products->price_with_vat * $line->quantity }}€</td>
        </tr>
    @endforeach
    </tbody>
</table>
@include ('layouts.footer')
