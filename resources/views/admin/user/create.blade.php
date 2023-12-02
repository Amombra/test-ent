@extends('layouts.default')
@section('content')
    <br>
    <br>
    <div class="content">
        <div class="row">
            <div class="col-xl-12">
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Ajouter un utilisateur</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full ">
                        <div class="py-3">
                            <form method="POST" action="{{ route('utilisateur.store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror" id="name"
                                        value="{{ old('name') ?? '' }}" placeholder="Nom & Prenom">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror" id="email"
                                        value="{{ old('email') ?? '' }}" placeholder="Entrer l'email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="">Mot de passe </label>
                                    <input type="password" name="password" class="form-control " id="password"
                                        value="{{ old('password') ?? '' }}">

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
                                <div class="form-group">
                                    <select id="role" class="form-control @error('role') is-invalid @enderror"
                                        name="role" required>
                                        <option value="user">User</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                    @error('role')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
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
        </div>
    </div>
@endsection
