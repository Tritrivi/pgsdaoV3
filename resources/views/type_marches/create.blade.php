@extends('layouts.app', ['page' => __('Type Marche'), 'pageSlug' => 'type_marche'])

@section('content')

<h3>Ajout</h3>
<div class="content">

            <form action="{{ route('type_marches.store') }}" method="POST" enctype="multipart/form-data">
            @include('type_marches.form')
                <div class='text-center'>
                <button type="submit" class="btn btn-primary my-3">Ajouter un type de marché</button>
                </div>
            </form>
</div>

<div class="alert alert-danger">
    <span><b> </b> This is a <b>PRO</b> feature!</span>
</div>

@endsection
