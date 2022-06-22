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
<!--/ Agents Grid Star /-->
<section class="agents-grid grid">
  <div class="container">
    <div class="row">
        @foreach($agents as $agent)
        <div class="col-md-4 col" >
          <div class="card-box-d h-100" style="max-width: 400px; max-height: auto;">
            <div class="card-img-d h-100">

                <img src="{{ Storage::url($agent->image) }}" class="img-responsive h-100" alt="agent picture" style="" id="image_id" >

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
    <div class="row m-5 p-5 ">
        <div class="row mb-5 pb-5 pull-right">

            {{ $agents->links() }}
        </div>
    </div>
  </div>
</section>
<!--/ Agents Grid End /-->
