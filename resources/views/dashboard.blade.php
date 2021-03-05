<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white bg-gray-800 leading-tight p-4">
            {{ __('Tableau de bord') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid p-6 border-b border-gray-200 place-items-center">
                    <a href="{{ route('home') }}"><img src="/img/bookdev-logo.png"/></a>
                </div>
                @foreach($orders as $order)
                    <div class="bg-gray-600 p-4 border">
                        <h3><a href="{{ route('orders.show', ['order' => $order]) }}">Commande N°{{ $order->number }}</a></h3>
                        <em>Date de la commande : {{ $order->order_create->format('d/m/Y') }}</em>
                        <em>Date de la livraison : {{ $order->order_delivery->format('d/m/Y') }}</em>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
