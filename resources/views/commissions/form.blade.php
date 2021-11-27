@csrf
<div class="content">
        <div class="row">

             <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8">
                                <h4 class="card-title">Commissions</h4>
                            </div>
                        </div>
                    </div>
                <div class="card-body">



            <div class="content">
                <div class="container-fluid">
                <hr>

                  <div class="form-group row">
                      <label for="text" class="col-sm-2 col-form-label">Libelle Commission</label>
                          <div class="col-sm-10">
                      <input type="text" class="form-control @error('libelleCommission') is-invalid @enderror" name="libelleCommission" placeholder="Rentrez le libelle..." value="{{ old('libelleCommission') ?? $commission->libelleCommission }}" autofocus  required/>
                      @error('libelleCommission')
                          <div class="invalid-feedback">
                              {{ $errors->first('libelleCommission')}}
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