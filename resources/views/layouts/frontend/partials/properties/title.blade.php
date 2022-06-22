<!--/ Intro Single star /-->
<section class="intro-single" style="margin-top: 50px; padding: 50px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box"  style="margin-top: 50px;">
            <h1 class="title-single"  style="">
            <span  style="">

                {{ __('Our Amazing Properties') }}
            </span>
            </h1>
            <div>

                <span class="color-text-a"  style="">{{ __('Grid Properties') }}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<section class="intro-single">
  <div class="container">
    <div class="row">
      {{-- <div class="col-md-12 col-lg-8">
        <div class="title-single-box"  style="margin-top: 50px;">
          <h1 class="title-single"  style="margin-top: 50px; color:#ffffff; ">
          <span  style="margin: 50px; color:#ffffff;">

              {{ __('Our Amazing Properties') }}
          </span>
          </h1>
          <div>

              <span class="color-text-a"  style="margin-top: 50px; padding: 50px; color:#ffffff;">{{ __('Grid Properties') }}</span>
          </div>
        </div>
      </div> --}}
      <div class="col-md-12 col-lg-4">
        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
          <ol class="breadcrumb"  style="margin: 10px; color:#ffffff;">
            <li class="breadcrumb-item">
              <a href="{{ route('welcome') }}">
                {{ __('Home') }}
              </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              {{ __('Properties') }}
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<!--/ Intro Single End /-->
