<x-app-layout>
<div class="bg-white p-2 rounded-xl">
    <h1 class="text-xl">{{ $category->name }}</h1>
  </div>
  <div class="mt-5">
    <a class="bg-gray-800 p-2 text-white rounded-lg " href="{{ url()->previous() }}">Zurück</a>
  </div>
</x-app-layout>