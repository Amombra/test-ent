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
                             action="{{ route('utilisateur.update', $users) }}" method="POST" enctype="multipart/form-data">

                             @csrf
                             @method('PUT')

                                <div class="form-group">
                                    <label for="">Nom </label>
                                    <input type="text" name="name" class="form-control"
                                        id="name" value="{{ $users->name }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Email </label>
                                    <input type="text" name="email"
                                        class="form-control " id="email"
                                        value="{{ $users->email }}">
                                   
                                </div>

                                <div class="form-group">
                                    <label for="">Mot de passe </label>
                                    <input type="password" name="password"
                                        class="form-control " id="password"
                                        value="{{ $users->password }}">
                                    
                                </div>


                                <div class="form-group">
                                    <div class="custom-file">
                                        <label for="">Ajouter une photo </label>
                                        <input type="file" name="photo" id="photo" value="{{ $users->photo}}"
                                            class="form-control ">
                                    </div>
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
