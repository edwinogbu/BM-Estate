<!--/ Intro Single star /-->
<section class="intro-single">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8">
        <div class="title-single-box">
          <h1 class="title-single">
            <span class="color-text-a">

               House No: {{ $property->house_number }}
            </span>
            <span class="color-text-a">  {{ $property->street_name }},  {{ $property->city }} State</span>
            </h1>
          <span class="color-text-a">City: {{ $property->city }}</span>
        </div>
      </div>
      <div class="col-md-12 col-lg-4">
        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="{{ route('welcome') }}">
                {{ __('Home') }}
              </a>
            </li>
            <li class="breadcrumb-item">
              <a href="{{ route('property.view.all-property-listing')}}">{{ __('Properties') }}</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              {{ $property->house_number }} {{ $property->street_name }}
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<!--/ Intro Single End /-->
