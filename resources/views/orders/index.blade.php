@include ('layouts.header')



    <h2>Mes Commandes</h2>
    <ul>
        @foreach ($orders as $order)
            <li><a href="{{ route('orders.show', ['order' => $order]) }}"><b>Commande N°: {{ $order->number }}</b></a></li>
            <li> Date de la commande: {{$order->order_create}}</li>
            <li> Date de livraison: {{$order->order_delivery}}</li>
            <br>
        @endforeach
    </ul>
</div>
</body>


@include ('layouts.footer')
