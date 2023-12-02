@extends('layouts.default')
@section('content')
    <br>
    <div class="content">
        <div class="row">
            <div class="col-xl-12">
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Détails de l'utilisateur</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full ">
                        <div class="py-3">
                            <form
                             action="{{ route('cars.update', $cars) }}" method="POST" enctype="multipart/form-data">

                             @csrf
                             @method('PUT')

                                <div class="form-group">
                                    <label for="">Marque </label>
                                    <input type="text" name="brand" class="form-control"
                                        id="brand" value="{{ $cars->brand }}">
                                </div>

                                <br>
                                <div class="form-group">
                                    <label for="">Modèle </label>
                                    <input type="text" name="model"
                                        class="form-control " id="model"
                                        value="{{ $cars->model }}">
                                </div>

                                <br>
                                <div class="form-group">
                                    <label for="">Anneé de fabrication </label>
                                    <input type="text" name="year_manufacture"
                                        class="form-control " id="year_manufacture"
                                        value="{{ $cars->year_manufacture }}">
                                </div>

                                <br>
                                <div class="form-group">
                                    <label for="">Numero de serie </label>
                                    <input type="text" name="serial_number"
                                        class="form-control " id="serial_number"
                                        value="{{ $cars->serial_number }}">
                                </div>

                                <br>
                                <div class="form-group">
                                    <label for="">kilometrage </label>
                                    <input type="text" name="mileage"
                                        class="form-control " id="mileage"
                                        value="{{ $cars->mileage }}">
                                </div>

                                <br>
                                <div class="form-group">
                                    <label for="">Type de carburant </label>
                                    <input type="text" name="fuel_type"
                                        class="form-control " id="fuel_type"
                                        value="{{ $cars->fuel_type }}">
                                </div>

                                <br>
                                <div class="form-group">
                                    <label for="">Type de carburant </label>
                                    <input type="text" name="fuel_type"
                                        class="form-control " id="fuel_type"
                                        value="{{ $cars->fuel_type }}">
                                </div>

                                <br>
                                <div class="form-group">
                                    <label for="">Propriétaire</label>
                                    <select
                                        class="form-control @error('user_id') is-invalid @enderror"
                                        name="user_id" id="user_id">

                                        <option value=""> <span
                                                style="font-size: 5px !important;">Selectionnez un
                                                proprietaire</span> </option>

                                        @foreach ($users as $user)
                                            <option class="form-control"
                                                value="{{ $user->id ?? old('id') }}"
                                                selected>
                                                {{ $user->name }}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>

                               

                                <br>

                                <button type="submit" class="btn btn-sm btn-success"> Enregistrer</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
