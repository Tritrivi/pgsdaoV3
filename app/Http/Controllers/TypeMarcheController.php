<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeMarche;

class TypeMarcheController extends Controller
{
    //
    public function index(){
        $type_marches = TypeMarche::all();
        return view('type_marches.index',compact('type_marches'));
    }

    public function create(){
        $type_marche = new TypeMarche();
        return view('type_marches.create',compact('type_marche'));
    }

    public function store(){
        $type_marche = TypeMarche::create([
            'libelleTypeMarche' => request('libelleTypeMarche'),
            'delaieTypeMarche' => request('delaieTypeMarche')
        ]);

        return redirect('type_marches')->with('message','enrégistrement réussi');
    }

    public function edit(TypeMarche $type_marche){
        return view('type_marches.edit',compact('type_marche'));
    }

    public function update(TypeMarche $type_marche){
        $type_marche->update([
            'libelleTypeMarche' => request('libelleTypeMarche'),
            'delaieTypeMarche' => request('delaieTypeMarche')
        ]);

        return redirect('type_marches')->with('message','Modification effectuée avec succes');
    }

    public function destroy(TypeMarche $type_marche){
        $type_marche->delete();

        return redirect('type_marches')->with('message','Suppression effectuée avec succes');
    }
}
