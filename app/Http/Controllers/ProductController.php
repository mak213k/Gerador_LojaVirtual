<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function index()
    {
        //$product = Product::latest()->paginate(5);
        $product = Product::latest()->paginate(5);
        $category = Category::all();


        return view('admin.product.index', compact('product', 'category'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$product = Product::all();
        $category = Category::all();
        
        return view('admin.product.create')->with(['category' => $category]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:50',
            'description' => 'required|max:50',
            'publish_at' => 'required',
        ]);
        
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'productImage/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Product::create($input);

        return redirect()->route('admin.products.index')
        ->with('success', 'Gravado com sucesso');
    }

    public function show(Product $product)
    {
        return view('admin.product.show', compact('product'));
    }

    public function edit($id)
    {   
        $product = Product::find($id);
        $category = Category::all();
        
        return view('admin.product.edit', compact('product', 'category'));
    }

    public function update(Request $request, Product $product)
    {
        
        $request->validate([
            'title' => 'required|max:50',
            'description' => 'required|max:50',
            //'publish_at' => 'required',
        ]);
        
        
        $input = $request->all();

        if($image = $request->file('image')){
            $destinationPath = 'productImage/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
        
        $product->update($input);

        return redirect()->route('product.index')
                ->with('success', 'Salvo com sucesso');
    }

    public function destroy(Product $product)
    {
        
        $product->delete();
        
        return redirect()->route('product.index')
        ->with('success', 'Deletado com sucesso');
    }


}
