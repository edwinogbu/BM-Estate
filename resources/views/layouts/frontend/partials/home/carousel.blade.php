<!--/ Carousel Star /-->
<div class="intro intro-carousel">
  <div id="carousel" class="owl-carousel owl-theme">
    @forelse ($services as $service)
    <div class="carousel-item-a intro-item bg-image" style="background-image:url({{  Storage::url($service->icon) }})">
      <div class="overlay overlay-a"></div>
      <div class="intro-content display-table">
        <div class="table-cell">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="intro-body">
                  <p class="intro-title-top">
                      {{ $service->title }}
                    </p>
                    <h1 class="intro-title mb-4">
                      {{-- <span class="color-b">
                          {{ $service->house_number }}
                        </span> --}}
                      <br>
                      {{ $service->title }}
                    </h1>
                  <p class="intro-subtitle intro-price" >

                    <p class="intro-title-top">
                        <span style="font-weight: 900; font: 40px;">
                            <p class="description">
                                {{ Str::limit($service->text, 120, $end='..')}}

                                <a href="{{ route('service.show', $service->id) }}" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                              </p>
                        </span>
                      </p>
                    {{-- <span>
                        <a href="#"><span class="price-a"> | &#8358;
                        </span></a>

                    </span> --}}

                  </p>
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
<!--/ Carousel end /-->
