@extends('layouts.app', ['page' => __('Personnel'), 'pageSlug' => 'personnel'])

@section('content')

     <div class="content">
        <div class="row">

             <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8">
                                <h4 class="card-title">Personnels</h4>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary">Ajouter un personnel</a>
                            </div>
                        </div>
                    </div>
                <div class="card-body">

                <div class="">
                    <table class="table tablesorter " id="">

                        <thead class=" text-primary">
                            <tr>
                            <th scope="col">Numero</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prénom</th>
                            <th scope="col">Email</th>
                            <th scope="col">Téléphone</th>
                            <th scope="col"></th>
                            </tr>
                        </thead>

                        <tbody>
                             @foreach($users as $key=>$user)
                                    <tr>
                                    <td scope="row"> {{++$key}} </td>
                                    <td scope="row"> {{$user->name}} </td>
                                    <td scope="row"> {{$user->prenomUser}} </td>
                                    <td scope="row"> {{$user->email}} </td>
                                    <td scope="row"> {{$user->numUser}} </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="{{ route('users.edit', ['user' => $user->id]) }}">Modifier</a>
                                                <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item"><span> Supprimer </span></button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                    </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
             </div>

            <div class="card-footer py-4">
                <nav class="d-flex justify-content-end" aria-label="...">

                </nav>
            </div>

        </div>
        <div class="alert alert-danger">
            <span><b> </b> This is a <b>PRO</b> feature!</span>
        </div>
    </div>
  </div>
</div>

@endsection