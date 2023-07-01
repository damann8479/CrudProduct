<x-app-layout>
  <div class="bg-white rounded-xl p-2">
    <form action="/users/{{ $user->id }}" method="POST" multiple="multiple">
      @csrf
      @method('PUT')
      <div >
        <label class="block" for="">User:</label>
        <x-input type="text" name="name" value="{{old('name') ?? $user->name}}"  />
        @error('name') <small class="text-red-600">{{ $message }}</small> @enderror
      </div>
      <div >
        <label class="block" for="">Kategorien:</label>
       <select name="users[]" id="users" >
        <option value="">Rolle hinzufügen/ändern</option>
        @forelse($roles as $role)
            <option value="{{ $role->id }}" {{ in_array($role->id, $user->roles->pluck('id')->toArray()) ? 'selected' : '' }}>
                {{ $role->name }}
        </option>
          @empty
          @endforelse
        </select>
      </div>
      <x-button>Ändern</x-button>
    </form>
  </div>
</x-app-layout>