<!--/ Nav Star /-->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <img src="{{ asset('dashboardcss/img/bm consult logo4.jpg') }}" alt="" style="width: 100px; height: ;40px;">
      <a class="navbar-brand text-brand" href="/" style="color: #05083b;">
        B.M CHARTERED ESTATE AND VALUERS
        <span class="color-b"> CONSULTING</span>
    </a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a style="color: #05083b;"
              class="nav-link @if(Request::segment(2) == '') active @endif"
              href="/">
              {{ __('Home') }}
            </a>
          </li>


          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              {{ __('Languages') }}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              {{-- @foreach ($languages as $language) --}}
                  {{-- <a class="dropdown-item" href="/{{ $language->iso }}">Reg</a> --}}
              {{-- @endforeach --}}
            {{-- </div> --}}
          {{-- </li>  --}}

          {{-- @if (Route::has('login')) --}}
          {{-- @auth --}}

          <li class="nav-item">
              @if (Route::has('register'))
            <a style="color: #05083b;"
            class="nav-link nav-link @if(Request::segment(2) == 'register') active @endif"
            href="{{ route('register') }}">
              {{ __('Register') }}
            </a>
            @endif
          </li>
          <li class="nav-item">
              @if (Route::has('login'))
            <a style="color: #05083b;"
            class="nav-link nav-link @if(Request::segment(2) == 'login') active @endif"
            href="{{ route('login') }}">
              {{ __('Login') }}
            </a>
            @endif
          </li>

          {{-- @endauth --}}
          {{-- @endif --}}
        </ul>
      </div>
      {{-- <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button> --}}
    </div>
  </nav>
  <!--/ Nav End /-->
