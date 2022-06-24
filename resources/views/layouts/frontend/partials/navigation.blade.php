<!--/ Nav Star /-->
<style>
    ul li:hover{

        /* background:#ffffff; */
        transition: cubic-bezier(0.6, -0.28, 0.735, 0.045);
        padding: 0.625rem 0;
            font-size: 1rem;
            letter-spacing: 0.062rem;
            margin-bottom: 0.875rem;
            border: 5px solid #050;
            border-bottom: 0.085rem solid #fff;
            outline: inherit;
            border-radius: 15px 15px 5px 5px;
            padding:0px;
            margin: 0px;
            color:#05083a;
    }

</style>
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top" style="margin: 0px;

background-image: url('dashboardcss/img/survey1.jpg');

			background-repeat:no-repeat;
            background-size:fill;
            background: transparent;
            width: 100%;
            padding: 0.625rem 0;
            font-size: 1rem;
            color: #fff;
            letter-spacing: 0.062rem;
            margin-bottom: 1.875rem;
            border: none;
            border-bottom: 0.085rem solid #fff;
            outline: none;

">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <img src="{{ asset('dashboardcss/img/bm consult logo4.jpg') }}" alt="" style="width: 200px; height: ;auto; background:tranparent; ">

      {{-- <img src="{{ asset('dashboardcss/img/bm consult logo4.jpg') }}" alt="" style="width: 200px; height: ;10px; background:tranparent;"> --}}
      <a class="navbar-brand text-brand" href="/" style="color: #05083b;">
       <span class="color-b">B</span>AYOR
        <span class="color-b">
            MO<span style="color: #fff;">DE<span style="color: #05083a;">YIN
        </span>
        </span>
        </span>
        <br>
        <span class="color-b"> CONSULTING</span>
    </a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a style="
                color: #05083b;
                color: #ffffff;
                "
              class="nav-link @if(Request::segment(2) == '') active @endif"
              href="/">
              {{ __('Home') }}
            </a>
          </li>
          <li class="nav-item">
            <a style=" color: #ffffff;"
              class="nav-link @if(Request::segment(2) == 'about') active @endif"
              href="{{ route('about') }}">
              {{ __('About') }}
            </a>
          </li>
          <li class="nav-item">
            <a style=" color: #ffffff; "
              class="nav-link @if(Request::segment(2) == 'properties') active @endif"
              href="{{ route('property.view.all-property-listing') }}">
              {{ __('Property') }}
            </a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle color-b" href="{{ route('surveyor') }}" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <span class="color-b">
                  {{ __(' Surveying ') }}
              </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               {{-- @foreach ($languages as $language) --}}
                  <a class="dropdown-item" href="{{ route('surveyor') }}" style=" color: #05083b; ">Request Services</a>
                  <a class="dropdown-item" href="{{ route('contact') }}" style=" color: #05083b; ">Contact Us</a>
               {{-- @endforeach --}}
             </div>
            </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" style=" color: #050; ">
                <span class="color-b">
                  {{ __(' Account ') }}
                </span>

            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                @if (Route::has('login'))
                @auth

                  <a class="dropdown-item @if(Request::segment(2) == 'dashboard') active @endif" href="{{ url('/dashboard') }}" style=" color: #05083b; ">{{ __('Dashboard') }}</a>
                  @else

                  <a class="dropdown-item @if(Request::segment(2) == 'login') active @endif" href="{{ route('login') }}" style=" color: #05083b; ">{{ __('Login') }}</a>
                  <a class="dropdown-item @if(Request::segment(2) == 'register') active @endif" href="{{ route('register') }}" style=" color: #05083b; ">{{ __('Register') }}</a>


                @endauth
                @endif
             </div>
            </li>


        </ul>
      </div>
      {{-- <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button> --}}
    </div>
  </nav>
  <!--/ Nav End /-->
