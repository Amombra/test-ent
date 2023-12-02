@extends('layouts.default')
@section('content')
    {{-- @dd($usertypes) --}}
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
                            <form>
                                <div class="form-group">
                                    <label for="">Nom </label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                        id="name" value="{{ $users->name }}" disabled>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <br>
                                <div class="form-group">
                                    <label for="">Email </label>
                                    <input type="text" name="email"
                                        class="form-control @error('email') is-invalid @enderror" id="email"
                                        value="{{ $users->email }}" disabled>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                
                                <br>
                                <div class="form-group">
                                    <label for="">Role </label>
                                    <input type="text" name="role"
                                        class="form-control @error('role') is-invalid @enderror" id="role"
                                        value="{{ $users->role }}" disabled>
                                    @error('role')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
                                <br>
                                <label for="">Photo</label>
                                <div class="block block-rounded" style="background-color:var(--bs-body-bg)">

                                    <div class="block-content block-content-full">
                                        <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade"
                                            data-bs-interval="2000" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <a href="{{ asset('public/photos/users/' . $users->photo) }}"><img
                                                            width="150"
                                                            src="{{ asset('public/photos/users/' . $users->photo) }}"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
