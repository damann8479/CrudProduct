<x-app-layout>
<div class=bg-white rounded-xl>
    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
      <div
        class="inline-block min-w-full shadow-md rounded-lg overflow-hidden"
      >
      <div class="flex justify-end p-2">
        <a href="categories/create" class="bg-gray-800 p-2 text-white rounded-lg">Kategorie anlegen</a>
      </div>
        <table class="min-w-full leading-normal">
          <thead>
            <tr>
              <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                Name
              </th>
              <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                Aktion
              </th>
            </tr>
          </thead>
          <tbody>
          @forelse($categories as $category)
            <tr>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                {{ $category->name }}
              </td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <div class="flex">
                  <a href="categories/{{ $category->id }}"><i class="fa-solid fa-eye"></i></a>
                  <a href="categories/{{ $category->id }}/edit"><i class="fa-solid fa-pen"></i></a>
                  <form action="categories/{{ $category->id }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" ><i class="fa-solid fa-trash text-red-600"></i></button>
                  </form>
                  
                </div>
              </td>
            </tr>
          @empty
            <p>Keine Kategorien gefunden</p>
          @endforelse
            
          </tbody>
        </table>
      </div>
    </div>
</div>
</x-app-layout>