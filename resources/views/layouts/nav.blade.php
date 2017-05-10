<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="../images/logos/dirtLifeLogoSmall.png" alt="dl Logo">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      INFO <span class="caret"></span></a>

                  <ul class="dropdown-menu" role="menu">
                      <li><a href="/profiles"><strong>Rider Profiles</strong></a></li>
                      <li><a href="/shops"><strong>Shops</strong></a></li>
                      <li><a href="/trails"><strong>Trail Systems</strong></a></li>
                  </ul>
              </li>
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      VIDS <span class="caret"></span></a>

                  <ul class="dropdown-menu" role="menu">
                      <li><a href="/dirtvids"><strong>ALL VIDEOS</strong></a></li>
                      @if (Auth::user())
                      <li><a href="/dirtvids/create"><strong>ADD A VIDEO</strong></a></li>
                      @endif
                  </ul>
              </li>
              <li><a href="#"><strong>CONTACT</strong></a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::user() && Auth::user()->hasRole('SuperFly'))
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        ADMIN <span class="caret"></span></a>

                    <ul class="dropdown-menu" role="menu">

                        <li><a href="/admin/roles/create"><strong>ADD ROLE</strong></a></li>
                        <li><a href="/admin/roles"><strong>ALL ROLES</strong></a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/admin/users"><strong>ALL USERS</strong></a></li>

                    </ul>
                </li>
                @endif
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">LOGIN</a></li>
                    <li><a href="{{ route('register') }}">REGISTER</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                            <li><a href="/profiles/{{Auth::user()->profiles->id}}">Your Profile</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
