@extends('layouts.app', ['page' => __('Commission'), 'pageSlug' => 'commission'])

@section('content')

<h3>Commission</h3>
<div class="content">

            <form action="{{ route('commissions.store') }}" method="POST" enctype="multipart/form-data">
            @include('commissions.form')
                <div class='text-center'>
                <button type="submit" class="btn btn-primary my-3">Ajouter une commission</button>
                </div>
            </form>     
</div>

<div class="alert alert-danger">
    <span><b> </b> This is a <b>PRO</b> feature!</span>
</div>

@endsection