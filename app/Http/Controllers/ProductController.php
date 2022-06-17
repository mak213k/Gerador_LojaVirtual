<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    public function index()
    {
        $products = Products::latest()->paginate(5);
        
        return view('admin.products.index', compact('products', $products))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contact = Products::all();
        return view('admin.products.create', compact('products', $products));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:50',
            'description' => 'required|max:50',
            'publish_at' => 'required',
        ]);
        $products = Products::create($request->all());
   
        return redirect()->route('admin.products.index')
        ->with('success', 'Gravado com sucesso');
    }

    public function show(Products $products)
    {
        return view('admin.products.show', compact('products'));
    }

    public function edit(Products $products)
    {
        return view('admin.products.edit', compact('products'));
    }

    public function update(Request $request, Products $products)
    {
        $request->validate([
            'title' => 'required|max:50',
            'description' => 'required|max:50',
            'publish_at' => 'required',
        ]);

        $products->update($request->all());
        

        return redirect()->route('products.index')
                ->with('success', 'Salvo com sucesso');
    }

    public function destroy(Products $products)
    {
        $products->delete();
        
        return Redirect::route('products.index');
    }


}
