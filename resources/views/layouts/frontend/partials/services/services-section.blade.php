<!--/ service Star /-->
<section class="section-service">
  <div class="container">
    {{-- <div class="row"> --}}

      {{-- @if($service && $service->icon) --}}
      {{-- <div class="col-sm-12"> --}}
        {{-- <div class="service-img-box"> --}}
          {{-- <img src="{{ asset('dashboardcss/img/survey1.jpg') }}" class="img-fluid card-img-top" alt="agent picture" style="max-width:1920px; max-height:960px; "> --}}
{{--
        </div>
        <div class="sinse-box" > --}}
          {{-- <h3 class="sinse-title"  style="margin: 10px; color:#ffffff;">M .B Consulting
            <span></span>
            <br> {{ __('Sinse 2018') }}</h3>
          <p style="margin: 10px; color:#ffffff;">{{ __('Chattered Surveyor & Estate Management') }}</p>
        </div> --}}

      {{-- </div> --}}
      {{-- @endif --}}
      <div class="row">
        <div class="section-header">


            <h2>  OUR PROFESSIONAL SERVICES</h2>
            <p>
                Our real estate practice is focused on delivering excellent services to our Clients.
                To meet up with this objective, we maintain a team of competent and experienced
                professional with considerable wealth of experience and conversant with the
                knowledge of the property market. The professional are ready to deliver any of the
                under listed services that falls within the scope of our operations:
            </p>
          </div>
      </div>
      @foreach ($services as $service)
      <div class="col-md-12 section-t8">
          <div class="row">
              {{-- @if($service && $service->icon) --}}
              <div class="col-md-6 col-lg-5">
                  <img src="{{ Storage::url($service->icon) }}" class="img-fluid card-img-top" alt="agent picture" style="max-width:600px; max-height:800px; ">

                </div>
                {{-- @endif --}}
                <div class="col-lg-2  d-none d-lg-block">
                    <div class="title-vertical d-flex justify-content-start">
                    <!-- <span>EstateAgency {{ __('Exclusive Property') }}</span> -->
                    </div>
                </div>
          {{-- @if($service) --}}
          <div class="col-md-6 col-lg-5 section-md-t3">
            <div class="title-box-d">
              <h3 class="title-d" style="color: #05083b; ">{{ $service->title }}</h3>
            </div>
            {{-- @foreach(explode("\n", $service->text) as $paragraph) --}}
              <p class="color-text-a" style="color: #05083b; ">
                {{  $service->text }}
              </p>
            {{-- @endforeach --}}
          </div>
          {{-- @endif --}}
        </div>
      </div>
      @endforeach

    </div>
  </div>
</section>
<!--/ service End /-->
