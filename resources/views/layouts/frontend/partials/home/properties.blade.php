

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
  max-width: 100%;
  object-fit: cover;
  /* height: calc(100vh - 400px); */
}
</style>
<!--/ Agents Star /-->
<section class="section-agents section-t8">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a" style="color: #05083b;">{{ __('Latest Properties') }}</h2>
            </div>
            <div class="title-link">
              <a href="{{ route('property.view.all-property-listing') }}" style="color: #05083b;">{{ __('All Property') }}
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    <div class="row">
        @foreach($properties as $property)
        <div class="col-md-4 col" >
        <div class="card-box-d h-100" style="max-width: 400px; max-height: auto;">
          <div class="card-img-d h-100">

            <img src="{{ Storage::url($property->vertical_image) }}" class="img-responsive h-100" alt="agent picture" style="" id="image_id" >

          </div>
          <div class="card-overlay">
            <div class="card-overlay-a-content">
              <div class="card-header-a">
                <h2 class="card-title-a">
                  <a href="{{ route('property.view.property-detail',$property->id)}}">
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
    </div>
  </div>
</section>
<!--/ Agents End /-->
