@extends('layouts.default')
@section('content')
    <br>
    <br>
    <div class="content">
        <div class="row">
            <div class="col-xl-12">
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Ajouter une photo</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full ">
                        <div class="py-3">
                            <form method="POST" action="{{ route('carimages.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="custom-file">
                                        <label for="">Ajouter une photo </label>
                                        <input type="file" name="photo" id="photo"
                                            class="form-control @error('photo') is-invalid @enderror">
                                    </div>
                                </div>
                                @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>
                                <div class="form-group">
                                    <small style="color: grey;font-size: .875rem;"><i>Selectionnez un vehicule</i></small>
                                    <select class="form-control @error('car_id') is-invalid @enderror"
                                        name="car_id" id="car_id">


                                        @foreach ($cars as $car)
                                            <option class="form-control" value="{{ $car->id }}"
                                                selected>
                                                {{ $car->brand }} - {{ $car->model }}
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
