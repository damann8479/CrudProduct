<x-app-layout>
<div class=bg-white rounded-xl>
    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
      <div
        class="inline-block min-w-full shadow-md rounded-lg overflow-hidden"
      >
      <div class="flex justify-end p-2">
        <a href="products/create" class="bg-gray-800 p-2 text-white rounded-lg">Produkt anlegen</a>
      </div>
        <table class="min-w-full leading-normal">
          <thead>
            <tr>
              <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                ProduktName
              </th>
              <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                Preis
              </th>
              <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider" >
                Gewicht
              </th>
              <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                Aktion
              </th>
            </tr>
          </thead>
          <tbody>
          @forelse($products as $product)
            <tr>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                {{ $product->name }}
              </td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
               {{ $product->price }} €
              </td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
               {{ $product->weight }} g.
              </td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <div class="flex">
                  <a href="products/{{ $product->id }}"><i class="fa-solid fa-eye"></i></a>
                  <a href="products/{{ $product->id }}/edit"><i class="fa-solid fa-pen"></i></a>
                  <form action="products/{{ $product->id }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" ><i class="fa-solid fa-trash text-red-600"></i></button>
                  </form>
                  
                </div>
              </td>
            </tr>
          @empty
            <p>Keine Produkte gefunden</p>
          @endforelse
            
          </tbody>
        </table>
      </div>
    </div>
</div>
</x-app-layout>