<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><strong>CEDAYOUTH</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="homepage">HOME<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="news">NEWS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="event">EVENTS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="faq">FAQ</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contact">CONTACT</a>
        </li>
         <!-- Authentication Links -->
         @guest

        {{-- <li class="nav-item"> --}}
          {{-- <a class="nav-link" href="{{ route('login') }}">{{ __('LOGIN') }}</a> --}}
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><button class="btn btn-primary">LOGIN</button></a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="">ADMIN LOGIN</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="">LOGIN AS NGO</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="">LOGIN AS YOUTH</a>
                {{-- <div class="dropdown-divider"></div> --}}
                
              </div>
            </li>
        {{-- </li> --}}
        @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">{{ __('SIGNUP') }}</a>
        </li>
        @endif

        @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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