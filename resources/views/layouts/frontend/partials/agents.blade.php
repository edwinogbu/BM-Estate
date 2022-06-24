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
            <h2 class="title-a" style="color: #05083b;">
              @if(Request::segment(2) == '')
                {{ __('Best Agents') }}
              @elseif(Request::segment(2) == 'about')
                {{ __('Meet our team') }}
              @endif
            </h2>
          </div>
          <div class="title-link">
            <a href="{{ route('agent.view-agent-list') }}" style="color: #05083b;">
              {{ __('All Agents') }}
              <span class="ion-ios-arrow-forward"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach($agents as $agent)
      <div class="col-md-4 col" >
        <div class="card-box-d h-100" style="max-width: 400px; max-height: auto;">
          <div class="card-img-d h-100">

         <img src="{{ Storage::url($agent->image) }}" class="img-responsive h-100 img-fluid" alt="agent picture" style="" id="image_id" >

          </div>
          <div class="card-overlay card-overlay-hover">
            <div class="card-header-d">
              <div class="card-title-d align-self-center">
                <h3 class="title-d">

                        <a href="{{ route('agent.view.single-detail', $agent->id) }}" class="btn btn-secondary btn-outline-danger text-white">
                            <span style="color:#ffffff;">
                                {{ $agent->full_name }}

                            </span>

                        </a>



                </h3>
              </div>
            </div>
            <div class="card-body-d">
              <p class="content-d color-text-a" style="color: #ffffff;">
                {{ $agent->shortAbout() }}
              </p>
              <div class="info-agents color-a">
                <p >
                  <strong>{{ __('Phone') }}: </strong>
                 <span style="color: #ffffff;">

                     {{ $agent->phone }}
                 </span>
                </p>
                <p>
                  <strong>Email: </strong>
                  <span style="color: #ffffff;">

                      {{ $agent->email }}
                  </span>
                </p>
              </div>
            </div>
            <div class="card-footer-d">
              <div class="socials-footer d-flex justify-content-center">
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
      @endforeach
    </div>
  </div>
</section>
<!--/ Agents End /-->
