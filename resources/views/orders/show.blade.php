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
@include ('layouts.footer')
