@extends('layouts.app')

@section('title', $inventory->name)

@section('content')
<div class="bg-white shadow-md rounded p-6">
    <h1 class="text-2xl font-bold mb-4">{{ $inventory->name }}</h1>
    <p><strong>Quantity:</strong> {{ $inventory->quantity }}</p>
    <p><strong>Description:</strong> {{ $inventory->description ?: 'No description available' }}</p>
    <div class="mt-4">
        <a href="{{ route('inventories.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Back to Inventories</a>
    </div>
</div>
@endsection
