@csrf
<div class="content">
        <div class="row">

             <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8">
                                <h4 class="card-title">Personnels</h4>
                            </div>
                        </div>
                    </div>
                <div class="card-body">



            <div class="content">
                <div class="container-fluid">
                <hr>
                       <div class="form-group row">
                    <label for="text" class="col-sm-2 col-form-label">Nom</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Rentrez le nom de l'utilisateur..." value="{{ old('name') ?? $user->name }}" autofocus  required/>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $errors->first('name')}}
                            </div>   
                        @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                    <label for="text" class="col-sm-2 col-form-label">Prénom</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control @error('prenomUser') is-invalid @enderror" name="prenomUser" placeholder="Rentrez le prenom de l'utilisateur..." value="{{ old('prenomUser') ?? $user->prenomUser }}" autofocus  required/>
                        @error('prenomUser')
                            <div class="invalid-feedback">
                                {{ $errors->first('prenomUser')}}
                            </div>   
                        @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                    <label for="text" class="col-sm-2 col-form-label">Téléphone</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control @error('numUser') is-invalid @enderror" name="numUser" placeholder="Rentrez le tel de l'utilisateur..." value="{{ old('numUser') ?? $user->numUser }}" autofocus  required/>
                        @error('numUser')
                            <div class="invalid-feedback">
                                {{ $errors->first('numUser')}}
                            </div>   
                        @enderror
                        </div>
                    </div>
                      

                    <div class="form-group row">
                    <label for="text" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Rentrez email de l'utilisateur..." value="{{ old('email') ?? $user->email }}" autofocus  required/>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $errors->first('email')}}
                            </div>   
                        @enderror
                        </div>
                    </div>

                   <div class="form-group row">
                    <label for="text" class="col-sm-2 col-form-label">Mot de passe</label>
                        <div class="col-sm-10">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Rentrez le mot de passe de l'utilisateur..." value="{{ old('password') ?? $user->password }}" autofocus  required/>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $errors->first('password')}}
                            </div>   
                        @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                     <label for="text" class="col-sm-2 col-form-label">Service</label>
                        <div class="col-sm-10">
                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                   <!-- <span class="input-group-text"><i class="fas fa-text-height"></i></span>-->
                                </div>
                                <select class="custom-select @error('service_id') is-invalid @enderror" name="service_id">
                                        @foreach($services as $service)
                                    <option value="{{ $service->id }}" {{ $user->service_id = $service->id ? 'selected' : ''}}> {{ $service->libelleService }} </option>
                                    @endforeach
                                </select>
                                @error('service_id')
                                    <div class="invalid-feedback">
                                        {{ $errors->first('service_id')}}
                                    </div>   
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                     <label for="text" class="col-sm-2 col-form-label">Commission</label>
                        <div class="col-sm-10">
                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <!--<span class="input-group-text"><i class="fas fa-text-height"></i></span>-->
                                </div>
                                <select class="custom-select @error('commission_id') is-invalid @enderror" name="commission_id">
                                        @foreach($commissions as $commission)
                                    <option value="{{ $commission->id }}" {{ $user->commission_id = $commission->id ? 'selected' : ''}}> {{ $commission->libelleCommission }} </option>
                                    @endforeach
                                </select>
                                @error('commission_id')
                                    <div class="invalid-feedback">
                                        {{ $errors->first('commission_id')}}
                                    </div>   
                                @enderror
                            </div>
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