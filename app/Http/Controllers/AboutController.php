<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
/*use App\Http\Controllers\Controller;*/
use Illuminate\Support\Facades\Redirect;
//use Illuminate\Support\Facades\Request;

//use Illuminate\Http\Request;



class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $about = About::latest()->paginate(5);
        
        return view('admin.about.index', compact('about', $about))
        ->with('i', (request()->input('page', 1) - 1) * 5);
        
       

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $about = About::all();
        return view('admin.about.create', compact('about', $about));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:255',
        ]);
        $show = About::create($request->all());
   
        return redirect()->route('admin.about.index')
        ->with('success', 'Show is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.about.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        
        return view('admin.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        
        $request->validate([
           'title' => 'required|max:255',
           'description' => 'required|max:255', 
        ]);

        $about->update($request->all());

        return redirect()->route('about.index')
                ->with('success', 'Salvo com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        $about->delete();

        return redirect()->route('about.index')
            ->with('success', 'Deletado com sucesso');
    }
}
