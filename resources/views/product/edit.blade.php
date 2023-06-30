<x-app-layout>
  <div class="bg-white rounded-xl p-2">
    <form action="/products/{{ $product->id }}" method="POST">
      @csrf
      @method('PUT')
      <div >
        <label class="block" for="">ProduktName:</label>
        <x-input type="text" name="name" value="{{old('name') ?? $product->name}}"  />
        @error('name') <small class="text-red-600">{{ $message }}</small> @enderror
      </div>
      <div >
        <label class="block" for="">Preis:</label>
        <x-input type="text" name="price" value="{{old('price') ?? $product->price }}"  />
        @error('price') <small class="text-red-600">{{ $message }}</small> @enderror
      </div>
      <div >
        <label class="block" for="">Gewicht:</label>
        <x-input type="number" name="weight" value="{{old('weight') ?? $product->weight }}"  />
        @error('weight') <small class="text-red-600">{{ $message }}</small> @enderror
      </div>
      <div >
        <label class="block" for="">Beschreibung:</label>
        <textarea  id="" name="description" cols="90" rows="5" >{{old('description') ?? $product->description }}</textarea>
        @error('description') <small class="text-red-600">{{ $message }}</small> @enderror
      </div>
      <x-button>Ändern</x-button>
    </form>
  </div>
</x-app-layout>