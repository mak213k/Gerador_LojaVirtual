<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Midium;
use App\Models\Post;
use App\Models\Section;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Midium::all();
        $posts = Post::all()->take(3);
        $section = Section::all()->take(1);
        return view('Hbase/Home/src/xamppAplimare_index', compact('section', $section,'sliders', $sliders, 'posts', $posts));
    }
}
