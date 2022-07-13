<!--/ footer Star /-->
<section class="section-footer">
    <div class="container">
      <div class="row">

        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand" style="color: #05083b;">{{ __('BM Consulting') }}</h3>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <ul class="list-unstyled">

                  <li class="item-list-a" >
                    <i class="fa fa-angle-right"></i>
                    <SPan>
                        CORPORATE HEAD OFFICE
                    </span>
                    <p style="margin: 0px; padding-left: 20px;">
                        <span class="color-text-a" style="color: #05083b; font-weight: 600;">
                            13, Aina Street
                        </span><br>
                        <span class="color-text-a" style="color: #05083b; font-weight: 600;">
                            Off Ogunnusi Road
                        </span><br>
                        <span class="color-text-a" style="color: #05083b; font-weight: 600;">
                            By Zenith Bank,
                        </span><br>
                        <span class="color-text-a" style="color: #05083b; font-weight: 600;">
                            Ojodu Berger, Lagos
                        </span><br>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i>
                    <SPan>
                        Tel:
                    </span>
                    <p style="margin: 0px; padding-left: 20px;">
                    <a href="{{ route('contact') }}" style="color: #05083b;">
                        <span class="color-text-a"  style="color: #05083b; font-weight: 600;">
                            Tel: 08052689259, 08122737186, 08093819070(WhatsApp)
                        </span><br>
                    </a>
                    </p>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i>
                    <SPan>
                        E-mail:
                    </span>
                    <p style="margin: 0px; padding-left: 20px;">
                    <a href="{{ route('contact') }}" style="color: #05083b;">
                        <span class="color-text-a"  style="color: #05083b; font-weight: 600;">
                            bmconsultingrealestate@yahoo.com
                        </span><br>
                    </a>
                    </p>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i>
                    <SPan>
                        Website:
                    </span>
                    <p style="margin: 0px; padding-left: 20px;">
                    <a href="{{ route('contact') }}" style="color: #05083b;">
                        <span class="color-text-a"  style="color: #05083b; font-weight: 600;">
                            bmhomevestors@gmail.com
                        </span><br>
                    </a>
                    </p>
                  </li>
                </ul>
              </div>
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
                    <i class="fa fa-angle-right"></i> <a href="{{ route('about') }}" style="color: #05083b;">{{ __('About') }}</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i>
                    <a href="{{ route('services') }}">
                      {{ __('Services') }}
                    </a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i>
                    <a href="{{ route('property.view.all-property-listing') }}">
                      {{ __('Property') }}
                    </a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i>
                    <a href="{{ route('agent.view-agent-list') }}">
                      {{ __('Agents') }}
                    </a>
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
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i>
                  <a href="{{ route('surveyor') }}">
                    {{ __('Service Proposal') }}
                  </a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i>
                  <a href="{{ route('contact') }}">
                    {{ __('Contact Us') }}
                  </a>
                </li>
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



   <!-- Vendor JS Files -->
 <script src="{{ asset('serviceCss/assets/vendor/aos/aos.js')}}"></script>
 <script src="{{ asset('serviceCss/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
 <script src="{{ asset('serviceCss/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
 <script src="{{ asset('serviceCss/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
 <script src="{{ asset('serviceCss/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
 <script src="{{ asset('serviceCss/assets/vendor/php-email-form/validate.js')}}"></script>

 <!-- Template Main JS File -->
<script src="{{ asset('serviceCss/assets/js/main.js')}}"></script>
