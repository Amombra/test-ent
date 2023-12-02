@extends('layouts.default')
@section('content')


    <div class="content">
        <div class="bg-image" style="background-image: url({{ asset('assets/media/photos/photo11@2x.jpg') }});">
            <div class="bg-black-75">
                <div class="content content-boxed text-center">
                    <div class="py-5">
                        <h1 class="fs-2 fw-normal text-white mb-2 h3 mb-1">
                            <i class="fa fa-1x fa-user-cog"></i> ESPACE ADMIN
                        </h1>
                        <h2 class="fs-4 fw-normal text-white-75"> Bienvenue <span style="color: #007bff">
                            @if(auth()->check())
                                <p>{{ auth()->user()->name }} !</p>
                            @endif
                     </span> </h2>
                    </div>
                </div>
            </div>
        </div>
    
        
        <div class="row items-push mt-5">
            <div class="col-md-6 col-xl-4">
                <div class="block block-rounded text-center">
                    <div class="block-content block-content-full bg-success">
                        <div class="my-3">
                            <i class="fa fa-2x fa-envelope-square text-white-75"></i>
                        </div>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light">
                        <div class="fw-semibold">
                            <span style="color: #000; font-weight: bold; font-size:50px">{{ count($users) }}</span>
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                            Les utilisateurs
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
