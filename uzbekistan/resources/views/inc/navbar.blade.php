{{-- 
  <nav class="navbar navbar-expand-md navbar-inverse navbar-laravel">
      <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}">
              {{ config('app.name', 'Uzbekistan') }}
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <!-- Left Side Of Navbar -->
          
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="/">Home</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/services">Service</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/posts">Blog</a>
                  </li>
                </ul>
              

              <!-- Right Side Of Navbar -->
              <ul class="navbar-nav ml-auto">

                  <!-- Authentication Links -->
                  
                      
                      
                  @guest 
                      <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                      <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                  @else
                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>
                          
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
  
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>
                             @if(  Auth::user()->name=='admin' ) <a href="/dashboard">Dashboard</a>@endif

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                            </div>
                      </li>
            
                          
                       
                  @endguest
              </ul>
          </div>
      </div>
  </nav> --}}


{{-- 
  <nav class="navbar navbar-expand-md light-nav fixed-top" style="background-color: white">

    <a class="navbar-brand" href="/posts">
        <img  src="/storage/img/logo_uzb_grey.svg" alt="" class="img_logo"/>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="fas fa-bars"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">


            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="/#services"  ><i class="fas fa-ticket-alt">Service</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#guide">Guide</a>
                </li>
                @if(  Auth::user()->user_type == 1 ) 
                <a class="dropdown-item"  href="/dashboard">Dashboard</a>
               @endif


          </ul>


<ul class="navbar-nav ml-auto">

    <!-- Authentication Links -->
    
        
        
    @guest 
        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
        <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
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
 --}}

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
      {{--       <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-user-circle"></i> Log In</a>
            </li>
        </ul>

      </div>
 --}}
 @guest 
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-user-circle"></i> Log In</a>
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
