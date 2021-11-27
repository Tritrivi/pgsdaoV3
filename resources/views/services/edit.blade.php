@extends('layouts.app', ['page' => __('Service'), 'pageSlug' => 'service'])

@section('content')

<h3>Modification</h3>
<form action="{{ route('services.update', ['service' => $service->id]) }}" method="POST" enctype="multipart/form-data">
  @method('PATCH')
  @include('services.form')
    <div class='text-center'>
      <button type="submit" class="btn btn-primary my-3">Sauvegarder les informations</button>
    </div>
</form>

<div class="alert alert-danger">
    <span><b> </b> This is a <b>PRO</b> feature!</span>
</div>

@endsection