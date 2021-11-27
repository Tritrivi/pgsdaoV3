@extends('layouts.app', ['page' => __('Service'), 'pageSlug' => 'service'])

@section('content')

<h3>Ajout</h3>
<div class="content">

            <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
            @include('services.form')
                <div class='text-center'>
                <button type="submit" class="btn btn-primary my-3">Ajouter un service</button>
                </div>
            </form>     
</div>

<div class="alert alert-danger">
    <span><b> </b> This is a <b>PRO</b> feature!</span>
</div>

@endsection