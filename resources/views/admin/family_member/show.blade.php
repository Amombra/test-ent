@extends('layouts.default')
@section('content')
    {{-- @dd($usertypes) --}}
    <br>
    <div class="content">
        <div class="row">
            <div class="col-xl-12">
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Détails du membre de la famille</h3>
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
                                        id="name" value="{{ $family_members->name }}" disabled>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Numéro de télephone </label>
                                    <input type="text" name="phone_number"
                                        class="form-control @error('phone_number') is-invalid @enderror" id="phone_number"
                                        value="{{ $family_members->phone_number }}" disabled>
                                    @error('phone_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                


                                <div class="form-group">
                                    <label for="">Parenté à</label>
                                    <input type="text" name="user_id"
                                        class="form-control @error('user_id') is-invalid @enderror" id="user_id"
                                        value="{{ $family_members->user_id }}" disabled>
                                    @error('user_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
