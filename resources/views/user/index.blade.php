<x-app-layout>
<div class=bg-white rounded-xl>
    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
      <div
        class="inline-block min-w-full shadow-md rounded-lg overflow-hidden"
      >
      <div class="flex justify-between p-2">
      <p>User: {{ $users->count() }}</p>
      @role('admin')
        <a href="products/create" class="bg-gray-800 p-2 text-white rounded-lg">User anlegen</a>
        @endrole
      </div>
        <table class="min-w-full leading-normal">
          <thead>
            <tr>
              <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                Name
              </th>
              <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                Rolle
              </th>
              <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
              Aktion
              </th>
            </tr>
          </thead>
          <tbody>
          @forelse($users as $user)
            <tr>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                {{ $user->name }}
              </td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
               {{ $user->roles->pluck('name')->implode(',') }}
              </td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <div class="flex">
                  <a href="users/{{ $user->id }}"><i class="fa-solid fa-eye"></i></a>
                @role('admin')
                  <a href="users/{{ $user->id }}/edit"><i class="fa-solid fa-pen"></i></a>
                  <form action="users/{{ $user->id }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" ><i class="fa-solid fa-trash text-red-600"></i></button>
                  </form>
                  @endrole
                </div>
              </td>
            </tr>
          @empty
            <p>Keine User gefunden</p>
          @endforelse
            
          </tbody>
        </table>
      </div>
    </div>
</div>
</x-app-layout>