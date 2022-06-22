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

<section class="property-grid grid">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="grid-option">
          <form action="/properties" method="GET" id="filter">
            @csrf
            <select class="custom-select" name="status">
                <option value="">select...</option>
                @foreach ($properties as $property)
              <option class="filter">
               {{ $property->status }}
            </option>
            @endforeach

            </select>
          </form>
        </div>
      </div>

      @if($properties->count() == 0)
        <p>{{ __('No results for this search') }}</p>
      @endif
      <div class="container">
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
                  <a href="{{ route('property.view.property-detail', $property->id) }}">
                    {{ $property->house_number }}<br />
                    {{ $property->street_name }}</a>
                </h2>
              </div>
              <div class="card-body-a">
                <div class="price-box d-flex">
                  <span class="price-a">rent |  &#8358; {{ $property->rent }}</span>
                </div>
                <a href="{{ route('property.view.property-detail',$property->id) }}" class="link-a">
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
  <div class="row">
    {{ $properties->links() }}
  </div>
</section>
<!--/ Property Grid End /-->
