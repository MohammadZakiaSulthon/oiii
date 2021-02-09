
 <nav class="background-transparent background-transparent-hightlight full-width sticky">
          <div class="s-12 l-2">
            <a href="index.html" class="logo">
              <!-- Logo version before sticky nav -->
              <img class="logo-before" src="../assets/img/logo-baru.png" alt="">
              <!-- Logo version after sticky nav -->
              <img class="logo-after" src="../assets/img/logo-baru.png" alt="">
            </a>
          </div>
          <div class="s-12 l-10">
            <div class="top-nav right">
              <p class="nav-text"></p>
              <ul class="right chevron">
                <li><a href="/">Home</a></li>
                <li><a href="{{route('about')}}">About Us</a></li>
                <li><a href="/kuliner">Kuliner</a></li>
                @if (Auth::guest())
                <li><a href="/login">Login</a></li>
                @else
                <li><a  href="{{ url('/logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endif
              </ul>
            </div>
          </div>
        </nav>