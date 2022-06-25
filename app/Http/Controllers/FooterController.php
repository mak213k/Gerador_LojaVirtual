<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;
/*use App\Http\Controllers\Controller;*/
use Illuminate\Support\Facades\Redirect;
//use Illuminate\Support\Facades\Request;

//use Illuminate\Http\Request;



class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $footer = Footer::latest()->paginate(5);
        
        return view('admin.footer.index', compact('footer', $footer))
        ->with('i', (request()->input('page', 1) - 1) * 5);
        
       

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $footer = Footer::all();
        return view('admin.footer.create', compact('footer', $footer));
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
            'brand' => 'required|max:255',
            'description' => 'required|max:255',
            'author' => 'required',
        ]);
        
        $input = $request->all();

        if ($image = $request->file('logo')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        
        Footer::create($input);
   
        return redirect()->route('admin.footer.index')
        ->with('success', 'Gravado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Footer $footer)
    {
        return view('admin.footer.show', compact('footer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Footer $footer)
    {
        
        return view('admin.footer.edit', compact('footer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Footer $footer)
    {
        
        $request->validate([
           'brand' => 'required|max:255',
           'description' => 'required|max:255', 
           'author' => 'required',
        ]);

        

        $input['active'] = $request->input('active') ? '1' : '0';

        if($image = $request->file('logo')){
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['logo'] = "$profileImage";
        }else{
            unset($input['logo']);
        }
        
        $footer->update($input);

        return redirect()->route('footer.index')
                ->with('success', 'Salvo com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Footer $footer)
    {
        $footer->delete();

        return redirect()->route('footer.index')
            ->with('success', 'Deletado com sucesso');
    }
}
