@extends('layout.app')

@section('content')
<div class='bg-slate-200'>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-center mb-8">Scopri le Nostre Ricette</h1>
    
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($recipes as $id => $recipe)
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                <img src="{{ $recipe['image'] }}" alt="{{ $recipe['name'] }}" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold">{{ $recipe['name'] }}</h2>
                    <p class="text-gray-600 mt-2">{{ $recipe['description'] }}</p>
                    <div class="flex justify-between mt-4 text-sm">
                        <span class="bg-gray-200 text-gray-800 px-3 py-1 rounded-full">⏳ {{ $recipe['time'] }}</span>
                        <span class="bg-sky-700 text-white px-3 py-1 rounded-full">🔥 {{ $recipe['difficulty'] }}</span>
                    </div>
                    <a href="{{ url('/recipes/' . $id) }}" class="block text-center mt-4 bg-sky-900 text-white px-4 py-2 rounded-xl hover:bg-gray-600">
                        Vedi Ricetta
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
