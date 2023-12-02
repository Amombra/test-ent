<div class="container-fluid no-gutters">
    <div class="row">
        <div class="col-lg-12 p-0">
            <div class="header_iner d-flex justify-content-between align-items-center">
                <div class="sidebar_icon d-lg-none">
                    <i class="ti-menu"></i>
                </div>
                <div class="serach_field-area">
                    <div class="search_inner">
                        <form action="#">
                            <div class="search_field">
                                <input type="text" placeholder="Search here...">
                            </div>
                            <button type="submit"> <img src="{{ asset('assets/img/icon/icon_search.svg') }}" alt="">
                            </button>
                        </form>
                    </div>
                </div>
                <div class="header_right d-flex justify-content-between align-items-center">

                    <div class="profile_info">
                        <img src="{{ asset('assets/img/client_img.png') }}" alt="#">
                        <div class="profile_info_iner">
                            <p>Bienvenue   </p>
                            <h5> {{ Auth::user()->name }} !</h5>
                            <div class="profile_info_details">
                                {{-- <a href="#">My Profile <i class="ti-user"></i></a> --}}
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">Deconnexion <i
                                        class="ti-shift-left"></i></a>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
