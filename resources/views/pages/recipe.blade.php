@extends('layout.app')

@section('content')
<div class='bg-slate-200'>
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="{{ $recipe['image'] }}" alt="{{ $recipe['name'] }}" class="w-full h-64 object-cover">
            <div class="p-6">
                <h1 class="text-3xl font-bold">{{ $recipe['name'] }}</h1>
                <p class="text-gray-600 mt-2">{{ $recipe['description'] }}</p>
                
                <div class="flex justify-between mt-4 text-sm">
                    <span class="bg-gray-200 text-gray-800 px-3 py-1 rounded-full">⏳ Tempo: {{ $recipe['time'] }}</span>
                    <span class="bg-sky-900 text-white px-3 py-1 rounded-full">🔥 Difficoltà: {{ $recipe['difficulty'] }}</span>
                </div>
    
                <h2 class="text-2xl font-semibold mt-6">🛒 Ingredienti</h2>
                <ul class="list-disc list-inside mt-2 space-y-1">
                    @foreach ($recipe['ingredients'] as $ingredient)
                        <li>{{ $ingredient }}</li>
                    @endforeach
                </ul>
    
                <h2 class="text-2xl font-semibold mt-6">🍳 Preparazione</h2>
                <ol class="list-decimal list-inside mt-2 space-y-1">
                    @foreach ($recipe['steps'] as $step)
                        <li>{{ $step }}</li>
                    @endforeach
                </ol>
    
                <div class="mt-6">
                    <a href="{{ url('/') }}" class="block text-center bg-sky-700 text-white px-4 py-2 rounded-lg hover:bg-gray-600">
                        Torna alla Home
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
