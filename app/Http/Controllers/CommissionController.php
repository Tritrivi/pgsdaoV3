<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Commission;

class CommissionController extends Controller
{
    public function index()
    {
        $commissions = Commission::all();

        return view('commissions.index', compact('commissions'));
    }
 
      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
 
    public function create()
    {
        $commission = new Commission();

        return view('commissions.create',compact('commission'));
    }
 
      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
 
    public function store()
    { 

        $commission = Commission::create([
            'libelleCommission'=> request('libelleCommission'),
            ]);
   
         return redirect('commissions')->with('message', 'commission bien ajoutée.');
    }
 
 
   /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 
    public function edit(Commission $commission)
    {
         return view('commissions.edit', compact('commission'));
    }
 
       /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 
    public function update(Commission $commission)
    {
        $commission->update([
            'libelleCommission'=> request('libelleCommission'),
        ]);

        return redirect('commissions')->with('message', 'Modification effectuée avec succéss.');
    }
 
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 
    public function destroy(Commission $commission)
    {
        $commission->delete();

        return redirect('commissions')->with('messagealert','supprimer');
    }
 
}
