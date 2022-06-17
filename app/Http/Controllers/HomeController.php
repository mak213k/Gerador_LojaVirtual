<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Midium;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Midium::all();
        $posts = Post::all()->take(3);

        return view('Hbase/Home/src/xamppAplimare_index', compact('sliders', $sliders, 'posts', $posts));
    }
}
