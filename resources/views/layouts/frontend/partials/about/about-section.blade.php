<!--/ About Star /-->
<section class="section-about">
  <div class="container">
    <div class="row">
        @foreach ($about as $about)

      @if($about && $about->company_image)
      <div class="col-sm-12">
        <div class="about-img-box">
          <img src="{{ Storage::url($about->company_image  ) }}" class="img-fluid card-img-top" alt="agent picture" style="max-width:1920px; max-height:960px; ">

        </div>
        <div class="sinse-box" >
          <h3 class="sinse-title"  style="margin: 10px; color:#ffffff;">M .B Consulting
            <span></span>
            <br> {{ __('Sinse 2018') }}</h3>
          <p style="margin: 10px; color:#ffffff;">{{ __('Chattered Surveyor & Estate Management') }}</p>
        </div>
      </div>
      @endif
      <div class="col-md-12 section-t8">
        <div class="row">
          @if($about && $about->team_image)
          <div class="col-md-6 col-lg-5">
            <img src="{{ Storage::url($about->team_image ) }}" class="img-fluid card-img-top" alt="agent picture" style="max-width:600px; max-height:800px; ">

          </div>
          @endif
          <div class="col-lg-2  d-none d-lg-block">
            <div class="title-vertical d-flex justify-content-start">
              <!-- <span>EstateAgency {{ __('Exclusive Property') }}</span> -->
            </div>
          </div>
          @if($about)
          <div class="col-md-6 col-lg-5 section-md-t3">
            <div class="title-box-d">
              <h3 class="title-d" style="color: #05083b; ">{{ $about->subtitle }}</h3>
            </div>
            @foreach(explode("\n", $about->text) as $paragraph)
              <p class="color-text-a" style="color: #05083b; ">
                {{ $paragraph }}
              </p>
            @endforeach
          </div>
          @endif
        </div>
      </div>
      @endforeach

    </div>
  </div>
</section>
<!--/ About End /-->
