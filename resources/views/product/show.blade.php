<x-app-layout>
<div class="bg-white p-2 rounded-xl">
    <h1 class="text-xl">{{ $product->name }}</h1>
    <p>Preis: {{ $product->price }} €</p>
    <p>Gewicht: {{ $product->weight }} g</p>
    <p class="mt-2">Beschreibung:</p>
    <p>{{ $product->description }}</p>
  </div>
  <div class="mt-5">
    <a class="bg-gray-800 p-2 text-white rounded-lg " href="{{ url()->previous() }}">Zurück</a>
  </div>
</x-app-layout>