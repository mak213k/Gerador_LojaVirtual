<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SectionController extends Controller
{

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $section = Section::latest()->paginate(5);
        
        return view('admin.section.index',compact('section', $section))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        //$section = Section::all();
        return view('admin.section.create');
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
            //'image_position_left' => 'required',
            //'display' => 'required',
            //'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            //'name' => 'required',
            
        ]);
        
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        
        Section::create($input);
   
        return redirect()->route('admin.section.index')
        ->with('success', 'Gravado com sucesso');
    }

      /**
     * Display the specified resource.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function show(Section $section)
    {
        return view('admin.section.show', compact('section'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Section $section)
    {
        
        return view('admin.section.edit', compact('section'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Section $section)
    {
        
        $request->validate([
           'title' => 'required|max:255',
           'description' => 'required|max:255', 
           //'image_position_left' => 'required',
           //'display' => 'required',
        ]);
        
        $input = $request->all();
        
        $input['display'] = $request->input('display') ? '1' : '0';

        $input['image_position_left'] = $request->input('image_position_left') ? '1' : '0';
        
        if($image = $request->file('image')){
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
        
        //$section->display = (! request()->has('display') == 'on' ? '1' : '0');
        //$section->image_position_left = (! request()->has('image_position_left') == 'on' ? '1' : '0');
        
        $section->update($input);

        return redirect()->route('section.index')
                ->with('success', 'Salvo com sucesso');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Section $section)
    {
        $section->delete();

        return redirect()->route('section.index')
            ->with('success', 'Deletado com sucesso');
    }
    
}
