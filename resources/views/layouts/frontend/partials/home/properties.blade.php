<style>
    .card {
  background-color: #fff;
  border-radius: 0.5rem;
  box-shadow: 0.05rem 0.1rem 0.3rem -0.03rem rgba(0, 0, 0, 0.45);
  padding-bottom: 1rem;
}

.card > :last-child {
  margin-bottom: 0;
}

.card h3 {
  margin-top: 1rem;
  font-size: 1.25rem;
}

img {
  border-radius: 0.5rem 0.5rem 0 0;
  width: 100%;
}

img ~ * {
  margin-left: 1rem;
  margin-right: 1rem;
}

.card-wrapper {
  list-style: none;
  padding: 0;
  margin: 0;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(30ch, 1fr));
  grid-gap: 1.5rem;
}

img {
  /* ...existing styles */
  object-fit: cover;
  height: max(10rem, 30vh);
}
img {
  border-radius: 0.5rem 0.5rem 0 0;
  width: 100%;
  object-fit: cover;
  aspect-ratio: 4/3;
}

.card {
  --card-gradient: #5E9AD9, #E271AD;

  background-image: linear-gradient(
    var(--card-gradient),
    white max(9.5rem, 27vh)
  );
  /* ...existing styles */
}

img {
  /* ...existing styles */
  max-height: max(10rem, 30vh);
}
</style>
<!--/ Property Star /-->
<section class="section-property section-t8">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title-wrap d-flex justify-content-between">
          <div class="title-box">
            <h2 class="title-a" style="color: #05083b;">{{ __('Latest Properties') }}</h2>
          </div>
          <div class="title-link">
            <a href="/{{ app()->currentLocale() }}/properties" style="color: #05083b;">{{ __('All Property') }}
              <span class="ion-ios-arrow-forward"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div id="property-carousel" class="owl-carousel owl-theme">
      @foreach($properties as $property)
      <div class="carousel-item-b">
        <div class="card-box-a card-shadow">
          <div class="img-box-a" style=" ">

            <img src="{{ Storage::url($property->vertical_image) }}" class="img-fluid card-img-top img-fluid" alt="vertical image" width="600" height="400" style="width:100%">

          </div>
          <div class="card-overlay">
            <div class="card-overlay-a-content">
              <div class="card-header-a">
                <h2 class="card-title-a">
                  <a href="/{{ app()->currentLocale() }}/property/
                    {{ $property->id
                     }}">
                    {{ $property->city }}
                    <br />
                     {{ $property->street_name }}
                    </a>
                </h2>
              </div>
              <div class="card-body-a">
                <div class="price-box d-flex">
                  <span class="price-a">rent |  &#8358;
                      {{ $property->rent }}
                    </span>
                </div>
                <a href={{ route('property.view.property-detail',$property->id) }}
                     class="link-a">{{ __('Click here to view') }}
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </div>
              <div class="card-footer-a">
                <ul class="card-info d-flex justify-content-around">
                  <li>
                    <h4 class="card-info-title">{{ __('Area') }}</h4>
                    <span>
                        {{ $property->area }}
                        m
                      <sup>2</sup>
                    </span>
                  </li>
                  <li>
                    <h4 class="card-info-title">{{ __('Beds') }}</h4>
                    <span>
                        {{ $property->beds }}
                    </span>
                  </li>
                  <li>
                    <h4 class="card-info-title">{{ __('Baths') }}</h4>
                    <span>{{ $property->baths }}</span>
                  </li>
                  <li>
                    <h4 class="card-info-title">{{ __('Garages') }}</h4>
                    <span>{{ $property->garage }}</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      <!-- <div class="carousel-item-b">
        <div class="card-box-a card-shadow">
          <div class="img-box-a">
            <img src="img/property-3.jpg" alt="" class="img-a img-fluid">
          </div>
          <div class="card-overlay">
            <div class="card-overlay-a-content">
              <div class="card-header-a">
                <h2 class="card-title-a">
                  <a href="property-single.html">157 West
                    <br /> Central Park</a>
                </h2>
              </div>
              <div class="card-body-a">
                <div class="price-box d-flex">
                  <span class="price-a">rent | $ 12.000</span>
                </div>
                <a href="property-single.html" class="link-a">{{ __('Click here to view') }}
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </div>
              <div class="card-footer-a">
                <ul class="card-info d-flex justify-content-around">
                  <li>
                    <h4 class="card-info-title">{{ __('Area') }}</h4>
                    <span>340m
                      <sup>2</sup>
                    </span>
                  </li>
                  <li>
                    <h4 class="card-info-title">{{ __('Beds') }}</h4>
                    <span>2</span>
                  </li>
                  <li>
                    <h4 class="card-info-title">{{ __('Baths') }}</h4>
                    <span>4</span>
                  </li>
                  <li>
                    <h4 class="card-info-title">{{ __('Garages') }}</h4>
                    <span>1</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <!-- <div class="carousel-item-b">
        <div class="card-box-a card-shadow">
          <div class="img-box-a">
            <img src="img/property-7.jpg" alt="" class="img-a img-fluid">
          </div>
          <div class="card-overlay">
            <div class="card-overlay-a-content">
              <div class="card-header-a">
                <h2 class="card-title-a">
                  <a href="property-single.html">245 Azabu
                    <br /> Nishi Park let</a>
                </h2>
              </div>
              <div class="card-body-a">
                <div class="price-box d-flex">
                  <span class="price-a">rent | $ 12.000</span>
                </div>
                <a href="property-single.html" class="link-a">{{ __('Click here to view') }}
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </div>
              <div class="card-footer-a">
                <ul class="card-info d-flex justify-content-around">
                  <li>
                    <h4 class="card-info-title">{{ __('Area') }}</h4>
                    <span>340m
                      <sup>2</sup>
                    </span>
                  </li>
                  <li>
                    <h4 class="card-info-title">{{ __('Beds') }}</h4>
                    <span>2</span>
                  </li>
                  <li>
                    <h4 class="card-info-title">{{ __('Baths') }}</h4>
                    <span>4</span>
                  </li>
                  <li>
                    <h4 class="card-info-title">{{ __('Garages') }}</h4>
                    <span>1</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <!-- <div class="carousel-item-b">
        <div class="card-box-a card-shadow">
          <div class="img-box-a">
            <img src="img/property-10.jpg" alt="" class="img-a img-fluid">
          </div>
          <div class="card-overlay">
            <div class="card-overlay-a-content">
              <div class="card-header-a">
                <h2 class="card-title-a">
                  <a href="property-single.html">204 Montal
                    <br /> South Bela Two</a>
                </h2>
              </div>
              <div class="card-body-a">
                <div class="price-box d-flex">
                  <span class="price-a">rent | $ 12.000</span>
                </div>
                <a href="property-single.html" class="link-a">{{ __('Click here to view') }}
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </div>
              <div class="card-footer-a">
                <ul class="card-info d-flex justify-content-around">
                  <li>
                    <h4 class="card-info-title">Area</h4>
                    <span>340m
                      <sup>2</sup>
                    </span>
                  </li>
                  <li>
                    <h4 class="card-info-title">Beds</h4>
                    <span>2</span>
                  </li>
                  <li>
                    <h4 class="card-info-title">Baths</h4>
                    <span>4</span>
                  </li>
                  <li>
                    <h4 class="card-info-title">Garages</h4>
                    <span>1</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</section>
<!--/ Property End /-->
