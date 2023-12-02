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
                            <form method="POST" action="{{ route('assigned_vehicles.store') }}" enctype="multipart/form-data">
                                @csrf

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
                                <div class="form-group">
                                    <small style="color: grey;font-size: .875rem;"><i>Selectionnez un membre de famille</i></small>
                                    <select class="form-control @error('family_member_id') is-invalid @enderror"
                                        name="family_member_id" id="family_member_id">


                                        @foreach ($family_members as $family_member)
                                            <option class="form-control" value="{{ $family_member->id }}"
                                                selected>
                                                {{ $family_member->name }} 
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <small style="color: grey;font-size: .875rem;"><i>Selectionnez un véhicule</i></small>
                                    <select class="form-control @error('car_id') is-invalid @enderror"
                                        name="car_id" id="car_id">


                                        @foreach ($cars as $car)
                                            <option class="form-control" value="{{ $car->id }}"
                                                selected>
                                                {{ $car->model }} -- {{ $car->brand }}
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
