<x-app-layout>
  <div class="bg-white rounded-xl p-2">
    <form action="/products" method="POST">
      @csrf
      <div >
        <label class="block" for="">ProduktName:</label>
        <x-input type="text" name="name" value="{{old('name')}}"  />
        @error('name') <small class="text-red-600">{{ $message }}</small> @enderror
      </div>
      <div >
        <label class="block" for="">Preis:</label>
        <x-input type="text" name="price" value="{{old('price')  }}"  />
        @error('price') <small class="text-red-600">{{ $message }}</small> @enderror
      </div>
      <div >
        <label class="block" for="">Gewicht:</label>
        <x-input type="number" name="weight" value="{{old('weight') }}"  />
        @error('weight') <small class="text-red-600">{{ $message }}</small> @enderror
      </div>
      <div >
        <label class="block" for="">Beschreibung:</label>
        <textarea  id="" name="description" cols="90" rows="5" >{{old('description') }}</textarea>
        @error('description') <small class="text-red-600">{{ $message }}</small> @enderror
      </div>
      <x-button>Anlegen</x-button>
    </form>
  </div>
</x-app-layout>