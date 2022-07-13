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
<!--/ Testimonials Star /-->
<section class="section-testimonials section-t8 nav-arrow-a">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title-wrap d-flex justify-content-between">
          <div class="title-box">
            <h2 class="title-a" style="color: #05083b;">{{ __('Testimonials') }}</h2>
          </div>
        </div>
      </div>
    </div>
    <div id="testimonial-carousel" class="owl-carousel owl-arrow">
      @foreach($testimonials as $testimonial)
      <div class="carousel-item-a">
        <div class="testimonials-box">
          <div class="row">
            <div class="col-sm-6 col-md-6">
                <div class="card-box-d h-100" style="max-width: 400px; max-height: auto;">

              <div class="testimonial-img h-100">
                {{-- <img src="{{ Storage::url($testimonial->testimonial_image) }}" alt="" class="h-100 img-responsive"> --}}
                <img src="{{ Storage::url($testimonial->testimonial_image) }}" class="img-responsive h-100" alt="testimonial picture" style="" id="image_id" >

              </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="testimonial-ico">
                <span class="ion-ios-quote"></span>
              </div>
              <div class="testimonials-content">
                <p class="testimonial-text">
                  {{ $testimonial->text }}
                </p>
              </div>
              <div class="testimonial-author-box">
                <img src="{{ Storage::url($testimonial->testimonial_image) }}" alt="" class="img-responsive testimonial-avatar">

                <h5 class="testimonial-author">
                    {{ $testimonial->names }}
                </h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
<!--/ Testimonials End /-->
