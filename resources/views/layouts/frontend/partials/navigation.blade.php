<!--/ Nav Star /-->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top" style="margin: 0px;

background-image: url('dashboardcss/img/survey1.jpg');

			background-repeat:no-repeat;
            background-size:fill;
">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <img src="{{ asset('dashboardcss/img/bm consult logo4.jpg') }}" alt="" style="width: 200px; height: ;10px;">
      <a class="navbar-brand text-brand" href="/" style="color: #05083b;">
        BAYOR MODEYIN
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
          <li class="nav-item">
            <a style="color: #05083b;"
              class="nav-link @if(Request::segment(2) == 'about') active @endif"
              href="{{ route('about') }}">
              {{ __('About') }}
            </a>
          </li>
          <li class="nav-item">
            <a style="color: #05083b;"
              class="nav-link @if(Request::segment(2) == 'properties') active @endif"
              href="{{ route('property.view.all-property-listing') }}">
              {{ __('Property') }}
            </a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              {{ __(' Surveying ') }}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               {{-- @foreach ($languages as $language) --}}
                  <a class="dropdown-item" href="{{ route('surveyor') }}">Request Services</a>
                  <a class="dropdown-item" href="{{ route('contact') }}">Contact Us</a>
               {{-- @endforeach --}}
             </div>
            </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
                  {{ __(' Account ') }}

            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                @if (Route::has('login'))
                @auth

                  <a class="dropdown-item @if(Request::segment(2) == 'dashboard') active @endif" href="{{ url('/dashboard') }}">{{ __('Dashboard') }}</a>
                  @else

                  <a class="dropdown-item @if(Request::segment(2) == 'login') active @endif" href="{{ route('login') }}">{{ __('Login') }}</a>
                  <a class="dropdown-item @if(Request::segment(2) == 'register') active @endif" href="{{ route('register') }}">{{ __('Register') }}</a>


                @endauth
                @endif
             </div>
            </li>


        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
    </div>
  </nav>
  <!--/ Nav End /-->
