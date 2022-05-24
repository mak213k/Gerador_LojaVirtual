<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
/*use App\Http\Controllers\Controller;*/
use Illuminate\Support\Facades\Redirect;
//use Illuminate\Support\Facades\Request;

//use Illuminate\Http\Request;



class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $contact = Contact::latest()->paginate(5);
        
        return view('admin.contact.index', compact('contact', $contact))
        ->with('i', (request()->input('page', 1) - 1) * 5);
        
       

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contact = Contact::all();
        return view('admin.contact.create', compact('contact', $contact));
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
            'title' => 'required|max:50',
            'description' => 'required|max:50',
            'label_name' => 'required|max:50',
            'label_email' => 'required|max:50',
            'label_text' => 'required|max:50',
            'label_btn_send' => 'required|max:10',
            'label_btn_clean' => 'required|max:10',
            'name_corp' => 'required|max:255',
            'address_corp' => 'required|max:255',
            'city_country_corp' => 'required|max:255',
            'phone_corp' => 'required|max:20',
            'publish_at' => 'required',
        ]);
        $show = Contact::create($request->all());
   
        return redirect()->route('admin.contact.index')
        ->with('success', 'Gravado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.contact.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        
        return view('admin.contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        
        $request->validate([
            'title' => 'required|max:50',
            'description' => 'required|max:50',
            'label_name' => 'required|max:50',
            'label_email' => 'required|max:50',
            'label_text' => 'required|max:50',
            'label_btn_send' => 'required|max:10',
            'label_btn_clean' => 'required|max:10',
            'name_corp' => 'required|max:255',
            'address_corp' => 'required|max:255',
            'city_country_corp' => 'required|max:255',
            'phone_corp' => 'required|max:20', 
            'publish_at' => 'required',
        ]);

        $contact->update($request->all());

        return redirect()->route('contact.index')
                ->with('success', 'Salvo com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('contact.index')
            ->with('success', 'Deletado com sucesso');
    }
}
