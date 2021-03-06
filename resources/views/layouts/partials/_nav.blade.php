<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-static">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a style="margin-top:-6px;" class="navbar-brand" href="{{ route('pages.home')}}"><img src="{{ asset('../image/logo_my_groupe.png')}}"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="{{ set_active_route('pages.home')}}"><a href="{{ route('pages.home')}}">Home</a></li>
            <li class="{{ set_active_route('pages.about')}}"><a href="{{ route('pages.about')}}">About</a></li>
            <li><a href="#contact">Artisans</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Planet <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="https://laravel.com/">Laravel.com</a></li>
                <li><a href="https://laravel.io/">Laravel.io</a></li>
                <li><a href="https://laracasts.com/">Laracasts</a></li>
                <li><a href="https://laravel-news.com/">Laravel News</a></li>
                <li><a href="https://larachat.co/">Larachat</a></li>
              </ul>
            </li>
            <li class="{{ set_active_route('contacts.create')}}"><a href="{{ route('contacts.create')}}">Contact</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
          
          @guest

          <li><a href="{{ route('login')}}">Login</a></li>
          <li><a href="{{ route('register') }}">Register</a></li>
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
        </div><!--/.nav-collapse -->
      </div>
    </nav>
