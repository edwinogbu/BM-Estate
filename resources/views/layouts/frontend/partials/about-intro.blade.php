<!--/ Intro Single star /-->
<section class="intro-single m-0 p-0" style="margin: 0px;">
  <div class="container" style="margin: 0px;">
    <div class="row" style="margin: 0px;">
      <div class="col-md-12 col-lg-12" style="margin: 0px;">
        <div class="title-single-box" style="margin: 0px;">
            <div class="title-box">
            @foreach ($about as $about)

                @if($about)
                <div class="section-header" style="margin-top: 0px">

                    <h2>
                        {{ $about->title }}
                    </h2>
                </div>
                @endif

            @endforeach
            </div>
        </div>
      </div>
      <div class="col-md-12 col-lg-12">
        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="{{ route('welcome') }}">
                {{ __('Home') }}
              </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              {{ __('About') }}
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<!--/ Intro Single End /-->
