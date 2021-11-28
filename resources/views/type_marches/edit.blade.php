@extends('layouts.app', ['page' => __('Type Marche'), 'pageSlug' => 'type_marche'])

@section('content')

<h3>Modification</h3>
<form action="{{ route('type_marches.update', ['type_marche' => $type_marche->id]) }}" method="POST" enctype="multipart/form-data">
  @method('PATCH')
  @include('type_marches.form')
    <div class='text-center'>
      <button type="submit" class="btn btn-primary my-3">Sauvegarder les informations</button>
    </div>
</form>

<div class="alert alert-danger">
    <span><b> </b> This is a <b>PRO</b> feature!</span>
</div>

@endsection
