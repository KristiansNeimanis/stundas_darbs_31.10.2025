<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::all(); // ✅
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'nullable'
        ]);

        Products::create($validated); // ✅

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully!');
    }

    public function show(Products $product) // ✅
    {
        return view('products.show', compact('product'));
    }

    public function edit(Products $product) // ✅
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Products $product) // ✅
    {
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'nullable'
        ]);

        $product->update($validated); // ✅

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully!');
    }

    public function destroy(Products $product) // ✅
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully!');
    }
}
