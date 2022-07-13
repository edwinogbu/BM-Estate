<style>
    .carousel > .carousel-item-a > .bg-image {
  width:640px;
  height:360px;
}

</style>
<div class="intro intro-carousel">
   <div id="carousel" class="owl-carousel owl-theme" >
        @foreach ($services as $service)
        <div class="owl-items py-0 m-0" style="max-width: 1920.75px; max-height:470px; margin-right: -1px;">
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
                                color: #fff5ff; text-decoration: underline; border: 5px dotted #fff;">
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
                              {{-- <p></p>
                          <p></p> --}}
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
</div>
