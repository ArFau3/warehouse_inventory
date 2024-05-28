<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        $inventories = Inventory::all();
        return view('inventories.index', compact('inventories'));
    }

    public function create()
    {
        return view('inventories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer',
            'description' => 'nullable|string',
        ]);

        Inventory::create($request->all());

        return redirect()->route('inventories.index')->with('success', 'Inventory added successfully');
    }

    public function edit(Inventory $inventory)
    {
        return view('inventories.edit', compact('inventory'));
    }

    public function update(Request $request, Inventory $inventory)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer',
            'description' => 'nullable|string',
        ]);

        $inventory->update($request->all());

        return redirect()->route('inventories.index')->with('success', 'Inventory updated successfully');
    }

    public function destroy(Inventory $inventory)
    {
        $inventory->delete();

        return redirect()->route('inventories.index')->with('success', 'Inventory deleted successfully');
    }

    public function show($id)
    {
    $inventory = Inventory::findOrFail($id);
    return view('inventories.show', compact('inventory'));
    }

}
