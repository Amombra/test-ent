@extends('layouts.default')
@section('content')
    <br>
    <br>
    <div class="content">
        <div class="row">
            <div class="col-xl-12">
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Ajouter un vehicule</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full ">
                        <div class="py-3">
                            <form method="POST" action="{{ route('cars.store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <input type="text" name="brand" class="form-control @error('brand') is-invalid @enderror"
                                        id="brand" value="{{ old('brand') ?? '' }}" placeholder="Marque">
                                    @error('brand')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="text" name="model"
                                        class="form-control @error('model') is-invalid @enderror" id="model"
                                        value="{{ old('model') ?? '' }}" placeholder="Entrer le modèle">
                                    @error('model')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <br>
                                <div class="form-group">
                                    <input type="text" name="year_manufacture"
                                        class="form-control @error('year_manufacture') is-invalid @enderror" id="year_manufacture"
                                        value="{{ old('year_manufacture') ?? '' }}" placeholder="année_de_fabrication">
                                    @error('year_manufacture')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <br>
                                <div class="form-group">
                                    <input type="text" name="serial_number"
                                        class="form-control @error('serial_number') is-invalid @enderror" id="serial_number"
                                        value="{{ old('serial_number') ?? '' }}" placeholder="numéro de série">
                                    @error('serial_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <br>
                                <div class="form-group">
                                    <input type="text" name="mileage"
                                        class="form-control @error('mileage') is-invalid @enderror" id="mileage"
                                        value="{{ old('mileage') ?? '' }}" placeholder="kilométrage">
                                    @error('mileage')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <br>
                                <div class="form-group">
                                    <input type="text" name="fuel_type"
                                        class="form-control @error('fuel_type') is-invalid @enderror" id="fuel_type"
                                        value="{{ old('fuel_type') ?? '' }}" placeholder="type_de_carburant">
                                    @error('fuel_type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <br>
                                <div class="form-group">
                                    <small style="color: grey;font-size: .875rem;"><i>Selectionnez un utilisateur</i></small>
                                    <select class="form-control @error('user_id') is-invalid @enderror"
                                        name="user_id" id="user_id">


                                        @foreach ($users as $user)
                                            <option class="form-control" value="{{ $user->id }}"
                                                selected>
                                                {{ $user->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    
                                </div>


                                


                                <button type="submit" class="btn btn-sm btn-success"> Enregistrer</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
