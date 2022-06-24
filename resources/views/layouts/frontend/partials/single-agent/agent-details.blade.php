
<!--/ Property Star /-->

<!--/ Property Grid Star /-->
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

<!--/ Agent Single Star /-->
<section class="agent-single">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="row">
          <div class="col-md-6 "  style="">
            <div class="card-box-d h-100" style="max-width: 400px; max-height: auto;">
            <div class="agent-avatar-box  h-100" >
              <img src="{{ Storage::url($agent->image) }}" alt="" class="h-100 img-responsive">
            </div>
            </div>
          </div>
          <div class="col-md-5 section-md-t3">
            <div class="agent-info-box">
              <div class="agent-title">
                <div class="title-box-d">
                  <h3 class="title-d">
                    {{ $agent->full_name }}
                  </h3>
                </div>
              </div>
              <div class="agent-content mb-3">
                <p class="content-d color-text-a">
                  {{ $agent->about }}
                </p>
                <div class="info-agents color-a">
                  <p>
                    <strong>{{ __('Phone') }}: </strong>
                    <span class="color-text-a">{{ $agent->phone }}</span>
                  </p>
                  <p>
                    <strong>{{ __('Email') }}: </strong>
                    <span class="color-text-a"> {{ $agent->email }}</span>
                  </p>
                </div>
              </div>
              <div class="socials-footer">
                <ul class="list-inline">
                  <li class="list-inline-item">
                    <a href="#" class="link-one">
                      <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#" class="link-one">
                      <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#" class="link-one">
                      <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#" class="link-one">
                      <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#" class="link-one">
                      <i class="fa fa-dribbble" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12 section-t8">
        <div class="title-box-d">
          <h3 class="title-d">{{ __('My Properties') }} ({{ $agent->properties->count() }})</h3>
        </div>
      </div>
      <div
      class="row property-grid grid"
      @if($agent->properties->count() == 1)
      style="width: 100%;"
      @endif
      >
        @foreach($agent->properties as $property)
        <div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="{{ Storage::url($property->vertical_image) }}" alt="" class="img-a img-fluid img-responsive">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="/{{ app()->currentLocale() }}/property/{{ $property->id }}">
                      {{ $property->city }}
                    </a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">rent | $ {{ $property->rent }}</span>
                  </div>
                  <a href="/{{ app()->currentLocale() }}/property/{{ $property->id }}" class="link-a">
                    {{ __('Click here to view') }}
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">{{ __('Area') }}</h4>
                      <span>{{ $property->area }}m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">{{ __('Beds') }}</h4>
                      <span>{{ $property->beds }}</span>
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
  </div>
</section>
<!--/ Agent Single End /-->
