<nav class="sidebar">
    <div class="logo d-flex justify-content-between">
        <a href=""><img src="{{ asset('assets/img/cpntic.png') }}" alt=""></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="">
            <a href="{{'/home'}}">
                <img src="{{ asset('assets/img/menu-icon/1.svg') }}" alt="">
                <span>Mon Espace</span>
            </a>
        </li>


        <li class="">
            <a href="{{'/all-user-imputations'}}">
                <img src="{{ asset('assets/img/menu-icon/2.svg') }}" alt="">
                <span> Taches affectées</span>
            </a>
        </li>

        {{-- <li class="">
            <a href="#">
                <img src="{{ asset('assets/img/menu-icon/7.svg') }}" alt="">
                <span> Taches Terminées</span>
            </a>
        </li>
        <li class="">
            <a href="#">
                <img src="{{ asset('assets/img/menu-icon/6.svg') }}" alt="">
                <span> Taches en attente</span>
            </a>
        </li> --}}

    </ul>

</nav>
