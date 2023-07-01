<x-app-layout>
<div class="bg-white p-2 rounded-xl">
    <h1 class="text-xl">{{ $product->name }}</h1>
    <p>Preis: {{ $product->price }} €</p>
    <p>Gewicht: {{ $product->weight }} g</p>
    <p class="mt-2">Beschreibung:</p>
    <p>{{ $product->description }}</p>
    <div class="mt-3 mb-2">
        <p class="text-xl">Kategorien:</p>
    </div>
    @forelse($product->categories as $category)
        <p class="bg-gray-300 inline p-2 rounded-md ">{{ $category->name }}</p>
    @empty
      <p class="mt-5">Keiner Kategorie zugewiesen</p>
    @endforelse
  </div>
  <div class="mt-5">
    <a class="bg-gray-800 p-2 text-white rounded-lg " href="{{ url()->previous() }}">Zurück</a>
  </div>
</x-app-layout>