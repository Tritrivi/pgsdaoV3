@extends('layouts.app', ['page' => __('Personnel'), 'pageSlug' => 'personnel'])

@section('content')

<h3>Ajout</h3>
<div class="content">

            <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
            @include('users.form')
                <div class='text-center'>
                <button type="submit" class="btn btn-primary my-3">Ajouter un personnel</button>
                </div>
            </form>     
</div>

<div class="alert alert-danger">
    <span><b> </b> This is a <b>PRO</b> feature!</span>
</div>

@endsection