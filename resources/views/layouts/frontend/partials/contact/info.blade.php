<style>
    /* Set the size of the div element that contains the map */
#map {
  height: 400px;
  /* The height is 400 pixels */
  width: 100%;
  /* The width is the width of the web page */
}
</style>
<!--/ Contact Star /-->
<section class="contact">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="contact-map box">
          {{-- <div id="map" class="contact-map"> --}}
            <h3>MB Google Maps Location</h3>
            <div id="map"></div>
             <!--The div element for the map -->
            {{-- <iframe src="https://www.google.com/maps/d/u/0/viewer?mid=1M-B_QUb9Mpu58uDs5X7kVZb9vGM&hl=en_US&ll=6.444746749184154%2C3.440695205435973&z=16"
              width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> --}}
          {{-- </div> --}}
        </div>
      </div>
      <div class="col-sm-12 section-t8">
        <div class="row">
            <div class="card-body">
                @if(Session::has('success'))
                <div class="alert alert-success">
                {{ Session::get('success') }}
                </div>
                @endif
            </div>
          <div class="col-md-6">
            <form class="form-a contactForm" action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg form-control-a @error('name') is-invalid @enderror" placeholder="Name" name="name">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg form-control-a @error('email') is-invalid @enderror" placeholder="Your Email" name="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg form-control-a @error('phone') is-invalid @enderror" placeholder="Phone Number" name="phone">
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <div class="form-group">
                    <input type="text" class="form-control @error('subject') is-invalid @enderror" placeholder="Subject" name="subject">
                    @error('subject')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <div class="form-group">
                    <textarea class="form-control form-control-lg form-control-a textarea @error('message') is-invalid @enderror" placeholder="Message" name="message"></textarea>
                    @error('message')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-12">
                  <button type="submit" class="btn btn-a">{{ __('Send Message') }}</button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-4 section-md-t3" style="margin-left: 40px;">
            <div class="icon-box section-b2">
              <div class="icon-box-icon">
                <span class="ion-ios-paper-plane"></span>
              </div>
              <div class="icon-box-content table-cell">
                <div class="icon-box-title">
                  <h4 class="icon-title">{{ __('Call Us Now') }}</h4>
                </div>
                {{-- @if(count($contact)) --}}
                <div class="icon-box-content">

                  <p class="mb-1">{{ __('Phone') }}.
                    <span class="color-a">
                        Tel: 08052689259, 08122737186, 08093819070(WhatsApp)
                    </span>
                  </p>
                  <p class="mb-1">{{ __('Email') }}.
                    <span class="color-a">
                        E-mail: bmconsultingrealestate@yahoo.com
                    </span>
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
                    <SPan>
                        CORPORATE HEAD OFFICE
                    </span>
                    <span class="color-text-a" style="color: #05083b; font-weight: 600;">
                        13, Aina Street
                    </span><br>
                    <span class="color-text-a" style="color: #05083b; font-weight: 600;">
                        Off Ogunnusi Road
                    </span><br>
                    <span class="color-text-a" style="color: #05083b; font-weight: 600;">
                        By Zenith Bank,
                    </span><br>
                    <span class="color-text-a" style="color: #05083b; font-weight: 600;">
                        Ojodu Berger, Lagos
                    </span><br>
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
<!--/ Contact End /-->

<script>
    // Initialize and add the map
function initMap() {
  // The location of Uluru
  const uluru = { lat: -25.344, lng: 131.031 };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: uluru,
  });
  // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
    position: uluru,
    map: map,
  });
}

window.initMap = initMap;
</script>
<script
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly"
defer
></script>
