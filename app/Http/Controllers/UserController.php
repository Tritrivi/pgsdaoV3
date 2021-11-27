<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;
use App\Models\Commission;

class UserController extends Controller
{
   /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    /**public function index(User $model)
    {
        return view('users.index', ['users' => $model->paginate(15)]);
    }*/

    public function index()
   {
        $users = User::all();
        $services = Service::all();
        $commissions = Commission::all();

        return view('users.index', compact('users', 'services','commissions'));
   }

      /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

   public function create()
   {
        $user = new User();
        $services = Service::all();
        $commissions = Commission::all();

        return view('users.create',compact('user', 'services','commissions'));
   }

     /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

   public function store()
   {
     $password = request('password');
     
     $user = User::create([
        'name'=> request('name'),
        'prenomUser' => request('prenomUser'),
        'numUser'=> request('numUser'),
        'password'=>  Hash::make($password),
        'email'=> request('email'),
        'service_id'=> request('service_id'),
        'commission_id'=> request('commission_id')
        ]);

     return redirect('users')->with('message', 'personnel bien ajouté.');
   }


  /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

   public function edit(User $user)
   {
        $services = Service::all();
        $commissions = Commission::all();
        return view('users.edit', compact('user', 'services','commissions'));
   }

      /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

   public function update(User $user)
   {
     $password = request('password');

     $user->update([
        'name'=> request('name'),
        'prenomUser' => request('prenomUser'),
        'numUser'=> request('numUser'),
        'password'=>  Hash::make($password),
        'service_id'=> request('service_id'),
        'email'=> request('email'),
        'commission_id'=> request('commission_id'),
        ]);

      return redirect('users')->with('message', 'Modification effectuée avec succéss.');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

   public function destroy(User $user)
   {
        $user->delete();

        return redirect('users')->with('messagealert','supprimer');

   }

    public function test()
    {
        return view('test');
    }
}
