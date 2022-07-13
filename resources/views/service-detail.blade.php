
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
  <section class="section-agents section-t8">
    <div class="container">
      <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
                <div class="section-header">


                    <h2> B.M CHARTTERED ESTATE SURVEYOR AND VALUER</h2>
              </div>
              <div class="col-md-12 col-lg-4">
                <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="/">{{ __('Home') }}</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      {{ __('Contact') }}
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
    <!--/ Property Grid Star /-->

    <div class="row">

        <div class="row">
            <div class="section-header">


                <h2>  OUR PROFESSIONAL SERVICES</h2>
                <p>
                    Our real estate practice is focused on delivering excellent services to our Clients.
                    To meet up with this objective, we maintain a team of competent and experienced
                    professional with considerable wealth of experience and conversant with the
                    knowledge of the property market. The professional are ready to deliver any of the
                    under listed services that falls within the scope of our operations:
                </p>
              </div>
          </div>

          <div class="col-md-12 section-t8">
              <div class="row">

                  <div class="col-md-12 col-lg-5 h-100" style="max-width: 100%; max-height:auto; margin-left: 0%; margin-right:80px; margin: 30px; padding-left:0px; ">
                      <img src="{{ Storage::url($service->icon) }}" id="image_id" class="h-100 img-responsive" alt="agent picture" style="max-width:1200px; max-height:auto; ">

                    </div>

                    <div class="col-lg-2  d-none d-lg-block">
                        <div class="title-vertical d-flex justify-content-start">
                        <!-- <span>EstateAgency {{ __('Exclusive Property') }}</span> -->
                        </div>
                    </div>

              <div class="col-md-6 col-lg-5 section-md-t3">
                <div class="title-box-d">
                  <h3 class="title-d" style="color: #05083b; ">{{ $service->title }}</h3>
                </div>

                  <p class="color-text-a" style="color: #05083b; ">
                    {{  $service->text }}
                  </p>

              </div>

            </div>
          </div>


            @include('layouts.frontend.partials.contact.info')
    </div>

  </section>

  {{-- @include('layouts.frontend.partials.team_members') --}}
  @include('layouts.frontend.partials.home.properties')
  {{-- @include('layouts.frontend.partials.agents') --}}
  {{-- @include('layouts.frontend.partials.home.testemonials') --}}

@stop
