<!--/ Carousel Star /-->
<div class="intro intro-carousel">
  <div id="carousel" class="owl-carousel owl-theme">
    @foreach($properties as $property)
    <div class="carousel-item-a intro-item bg-image" style="background-image:url({{  Storage::url($property->horizontal_images) }})">
      <div class="overlay overlay-a"></div>
      <div class="intro-content display-table">
        <div class="table-cell">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="intro-body">
                  <p class="intro-title-top">
                      {{ $property->city }}
                    </p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">
                          {{ $property->house_number }}
                        </span>
                      <br>
                      {{ $property->street_name }}
                    </h1>
                  <p class="intro-subtitle intro-price" >

                    <p class="intro-title-top">
                        <span style="font-weight: 900; font: 40px;">
                            PROMO!!..PROMO!!!
                        </span>
                      </p>
                    <span>
                        <a href="{{ route('property.view.property-detail', $property->id) }}"><span class="price-a">Price | &#8358;
                            {{ $property->price }}
                        </span></a>

                    </span>
                    {{-- <span>
                        <a href="{{ route('property.view.property-detail', $property->id) }}"><span class="price-a">Rent | &#8358;
                            {{ $property->rent }}
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
