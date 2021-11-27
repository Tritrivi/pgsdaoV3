@csrf
<div class="content">
        <div class="row">

             <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8">
                                <h4 class="card-title">Services</h4>
                            </div>
                        </div>
                    </div>
                <div class="card-body">



            <div class="content">
                <div class="container-fluid">
                <hr>
                        <div class="form-group row">
                            <label for="text" class="col-sm-2 col-form-label">Libelle Service</label>
                            <div class="col-sm-10">
                                <select class="form-control @error('libelleService') is-invalid @enderror" name="libelleService" id="libelleService">
                                <option value="Informatique" {{ $service->libelleService == "Informatique" ? 'selected' : '' }}>Informatique</option>
                                <option value="Marche" {{ $service->libelleService == "Marche" ? 'selected' : '' }}> Marche </option>
                                <option value="Marche-Super" {{ $service->libelleService == "Marche-Super" ? 'selected' : '' }}> Marche-Super </option>
                                </select>
                                @error('libelleService')
                                <div class="invalid-feedback">
                                    {{ $errors->first('libelleService')}}
                                </div>   
                                @enderror
                            </div>
                        </div>
                </div>
            </div>



             </div>

            <div class="card-footer py-4">
                <nav class="d-flex justify-content-end" aria-label="...">

                </nav>
            </div>

        </div>
    </div>
  </div>
</div>