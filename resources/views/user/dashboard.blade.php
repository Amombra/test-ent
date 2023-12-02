@extends('layouts_user.default')
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
    </div>


@endsection
