@extends('layouts.default')
@section('content')
    {{-- @dd($usertypes) --}}
    <br>
    <div class="content">
        <div class="row">
            <div class="col-xl-12">
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Détails du vehicule</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>

                    </div>
                    <div class="block-content block-content-full ">
                        <div class="py-3">
                            <form>
                                <div class="form-group">
                                    <label for="">Marque </label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                        id="name" value="{{ $cars->brand }}" disabled>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Modèle </label>
                                    <input type="text" name="model"
                                        class="form-control " id="model"
                                        value="{{ $cars->model }}" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="">Anneé de fabrication </label>
                                    <input type="text" name="year_manufacture"
                                        class="form-control " id="year_manufacture"
                                        value="{{ $cars->year_manufacture }}" disabled>
                                </div>

                                


                                <div class="form-group">
                                    <label for="">Numero de serie </label>
                                    <input type="text" name="serial_number"
                                        class="form-control " id="serial_number"
                                        value="{{ $cars->serial_number }}" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="">kilometrage </label>
                                    <input type="text" name="mileage"
                                        class="form-control " id="mileage"
                                        value="{{ $cars->mileage }}" disabled>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="">Type de carburant </label>
                                    <input disabled type="text" name="fuel_type"
                                        class="form-control " id="fuel_type"
                                        value="{{ $cars->fuel_type }}" disabled>
                                </div>
                                
                                

                                <div class="form-group">
                                    <label for="">Les images du vehicule</label>
                                    <br><br>
                                    @foreach ($car_images as $car_image)
                                    <img width="100" src="{{ asset('public/photos/carimages/'.$car_image->photo) }}" alt="">
                                    @endforeach
                                </div>

                                <br>
                                <div class="form-group">
                                    <label for="">Assignation de ce véhicule</label>
                                    <br><br>
                                    @foreach ($assigned_vehicules as $assigned_vehicule)
                                    <img width="100" src="{{ asset('public/photos/users/'.$assigned_vehicule->userimage) }}" alt="">
                                    <br>
                                    <small>{{ $assigned_vehicule->usname }}</small>
                                    @endforeach
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
