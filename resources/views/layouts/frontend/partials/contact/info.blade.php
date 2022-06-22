<!--/ Contact Star /-->
<section class="contact">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="contact-map box">
          <div id="map" class="contact-map">
            <iframe src="https://www.google.com/maps/d/u/0/viewer?mid=1M-B_QUb9Mpu58uDs5X7kVZb9vGM&hl=en_US&ll=6.444746749184154%2C3.440695205435973&z=16"
              width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
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
<!--/ Contact End /-->
