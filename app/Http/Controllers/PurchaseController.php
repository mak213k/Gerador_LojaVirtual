<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
//use Carbon\Carbon;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchase = Purchase::latest()->paginate(5);
        
        return view('admin.purchase.index', compact('purchase'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$purchase = Purchase::all();
        //$providers = Purchase::;
        return view('admin.purchase.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Purchase::create($request->all());

        return redirect()->route('admin.purchase.index')
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
        return view('admin.purchase.show', compact('purchase'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $purchase = Purchase::find($id);
        //\Carbon\Carbon::createFromTimestamp(strtotime($purchase->date_purchase))->format('d/m/Y \TH:i:s')
        //$purchase->date_purchase = \Carbon\Carbon::parse($purchase->date_purchase)->setTimezone('T')->format('Y-m-dTh:m');
        //dd($purchase->date_purchase);
        return view('admin.purchase.edit', compact('purchase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchase $purchase )
    {
        $purchase->update($request->all());

        return redirect()->route('purchase.index')
                ->with('success', 'Salvo com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Purchase $purchase )
    {
        $purchase->delete();

        return redirect()->route('purchase.index')
        ->with('success', 'Deletado com sucesso');
    }
}
