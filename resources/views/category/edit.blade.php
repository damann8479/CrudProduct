<x-app-layout>
  <div class="bg-white rounded-xl p-2">
    <form action="/categories/{{ $category->id }}" method="POST">
      @csrf
      @method('PUT')
      <div >
        <label class="block" for="">ProduktName:</label>
        <x-input type="text" name="name" value="{{old('name') ?? $category->name}}"  />
        @error('name') <small class="text-red-600">{{ $message }}</small> @enderror
      </div>
      <x-button>Ändern</x-button>
    </form>
  </div>
</x-app-layout>