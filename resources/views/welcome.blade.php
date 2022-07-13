@extends('layouts.frontend.main')
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
    max-height: 100%;
    object-fit: cover;
    /* height: calc(100vh - 400px); */
}
</style>

@section('content')

  {{-- @include('layouts.frontend.partials.form-search') --}}
  @include('layouts.frontend.partials.home.carousel')
  @include('layouts.frontend.partials.home.services')
  <section class="section-agents section-t8">
    <div class="container">
      <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a" style="color: #05083b;">{{ __('We Are Professionals') }}</h2>
              </div>
              <div class="title-link">
                <a href="{{ route('property.view.all-property-listing') }}" style="color: #05083b;">{{ __('') }}
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
    <!--/ Property Grid Star /-->

    <div class="row">
        @foreach($featuredServices as $Service)
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 mb-5 p-2">
              <div class="card box h-100"  style="max-width: 900px; max-height: auto;">
                <div class="card-img-d h-100" style="max-width: 900px; max-height: 1200px;">
                    <img src="{{ Storage::url($Service->icon) }}" class="img-responsive h-100" alt="agent picture" style="" id="image_id" >
                </div>
                <div class="card-img-overlay">
                  <a href="#" class="btn btn-light btn-sm"> {{ $Service->title }}</a>
                </div>
                <div class="card-body box-body">
                  <h4 class="card-title"> {{ $Service->title }}</h4>
                  <small class="text-muted cat">
                    <i class="far fa-clock text-info"></i>
                    {{ $Service->created_at->diffForHumans() }}
                  </small>
                  <p class="card-text">
                    <p class="description">
                        {{ Str::limit($Service->text, 120, $end='..')}}

                        <a href="{{ route('service.show', $Service->id) }}" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                      </p>
                  </p>
                  <a href="{{ route('contact') }}" class="btn btn-success">Contact Surveyor</a>
                </div>
                <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                  <div class="views">{{  now()->toDateTimeString() }}
                  </div>
                  <div class="stats">
                       <i class="far fa-eye"></i> {{ Carbon\Carbon::parse($service->created_at)->format('d-m-Y i') }}
                  </div>

                </div>
              </div>
            </div>
        @endforeach
    </div>
  </section>

  @include('layouts.frontend.partials.team_members')
  @include('layouts.frontend.partials.home.properties')
  {{-- @include('layouts.frontend.partials.agents') --}}
  @include('layouts.frontend.partials.home.testemonials')

@stop
