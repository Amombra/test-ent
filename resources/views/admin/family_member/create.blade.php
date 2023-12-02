@extends('layouts.default')
@section('content')
    <br>
    <br>
    <div class="content">
        <div class="row">
            <div class="col-xl-12">
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Ajouter un membre</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full ">
                        <div class="py-3">
                            <form method="POST" action="{{ route('membres.store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                        id="name" value="{{ old('name') ?? '' }}" placeholder="Nom & prénom">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="text" name="phone_number"
                                        class="form-control @error('phone_number') is-invalid @enderror" id="phone_number"
                                        value="{{ old('phone_number') ?? '' }}" placeholder="Entrer le numéro de télephone">
                                    @error('phone_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <br>

                                <div class="form-group">
                                    <small style="color: grey;font-size: .875rem;"><i>Selectionnez votre parent</i></small>
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
