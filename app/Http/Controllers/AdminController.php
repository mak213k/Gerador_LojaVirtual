<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
/*use App\Http\Controllers\Controller;*/
use Illuminate\Support\Facades\Redirect;
//use Illuminate\Support\Facades\Request;

//use Illuminate\Http\Request;



class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $Admin = Admin::latest()->paginate(5);
        
        return view('admin.Admin.index', compact('admin', $admin))
        ->with('i', (request()->input('page', 1) - 1) * 5);
        
       

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admin = Admin::all();
        return view('admin.Admin.create', compact('admin', $admin));
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
        $show = Admin::create($request->all());
   
        return redirect()->route('admin.admin.index')
        ->with('success', 'Gravado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        return view('admin.admin.show', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        
        return view('admin.admin.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        
        $request->validate([
           'title' => 'required|max:255',
           'description' => 'required|max:255', 
        ]);

        $admin->update($request->all());

        return redirect()->route('Admin.index')
                ->with('success', 'Salvo com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        $admin->delete();

        return redirect()->route('Admin.index')
            ->with('success', 'Deletado com sucesso');
    }
}