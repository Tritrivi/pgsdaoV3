@extends('layouts.app', ['page' => __('Personnel'), 'pageSlug' => 'personnel'])

@section('content')

<h3>Modification</h3>
<form action="{{ route('users.update', ['user' => $user->id]) }}" method="POST" enctype="multipart/form-data">
  @method('PATCH')
  @include('users.form')
    <div class='text-center'>
      <button type="submit" class="btn btn-primary my-3">Sauvegarder les informations</button>
    </div>
</form>

<div class="alert alert-danger">
    <span><b> </b> This is a <b>PRO</b> feature!</span>
</div>

@endsection