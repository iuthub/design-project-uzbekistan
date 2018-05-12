

<nav class="navbar navbar-home navbar-expand-md transparent-nav fixed-top">

      <a class="navbar-brand" href="/">
        <img src="/storage/img/logo_uzb.svg" alt="" class="img_logo img-logo"/>
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="fas fa-bars"></span>
      </button>

      <div class="collapse navbar-collapse" id="collapsibleNavbar">

        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link" href="#services"><i class="fas fa-ticket-alt"></i> Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#guide"><i class="far fa-compass"></i> Guide</a>
            </li>

 @guest 
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-user-circle"></i> Log In</a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user-circle"></i> Sign Up</a>
          </li>
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

               @if(  Auth::user()->user_type == 1 ) 
                <a class="dropdown-item"  href="/dashboard">Dashboard</a>
               @endif
              <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </div>
        </li>     
    @endguest
</ul>

    </div>
  </nav>
