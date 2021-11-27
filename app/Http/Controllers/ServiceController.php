<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();

        return view('services.index', compact('services'));
    }
 
      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
 
    public function create()
    {
        $service = new Service();

        return view('services.create',compact('service'));
    }
 
      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
 
    public function store()
    { 

        $service = Service::create([
            'libelleService'=> request('libelleService'),
            ]);
   
         return redirect('services')->with('message', 'service bien ajouté.');
    }
 
 
   /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 
    public function edit(Service $service)
    {
         return view('services.edit', compact('service'));
    }
 
       /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 
    public function update(Service $service)
    {
        $service->update([
            'libelleService'=> request('libelleService'),
        ]);

        return redirect('services')->with('message', 'Modification effectuée avec succéss.');
    }
 
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 
    public function destroy(Service $service)
    {
        $service->delete();

        return redirect('services')->with('messagealert','supprimer');
    }
 
}
