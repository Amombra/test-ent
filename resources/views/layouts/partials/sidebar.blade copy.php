<nav class="sidebar">
    <div class="logo d-flex justify-content-between">
        <a href=""><img src="{{ asset('assets/img/cpntic.png')}}" alt=""></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="">
          <a href="" >
          <img src="{{ asset('assets/img/menu-icon/1.svg')}}" alt="">
            <span>Dashboard</span>
          </a>
        </li>


        <li class="">
          <a href="{{ route('user') }}" >
          <img src="{{ asset('assets/img/menu-icon/2.svg')}}" alt="">
            <span>Gestion des utilisateurs</span>
          </a>
        </li>
        
        <li class="">
          <a href="{{ route('show-correspondant') }}" >
          <img src="{{ asset('assets/img/menu-icon/3.svg')}}" alt="">
            <span>Correspondant</span>
          </a>
        </li>
        
        <li class="">
          <a href="{{route('show-service')}}" >
          <img src="{{ asset('assets/img/menu-icon/2.svg')}}" alt="">
            <span>Service</span>
          </a>
        </li>

        <li class="">
          <a href="{{route('show-fonction')}}" >
          <img src="{{ asset('assets/img/menu-icon/6.svg')}}" alt="">
            <span>Fonction</span>
          </a>
        </li>

        <li class="">
          <a href="{{route('show-nature-courrier')}}" >
          <img src="{{ asset('assets/img/menu-icon/5.svg')}}" alt="">
            <span>Nature du courrier</span>
          </a>
        </li>

        
        <li class="">
          <a href="{{route('show-statut-courrier')}}" >
          <img src="{{ asset('assets/img/menu-icon/6.svg')}}" alt="">
            <span>Statut du courrier</span>
          </a>
        </li>

        <li class="">
          <a href="{{ route('show-sexe')}}" >
          <img src="{{ asset('assets/img/menu-icon/2.svg')}}" alt="">
            <span>Sexe</span>
          </a>
        </li>

        <li class="">
          <a href="{{route('show-instruction')}}" >
          <img src="{{ asset('assets/img/menu-icon/2.svg')}}" alt="">
            <span>Instruction</span>
          </a>
        </li>

        <li class="">
          <a href="{{route('show-courrier-entrant')}}" >
          <img src="{{ asset('assets/img/menu-icon/6.svg')}}" alt="">
            <span>Courrier Entrant</span>
          </a>
        </li>

        <li class="">
          <a href="{{route('show-courrier-sortant')}}" >
          <img src="{{ asset('assets/img/menu-icon/6.svg')}}" alt="">
            <span>Courrier Sortant</span>
          </a>
        </li>

        <li class="">
          <a href="{{route('show-imputation')}}" >
          <img src="{{ asset('assets/img/menu-icon/7.svg')}}" alt="">
            <span>Imputation</span>
          </a>
        </li>



       

      </ul>
    
</nav>