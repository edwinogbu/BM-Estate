<!--/ footer Star /-->
<section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand" style="color: #05083b;">BM Consulting</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a" style="color: #05083b;">
               there write up coming soon here
              </p>
            </div>
            <div class="w-footer-a">
              {{-- @if(count($contact)) --}}
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a" style="color: #05083b;">{{ __('Email') }} .
                </span>
                {{-- {{ $contact[0]->email }} --}}
            </li>
                <li class="color-a">
                  <span class="color-text-a" style="color: #05083b;">{{ __('Phone') }} .
                {{-- </span> {{ $contact[0]->phone }} --}}
            </li>
              </ul>
              {{-- @endif --}}
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand" style="color: #05083b;">{{ __('The Company') }}</h3>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <ul class="list-unstyled">
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="/login" style="color: #05083b;">Admin</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i>
                    <a href="{{ route('welcome') }}/agents">
                      {{ __('Agents') }}
                    </a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="{{ route('about') }}" style="color: #05083b;">{{ __('About') }}</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">{{ __('Contact Us') }}</h3>
            </div>
            <div class="w-body-a">
              <ul class="list-unstyled">
                {{-- @foreach($languages as $language) --}}
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i>
                  {{-- <a href="/{{ $language->iso }}"> --}}
                    {{-- {{ strtoupper($language->iso) }}</a> --}}
                </li>
                {{-- @endforeach --}}
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="{{ ('welcome') }}">
                  {{ __('Home') }}
                </a>
              </li>
              <li class="list-inline-item">
                <a href="{{ route('about') }}">
                  {{ __('About') }}
                </a>
              </li>
              <li class="list-inline-item">
                <a href="{{ route('property.view.all-property-listing') }}">{{ __('Property') }}</a>
              </li>
              <li class="list-inline-item">
                {{-- <a href="{{ route('contact') }}"> --}}
                  {{ __('Contact') }}
                </a>
              </li>
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-dribbble" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">BM Estate Agency</span> All Rights Reserved.
            </p>
          </div>
          <div>
            Designed By Eddy@ PagInnovation
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('frontend/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('frontend/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{ asset('frontend/lib/popper/popper.min.js')}}"></script>
  <script src="{{ asset('frontend/lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('frontend/lib/easing/easing.min.js')}}"></script>
  <script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('frontend/lib/scrollreveal/scrollreveal.min.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('frontend/js/main.js')}}"></script>
  <script src="{{ asset('frontend/js/app.js')}}"></script>
