@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="bg-white shadow-md rounded p-6">
    <h1 class="text-2xl font-bold mb-4">Welcome to Warehouse Inventory System</h1>
    <nav class="flex justify-center mb-6">
        <a href="{{ route('inventories.index') }}" class="text-blue-500 hover:underline mx-4">Manage Inventory</a>
        <a href="{{ route('settings') }}" class="text-blue-500 hover:underline mx-4">Settings</a>
    </nav>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-gray-100 p-4 rounded shadow-md border-l-4 border-blue-500">
            <img src="{{ asset('images/inventory.jpg') }}" alt="Inventory" class="w-full h-32 object-cover rounded mb-4">
            <h2 class="text-lg font-bold">Manage Inventories</h2>
            <p class="text-gray-700">Add, edit, and delete inventory items.</p>
            <a href="{{ route('inventories.create') }}" class="mt-4 inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Inventory</a>
        </div>
        <div class="bg-gray-100 p-4 rounded shadow-md border-l-4 border-blue-500">
            <img src="{{ asset('images/reports.jpg') }}" alt="Reports" class="w-full h-32 object-cover rounded mb-4">
            <h2 class="text-lg font-bold">View Reports</h2>
            <p class="text-gray-700">Generate and view inventory reports.</p>
        </div>
        <div class="bg-gray-100 p-4 rounded shadow-md border-l-4 border-blue-500">
            <img src="{{ asset('images/settings.jpg') }}" alt="Settings" class="w-full h-32 object-cover rounded mb-4">
            <h2 class="text-lg font-bold">Settings</h2>
            <p class="text-gray-700">Configure system settings and preferences.</p>
        </div>
    </div>
</div>
@endsection
