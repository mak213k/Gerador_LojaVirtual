<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    public function index()
    {
        $products = Products::latest()->paginate(10);

        return Inertia::render('Products/Index', ['Products' => $products]);
    }

    public function store(Request $request)
    {
        Products::create(
            Request::validate([
                'title' => ['required', 'max:90'],
                'description' => ['required'],
            ])
        );

        return Redirect::route('products.index');
    }

    public function show(Post $post)
    {
        //
    }

    public function edit(Post $post)
    {
        return Inertia::render('Post/Edit', [
            'post' => [
                'id' => $post->id,
                'title' => $post->title,
                'description' => $post->description
            ]
        ]);
    }

    public function update(Request $request, Post $post)
    {
        $data = Request::validate([
                'title' => ['required', 'max:90'],
                'description' => ['required'],
            ]);
        $post->update($data);
        

        return Redirect::route('posts.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        
        return Redirect::route('posts.index');
    }


}
