<?php

namespace App\Http\Controllers;

use App\Models\Midium;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MidiumController extends Controller
{

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $midium = Midium::latest()->paginate(5);
        
        return view('admin.midium.index',compact('midium', $midium))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        //$midium = Midium::all();
        return view('admin.midium.create');
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
        
        Midium::create($input);
   
        return redirect()->route('admin.midium.index')
        ->with('success', 'Gravado com sucesso');
    }

      /**
     * Display the specified resource.
     *
     * @param  \App\Midium  $midium
     * @return \Illuminate\Http\Response
     */
    public function show(Midium $midium)
    {
        return view('admin.midium.show', compact('midium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Midium $midium)
    {
        
        return view('admin.midium.edit', compact('midium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Midium $midium)
    {
        
        $request->validate([
           'title' => 'required|max:255',
           'description' => 'required|max:255', 
        ]);

        $input = $request->all();

        if($image = $request->file('image')){
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }

        $midium->update($input);

        return redirect()->route('midium.index')
                ->with('success', 'Salvo com sucesso');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Midium $midium)
    {
        $midium->delete();

        return redirect()->route('midium.index')
            ->with('success', 'Deletado com sucesso');
    }
    
}
