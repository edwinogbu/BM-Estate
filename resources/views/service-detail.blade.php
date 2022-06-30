@extends('layouts.frontend.main')

@section('content')

  {{-- @include('layouts.frontend.partials.form-search') --}}
  @include('layouts.frontend.partials.home.carousel')

  {{-- @include('layouts.frontend.partials.form-search') --}}
  @include('layouts.frontend.partials.services.service-intro')
  {{-- @include('layouts.frontend.partials.services.services-section') --}}
  {{-- @include('layouts.frontend.partials.agents') --}}


  <!--/ service Star /-->
<section class="section-service">
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

    <div class="container">
      {{-- <div class="row"> --}}

        {{-- @if($service && $service->icon) --}}
        {{-- <div class="col-sm-12"> --}}
          {{-- <div class="service-img-box"> --}}
            {{-- <img src="{{ asset('dashboardcss/img/survey1.jpg') }}" class="img-fluid card-img-top" alt="agent picture" style="max-width:1920px; max-height:960px; "> --}}
  {{--
          </div>
          <div class="sinse-box" > --}}
            {{-- <h3 class="sinse-title"  style="margin: 10px; color:#ffffff;">M .B Consulting
              <span></span>
              <br> {{ __('Sinse 2018') }}</h3>
            <p style="margin: 10px; color:#ffffff;">{{ __('Chattered Surveyor & Estate Management') }}</p>
          </div> --}}

        {{-- </div> --}}
        {{-- @endif --}}
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
        {{-- @foreach ($services as $service) --}}
        <div class="col-md-12 section-t8">
            <div class="row">
                {{-- @if($service && $service->icon) --}}
                <div class="col-md-12 col-lg-5 h-100" style="max-width: 100%; max-height:auto; margin-left: 0%; margin-right:80px; margin: 30px; padding-left:0px; ">
                    <img src="{{ Storage::url($service->icon) }}" id="image_id" class="h-100 img-responsive" alt="agent picture" style="max-width:1200px; max-height:auto; ">

                  </div>
                  {{-- @endif --}}
                  <div class="col-lg-2  d-none d-lg-block">
                      <div class="title-vertical d-flex justify-content-start">
                      <!-- <span>EstateAgency {{ __('Exclusive Property') }}</span> -->
                      </div>
                  </div>
            {{-- @if($service) --}}
            <div class="col-md-6 col-lg-5 section-md-t3">
              <div class="title-box-d">
                <h3 class="title-d" style="color: #05083b; ">{{ $service->title }}</h3>
              </div>
              {{-- @foreach(explode("\n", $service->text) as $paragraph) --}}
                <p class="color-text-a" style="color: #05083b; ">
                  {{  $service->text }}
                </p>
              {{-- @endforeach --}}
            </div>
            {{-- @endif --}}
          </div>
        </div>
        {{-- @endforeach --}}


        <div class="col-sm-12 section-t8">
            <div class="row">
              <div class="col-md-7">
                <form class="form-a contactForm">
                  <div id="sendmessage">Your message has been sent. Thank you!</div>
                  <div id="errormessage"></div>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validation"></div>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                        <div class="validation"></div>
                      </div>
                    </div>
                    <div class="col-md-12 mb-3">
                      <div class="form-group">
                        <input type="url" name="subject" class="form-control form-control-lg form-control-a" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                        <div class="validation"></div>
                      </div>
                    </div>
                    <div class="col-md-12 mb-3">
                      <div class="form-group">
                        <textarea name="message" class="form-control" name="message" cols="45" rows="8" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validation"></div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-a">{{ __('Send Message') }}</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-5 section-md-t3">
                <div class="icon-box section-b2">
                  <div class="icon-box-icon">
                    <span class="ion-ios-paper-plane"></span>
                  </div>
                  <div class="icon-box-content table-cell">
                    <div class="icon-box-title">
                      <h4 class="icon-title">{{ __('Say Hello') }}</h4>
                    </div>
                    {{-- @if(count($contact)) --}}
                    <div class="icon-box-content">
                      <p class="mb-1">{{ __('Email') }}.
                        {{-- <span class="color-a">{{ $contact[0]->email }}</span> --}}
                      </p>
                      <p class="mb-1">{{ __('Phone') }}.
                        {{-- <span class="color-a">{{ $contact[0]->phone }}</span> --}}
                      </p>
                    </div>
                    {{-- @endif --}}
                  </div>
                </div>
                <div class="icon-box section-b2">
                  <div class="icon-box-icon">
                    <span class="ion-ios-pin"></span>
                  </div>
                  <div class="icon-box-content table-cell">
                    <div class="icon-box-title">
                      <h4 class="icon-title">{{ __('Find us in') }}</h4>
                    </div>
                    <div class="icon-box-content">
                      {{-- @if(count($contact)) --}}
                      <p class="mb-1">
                        {{-- {{ $contact[0]->city.','.$contact[0]->street_name.' '.$contact[0]->house_number }} --}}
                      </p>
                      {{-- @endif --}}
                    </div>
                  </div>
                </div>
                <div class="icon-box">
                  <div class="icon-box-icon">
                    <span class="ion-ios-redo"></span>
                  </div>
                  <div class="icon-box-content table-cell">
                    <div class="icon-box-title">
                      <h4 class="icon-title">{{ __('Social networks') }}</h4>
                    </div>
                    <div class="icon-box-content">
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
            </div>
          </div>
      </div>
    </div>
  </section>
  <!--/ service End /-->


@stop
