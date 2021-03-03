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
                <div class="grid p-6 border-b border-gray-200 place-items-center">
                    <a href="{{ route('home') }}"><button class="bg-white text-gray-900 hover:text-yellow-600 p-8 rounded-2xl">ENTRER SUR LE SITE</button></a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
