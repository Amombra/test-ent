@extends('layouts_user.default')
@section('content')
    <br>
    <div class="content">
        <div class="row">
            <div class="col-lg-1">

            </div>
            <div class="col-xl-9">
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
                             action="{{ '/update-user/'.Auth::user()->id }}" method="POST" enctype="multipart/form-data">

                             @csrf
                             @method('PUT')

                                <div class="form-group">
                                    <label for="">Nom </label>
                                    <input type="text" name="name" class="form-control"
                                        id="name" value="{{ Auth::user()->name }}">
                                   
                                </div>

                                <div class="form-group">
                                    <label for="">Email </label>
                                    <input type="text" name="email"
                                        class="form-control " id="email"
                                        value="{{ Auth::user()->email }}">
                                   
                                </div>

                                <div class="form-group">
                                    <label for="">Mot de passe </label>
                                    <input type="password" name="password"
                                        class="form-control " id="password"
                                        value="{{ Auth::user()->password }}">
                                    
                                </div>

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
                                <br>
                                <button type="submit" class="btn btn-sm btn-success"> Enregistrer</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">

            </div>
        </div>
    </div>
@endsection
