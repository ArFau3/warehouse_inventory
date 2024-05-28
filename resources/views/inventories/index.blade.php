@extends('layouts.app')

@section('title', 'Inventories')

@section('content')
<div class="bg-white shadow-md rounded p-6">
    <h1 class="text-2xl font-bold mb-4">Inventories</h1>
    <a href="{{ route('inventories.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Add Inventory</a>
    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="py-2 px-4 border-b">Name</th>
                <th class="py-2 px-4 border-b">Quantity</th>
                <th class="py-2 px-4 border-b">Description</th>
                <th class="py-2 px-4 border-b">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inventories as $inventory)
            <tr>
                <td class="py-2 px-4 border-b">{{ $inventory->name }}</td>
                <td class="py-2 px-4 border-b">{{ $inventory->quantity }}</td>
                <td class="py-2 px-4 border-b">{{ $inventory->description }}</td>
                <td class="py-2 px-4 border-b">
                    <a href="{{ route('inventories.show', $inventory->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View</a>
                    <a href="{{ route('inventories.edit', $inventory->id) }}" class="ml-2 bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                    <form action="{{ route('inventories.destroy', $inventory->id) }}"
                    method="POST" class="inline-block ml-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
