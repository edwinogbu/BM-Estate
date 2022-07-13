<!--/ team Star /-->

<section class="section-agents section-t8">
    <div class="container">
         <!--/ Property Grid Star /-->
    <div class="row">
        <div class="wraper">
            <div class="section-header">
                <h2> OUR TEAM</h2>
            </div>
          <div class="title-wrap d-flex ">
            {{-- <div class="title-box"> --}}

            {{-- </div> --}}
            <div class="box box-body" id="team">
            <div class="row">
                @foreach ($teams as $team)
                <div class="col-lg-4 col-md-4">
                  <div class="member h-100" style="max-width: 900px; max-height: 500px;">
                    <div class="pic h-100" style="max-width: 600px; max-height: 500px;"><img src="{{ Storage::url($team->team_member_image) }}" alt="" class="h-100 img-responsive " style="width:800px; height: auto;"></div>
                    <div class="details">
                          <span>
                        <a href="{{ route('team-member.detail',$team->id) }}">
                            <h3 style="color: #ffffff">
                                {{ $team->team_member_title }}
                                {{ $team->team_member_name }}

                            </h3>
                        </a>
                        <span style="font-weight: 900;" >{{ $team->team_member_position }}</span>
                        <div class="social mt-0 pt-0">
                          <SPan>Follow</SPan>
                          <a href=""><i class="bi bi-twitter"></i></a>
                          <a href=""><i class="bi bi-facebook"></i></a>
                          <a href=""><i class="bi bi-instagram"></i></a>
                          <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </span>

                    </div>
                  </div>
                </div>
                @endforeach
            </div>

            </div>
            </div>
          </div>
        </div>
    </div>
  </section>


<!--/ team End /-->



