{{-- @extends('layouts.frontend.main')


@section('content') --}}

  {{-- @include('layouts.frontend.partials.form-search') --}}
  {{-- @include('layouts.frontend.partials.home.carousel') --}}

  {{-- @include('layouts.frontend.partials.form-search') --}}
  {{-- @include('layouts.frontend.partials.about-intro')
  @include('layouts.frontend.partials.about.about-section')
  @include('layouts.frontend.partials.team_members')
  @include('layouts.frontend.partials.properties') --}}





{{-- @stop --}}







{{-- @extends('layouts.frontend.main') --}}

{{-- @section('content') --}}
{{-- <div class="intro intro-carousel">
  <div id="carousel" class="owl-carousel owl-theme" >
    @forelse ($services as $service)
    <div class="owl-items py-0 m-0" style="max-width: 1920.75px; max-height:400px; margin-right: -1px;">
          <div class="carousel-item-a intro-item bg-image h-100 mx-5 pt-0 p-5" style="background-image:url({{  Storage::url($service->icon) }}); ">
          <div class="overlay overlay-a"></div>
            <div class="intro-content display-table">
              <div class="table-cell">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-8">
                      <div class="intro-body">
                        <p class="intro-title-top fadeIn animated" style="">
                          <span style="
                              color: #fff5ff;
                              text-decoration: underline;
                              border: 5px dotted #fff;
                              ">
                        {{ $service->title }}

                      </span>
                          </p>
                          <h1 class="intro-title mb-4 zoomIn animated" style="">

                            <br>
                            {{ $service->title }}

                          </h1>
                        <p class="intro-subtitle intro-price fadeInUp animated" style="">

                          </p><p class="intro-title-top fadeIn animated" style="">
                              <span style="font-weight: 900; font: 40px;">
                                  </span></p>
                                  <p class="description">
                                    {{ Str::limit($service->text, 120, $end='..')}}

                                    <a href="{{ route('service.show', $service->id) }}" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                                  </p>

                            <p></p>


                        <p></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
    </div>
</div> --}}
  {{-- @include('layouts.frontend.partials.form-search') --}}
  {{-- @include('layouts.frontend.partials.home.carousel') --}}


  {{-- @include('layouts.frontend.partials.contact.intro') --}}
  {{-- @include('layouts.frontend.partials.contact.info') --}}

{{-- @stop --}}



@extends('layouts.frontend.main')
<style>
    /* .col {
  height:100vh;
} */
    img {
  display: block;
  max-width: 100%;
  height: auto;
}

#image_id {
    display: block;
    max-width: 100%;
    height: auto;
    max-height: 100%;
    object-fit: cover;
    /* height: calc(100vh - 400px); */
}
</style>

@section('content')

  {{-- @include('layouts.frontend.partials.form-search') --}}
  @include('layouts.frontend.partials.home.carousel')
  <section class="section-agents section-t8">
    <div class="container">
      <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                {{-- <h2 class="title-a" style="color: #05083b;">{{ __('BAYO MODEYIN CONSULTING REAL ESTATE SURVEYING AND VALUATION FIRM') }}</h2> --}}
              </div>
              <div class="col-md-12 col-lg-4">

              </div>
            </div>
          </div>
        </div>
        <div class="container">
    <!--/ Property Grid Star /-->

    <div class="row">

          {{-- @include('layouts.frontend.partials.contact.intro') --}}
          {{-- @include('layouts.frontend.partials.contact.info') --}}

          @include('layouts.frontend.partials.about-intro')
          @include('layouts.frontend.partials.about.about-section')
          {{-- @include('layouts.frontend.partials.team_members') --}}
          {{-- @include('layouts.frontend.partials.properties') --}}


    </div>

  </section>


  @include('layouts.frontend.partials.team_members')

  @include('layouts.frontend.partials.home.properties')

  {{-- @include('layouts.frontend.partials.agents') --}}
  {{-- @include('layouts.frontend.partials.home.testemonials') --}}


 <!-- Vendor JS Files -->
 {{-- <script src="{{ asset('serviceCss/assets/vendor/aos/aos.js')}}"></script>
 <script src="{{ asset('serviceCss/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
 <script src="{{ asset('serviceCss/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
 <script src="{{ asset('serviceCss/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
 <script src="{{ asset('serviceCss/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
 <script src="{{ asset('serviceCss/assets/vendor/php-email-form/validate.js')}}"></script>

 <!-- Template Main JS File -->
<script src="{{ asset('serviceCss/assets/js/main.js')}}"></script> --}}

@stop
