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
                {{-- @if($properties->count() == 1)

                @if ($search == 'sold')
                <h4>SOLD PROPERTIES</h4>

                @elseif ($search == 'active')
                <h4>ACTIVE PROPERTIES</h4>

                @else
                <h1>Ok</h1>

                @endif



                @endif --}}
        <div class="grid-option">


          {{-- <form action="{{ route('property.filter') }}" method="GET" style="margin-top: 20px;">
            <select name="status" id="input">
                <option value="0">Select status</option>
                @foreach (App\Models\Property::select('id','status')->get() as $property)
                    <option value="{{ $property->status }}" {{ $property->status == $selected_status['status'] ? 'selected' : '' }}>
                    {{ $property['status'] }}
                    </option>
                @endforeach
            </select>
            <input type="submit" class="btn btn-danger btn-sm" value="Filter">
            </form> --}}
          <form action="{{ route('property.search') }}" method="GET" style="margin-top: 20px;">
            <div class="row">

                <div class="form-group px-0">
            <span class="input-group-btn">
                <a href="{{ route('property.view.all-property-listing') }}" class=" mt-1">
                <button type="button" title="Refresh page"  class="btn btn-sm btn-danger" style="background-color: navy;">
                    <span class="fas fa-sync-alt" style="color: #fffff1">Refresh</span>
                </button>
            </a>
            </span>
            {{-- <div class="col-sm-3"> --}}
                <select name="search" class="selectpicker form-control" data-style="btn-info"  style="width:200px; height:; color:navy;">
                <optgroup label="Property select box">
                <option value="0">Select..</option>
                {{-- <option value="all">All</option> --}}
                @foreach (App\Models\Property::select('id','status')->get() as $property)
                    <option value="{{ $property->status }}" {{ $property->status}}>
                    {{ $property['status'] }}
                    </option>
                @endforeach
                </optgroup>
            </select>
        {{-- </div> --}}

        {{-- <input type="submit" class="btn btn-danger btn-lg" value="Filter"> --}}
        <span class="input-group-btn">
            <button type="submit" id="search-btn" class="btn btn-sm btn-danger" style="background-color: green;" title="Search Member">
                {{-- <i class="fa fa-user" style="color: #ffffff;" title="Search Member"></i> --}}
                <span class="fas fa-users" style="color: #fffff1" title="Search Members of MGM">Search property</span>

            </button>
        </span>
    </div>

  </div>
            </form>
        </div>
      </div>

      @if($properties->count() == 0)
        <p>{{ __('No results for this search') }}</p>
      @endif

      {{-- @if (isset($searchProperty) !==null && $search !==null )
        <p class="p-5 pb-5 m-5 mb-5">
            <div class="container">
                <div class="row">
                    @forelse($searchProperty as $property )
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
                                                {{ $property->street_name }}
                                            </a>
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
                        @empty
	    				<p> No data Found </p>
	    				@endforelse
                </div>
            </div>
        </p>
      @endif --}}
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
                                        {{ $property->street_name }}
                                    </a>
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
