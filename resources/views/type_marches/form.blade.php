@csrf
<div class="content">
        <div class="row">

             <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8">
                                <h4 class="card-title">Type Marhé</h4>
                            </div>
                        </div>
                    </div>
                <div class="card-body">



            <div class="content">
                <div class="container-fluid">
                <hr>

                <div class="form-group row">
                    <label for="text" class="col-sm-2 col-form-label">Libelle Type Marché</label>
                        <div class="col-sm-10">
                    <input type="text" class="form-control @error('libelleTypeMarche') is-invalid @enderror" name="libelleTypeMarche" placeholder="Rentrez le libelle..." value="{{ old('libelleTypeMarche') ?? $type_marche->libelleTypeMarche }}" autofocus  required/>
                    @error('libelleTypeMarche')
                        <div class="invalid-feedback">
                            {{ $errors->first('libelleTypeMarche')}}
                        </div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="text" class="col-sm-2 col-form-label">Delaie du type</label>
                        <div class="col-sm-10">
                    <input type="text" class="form-control @error('delaieTypeMarche') is-invalid @enderror" name="delaieTypeMarche" placeholder="Rentrez le délaie..." value="{{ old('delaieTypeMarche') ?? $type_marche->delaieTypeMarche }}" autofocus  required/>
                    @error('delaieTypeMarche')
                        <div class="invalid-feedback">
                            {{ $errors->first('delaieTypeMarche')}}
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
