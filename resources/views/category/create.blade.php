<x-app-layout>
  <div class="bg-white rounded-xl p-2">
    <form action="/categories" method="POST">
      @csrf
      <div >
        <label class="block" for="">Name:</label>
        <x-input type="text" name="name" value="{{old('name')}}"  />
        @error('name') <small class="text-red-600">{{ $message }}</small> @enderror
      </div>
      <x-button>Anlegen</x-button>
    </form>
  </div>
</x-app-layout>