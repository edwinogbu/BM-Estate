


<section class="section-about">
    <div class="container">
      <div class="row">

          <div class="col-lg-5 about-img mr-5" style="margin: 10ppx">
            <img src="{{ Storage::url($team->team_member_image) }}" alt=""  id="image_id"  class="img-fluid card-img-top" alt="agent picture" style="max-width:1920px; max-height:960px; ">

              {{-- <img src="{{ asset('serviceCss/assets/img/about-img.jpg') }}" class="img-fluid card-img-top" alt="agent picture" style="max-width:1920px; max-height:960px; "> --}}
          </div>
          <div class="col-lg-6 content aos-init aos-animate" data-aos="fade-up" data-aos-delay="700" style="margin-left: 10px;">
              <div class="box">
                 <div class="section-header">
                      <h2> Full Name</h2>
                  </div>


                      <ul style="list-style: none;">

                          <li style="list-style: none;">
                              <div class="section-footer m-0 p-2" style="background: #ffffff;  margin-top:0%; ">

                                  <span class="content">

                                    {{ $team->team_member_title }}
                                    {{ $team->team_member_name }}
                                  </span>
                              </div>
                          </li>
                      </ul>
              </div>
              <div class="box">
                 <div class="section-header">
                      <h2> Postision</h2>
                  </div>


                      <ul style="list-style: none;">

                          <li style="list-style: none;">
                              <div class="section-footer m-0 p-2" style="background: #ffffff;  margin-top:0%; ">

                                  <span class="content">
                                     {{ $team->team_member_position }}

                                  </span>
                              </div>
                          </li>
                      </ul>
              </div>
              <div class="box">
                 <div class="section-header">
                      <h2> Qualification</h2>
                  </div>


                      <ul style="list-style: none;">

                          <li style="list-style: none;">
                              <div class="section-footer m-0 p-2" style="background: #ffffff;  margin-top:0%; ">

                                  <span class="content">
                                    {{ $team->team_member_qualification }}

                                  </span>
                              </div>
                          </li>
                      </ul>
              </div>
              <div class="box">
                 <div class="section-header">
                      <h2> Seminar/Awards</h2>
                  </div>


                      <ul style="list-style: none;">

                          <li style="list-style: none;">
                              <div class="section-footer m-0 p-2" style="background: #ffffff;  margin-top:0%; ">

                                  <span class="content">
                                    <p>
                                        <strong>{{ __('Seminar/Awards') }}: </strong>
                                        <span class="color-text-a">  {{ $team->team_member_seminar }}</span>
                                      </p>


                                  </span>
                              </div>
                          </li>
                      </ul>
              </div>
              <div class="box">
                 <div class="section-header">
                      <h2> Bio</h2>
                  </div>


                      <ul style="list-style: none;">

                          <li style="list-style: none;">
                              <div class="section-footer m-0 p-2" style="background: #ffffff;  margin-top:0%; ">

                                  <span class="content">

                                      <p>
                                        <strong>{{ __('Biography') }}: </strong>
                                        <span class="color-text-a">  {{ $team->team_member_bio }}</span>
                                      </p>

                                  </span>
                              </div>
                          </li>
                      </ul>
              </div>

          </div>

      </div>
    </div>
  </section>
