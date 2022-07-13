<!--/ About Star /-->
<section class="section-about">
  <div class="container">
    <div class="row">
        @foreach ($about as $about)

      @if($about && $about->company_image)
        <div class="col-lg-5 about-img mr-5" style="margin: 10ppx">
            <img src="{{ Storage::url($about->company_image  ) }}" class="img-fluid card-img-top" alt="agent picture" style="max-width:1920px; max-height:960px; ">
        </div>
        <div class="col-lg-6 content aos-init aos-animate" data-aos="fade-up" data-aos-delay="700" style="margin-left: 10px;">
            <div class="box">
               <div class="section-header">
                    <h2>  OUR FIRM</h2>
                    <p>
                        <span>  Bayo Modeyin Consulting is an indigenous Real Estate Surveying and Valuation
                            firm. We provide the following services;
                        </span>
                    </p>
                </div>


                    <ul style="list-style: none;">
                        <li style="list-style: none;">
                            <div class="icon">
                                <i class="bi bi-check-circle" style="color: #50d8af; margin: 0px; padding: 10px; list-style: none; font-size: 20px; padding-right: 4px; color: #50d8af;"></i>
                               <span class="content">
                                 Property and Asset valuation for all purposes,

                               </span>
                            </div>
                        </li>
                        <li style="list-style: none;">
                            <div class="icon">
                                <i class="bi bi-check-circle" style="color: #50d8af; margin: 0px; padding: 10px; list-style: none; font-size: 20px; padding-right: 4px; color: #50d8af;"></i>
                               <span class="content">

                                 Real Estate Investment Appraisal,

                               </span>
                            </div>
                        </li>
                        <li style="list-style: none;">
                            <div class="icon">
                                <i class="bi bi-check-circle" style="color: #50d8af; margin: 0px; padding: 10px; list-style: none; font-size: 20px; padding-right: 4px; color: #50d8af;"></i>
                               <span class="content">

                                 Land Acquisition and Disposal,

                               </span>
                            </div>
                        </li>
                        <li style="list-style: none;">
                            <div class="icon">
                                <i class="bi bi-check-circle" style="color: #50d8af; margin: 0px; padding: 10px; list-style: none; font-size: 20px; padding-right: 4px; color: #50d8af;"></i>
                               <span class="content">
                                Property Management,

                               </span>
                            </div>
                        </li>
                        <li style="list-style: none;">
                            <div class="icon">
                                <i class="bi bi-check-circle" style="color: #50d8af; margin: 0px; padding: 10px; list-style: none; font-size: 20px; padding-right: 4px; color: #50d8af;"></i>
                               <span class="content">
                                  Accommodation Solution

                               </span>
                            </div>
                        </li>
                        <li style="list-style: none;">
                            <div class="icon">
                                <i class="bi bi-check-circle" style="color: #50d8af; margin: 0px; padding: 10px; list-style: none; font-size: 20px; padding-right: 4px; color: #50d8af;"></i>
                               <span class="content">

                                  Property Renovation and Repair

                               </span>
                            </div>
                        </li>
                        <li style="list-style: none;">
                            <div class="icon">
                                <i class="bi bi-check-circle" style="color: #50d8af; margin: 0px; padding: 10px; list-style: none; font-size: 20px; padding-right: 4px; color: #50d8af;"></i>
                               <span class="content">

                                  Real Estate Advisory and Consultancy Services.
                               </span>
                            </div>
                        </li>
                        <li style="list-style: none;">
                            <div class="section-footer m-0 p-2" style="background: #ffffff;  margin-top:0%; ">

                                <span class="content">
                                    The firm was registered with Corporate Affairs Commission and Estate Surveyors
                                    and Valuers Registration Boards of Nigeria in year 2010 to practice Real Estate
                                    throughout the federation of Nigeria.
                                    Our Corporate Head Office is located at 13, Aina Street by Zenith Bank, Off
                                    Ogunnusi Road, Ojodu, Berger, Lagos.
                                    Our services are governed by the following professional bodies and Government
                                    Regulatory Authorities:
                                </span>
                            </div>
                        </li>
                    </ul>
            </div>
        </div>
        @endif
        @endforeach
    </div>
  </div>
</section>
      <section id="clients">
        <div class="container aos-init aos-animate" data-aos="fade-up">
          <div class="section-header">
            <h2>PROFESSIONAL BODIES/ASSOCIATIONS</h2>
            <p>
                    <ul style="list-style: none;">
                        <li style="list-style: none;">
                            <div class="icon">
                                <i class="bi bi-check-circle" style="color: #50d8af; margin: 0px; padding: 10px; list-style: none; font-size: 20px; padding-right: 4px; color: #50d8af;"></i>
                               <span class="content">
                                The Nigeria Institution of Estate Surveyors and Valuers (NIEVS);

                               </span>
                            </div>
                        </li>
                        <li style="list-style: none;">
                            <div class="icon">
                                <i class="bi bi-check-circle" style="color: #50d8af; margin: 0px; padding: 10px; list-style: none; font-size: 20px; padding-right: 4px; color: #50d8af;"></i>
                               <span class="content">
                                Estate Surveyors and Valuers Registration Board of Nigeria (ESVARBON);



                               </span>
                            </div>
                        </li>
                        <li style="list-style: none;">
                            <div class="icon">
                                <i class="bi bi-check-circle" style="color: #50d8af; margin: 0px; padding: 10px; list-style: none; font-size: 20px; padding-right: 4px; color: #50d8af;"></i>
                               <span class="content">

                                 International Facilities Management Association (IFMA) Nigeria.


                               </span>
                            </div>
                        </li>
                        <li style="list-style: none;">
                            <div class="icon">
                                <i class="bi bi-check-circle" style="color: #50d8af; margin: 0px; padding: 10px; list-style: none; font-size: 20px; padding-right: 4px; color: #50d8af;"></i>
                               <span class="content">


                               Fate Foundation Ijora, Lagos.


                               </span>
                            </div>
                        </li>
                </ul>
            </p>
          </div>

          <div class="clients-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper align-items-center" id="swiper-wrapper-e8cedbdb427cbcfe" aria-live="off" style="transform: translate3d(-2851.33px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group" aria-label="3 / 8" style="width: 199.333px; margin-right: 20px;"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group" aria-label="4 / 8" style="width: 199.333px; margin-right: 20px;"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" role="group" aria-label="5 / 8" style="width: 199.333px; margin-right: 20px;"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5" role="group" aria-label="6 / 8" style="width: 199.333px; margin-right: 20px;"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="6" role="group" aria-label="7 / 8" style="width: 199.333px; margin-right: 20px;"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="7" role="group" aria-label="8 / 8" style="width: 199.333px; margin-right: 20px;"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0" role="group" aria-label="1 / 8" style="width: 199.333px; margin-right: 20px;"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide" data-swiper-slide-index="1" role="group" aria-label="2 / 8" style="width: 199.333px; margin-right: 20px;"><img src="{{ asset('serviceCss/assets/img/clients/client-1.png') }}" class="img-fluid" alt=""></div>
              <div class="swiper-slide" data-swiper-slide-index="2" role="group" aria-label="3 / 8" style="width: 199.333px; margin-right: 20px;"><img src="{{ asset('serviceCss/assets/img/clients/client-2.png') }}" class="img-fluid" alt=""></div>
              <div class="swiper-slide" data-swiper-slide-index="3" role="group" aria-label="4 / 8" style="width: 199.333px; margin-right: 20px;"><img src="{{ asset('serviceCss/assets/img/clients/client-3.png') }}" class="img-fluid" alt=""></div>
              <div class="swiper-slide" data-swiper-slide-index="4" role="group" aria-label="5 / 8" style="width: 199.333px; margin-right: 20px;"><img src="{{ asset('serviceCss/assets/img/clients/client-4.png') }}" class="img-fluid" alt=""></div>
              <div class="swiper-slide" data-swiper-slide-index="5" role="group" aria-label="6 / 8" style="width: 199.333px; margin-right: 20px;"><img src="{{ asset('serviceCss/assets/img/clients/client-5.png') }}" class="img-fluid" alt=""></div>
              <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="6" role="group" aria-label="7 / 8" style="width: 199.333px; margin-right: 20px;"><img src="{{ asset('serviceCss/assets/img/clients/client-6.png') }}" class="img-fluid" alt=""></div>
              <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="7" role="group" aria-label="8 / 8" style="width: 199.333px; margin-right: 20px;"><img src="{{ asset('serviceCss/assets/img/clients/client-6.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="0" role="group" aria-label="1 / 8" style="width: 199.333px; margin-right: 20px;"><img src="{{ asset('serviceCss/assets/img/clients/client-6.png') }}" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" role="group" aria-label="2 / 8" style="width: 199.333px; margin-right: 20px;"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group" aria-label="3 / 8" style="width: 199.333px; margin-right: 20px;"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group" aria-label="4 / 8" style="width: 199.333px; margin-right: 20px;"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" role="group" aria-label="5 / 8" style="width: 199.333px; margin-right: 20px;"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5" role="group" aria-label="6 / 8" style="width: 199.333px; margin-right: 20px;"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div></div>
            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 6"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 7"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 8"></span></div>
          <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

        </div>
      </section>
      <section id="clients">
        <div class="container aos-init aos-animate" data-aos="fade-up">
          <div class="section-header">
            <h2>GOVERNMENT AGENCIES/AUTHORITIES</h2>
            <p>
                    <ul style="list-style: none;">
                        <li style="list-style: none;">
                            <div class="icon">
                                <i class="bi bi-check-circle" style="color: #50d8af; margin: 0px; padding: 10px; list-style: none; font-size: 20px; padding-right: 4px; color: #50d8af;"></i>
                               <span class="content">
                                Corporate Affairs Commission of Nigeria

                               </span>
                            </div>
                        </li>
                        <li style="list-style: none;">
                            <div class="icon">
                                <i class="bi bi-check-circle" style="color: #50d8af; margin: 0px; padding: 10px; list-style: none; font-size: 20px; padding-right: 4px; color: #50d8af;"></i>
                               <span class="content">

                                 Special Control Unit Against Money Laundry

                               </span>
                            </div>
                        </li>
                        <li style="list-style: none;">
                            <div class="icon">
                                <i class="bi bi-check-circle" style="color: #50d8af; margin: 0px; padding: 10px; list-style: none; font-size: 20px; padding-right: 4px; color: #50d8af;"></i>
                               <span class="content">
                                Financial Reporting Council of Nigeria( FRCN)

                               </span>
                            </div>
                        </li>

                </ul>
            </p>
          </div>

          <div class="clients-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper align-items-center" id="swiper-wrapper-e8cedbdb427cbcfe" aria-live="off" style="transform: translate3d(-2851.33px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group" aria-label="3 / 8" style="width: 199.333px; margin-right: 20px;"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group" aria-label="4 / 8" style="width: 199.333px; margin-right: 20px;"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" role="group" aria-label="5 / 8" style="width: 199.333px; margin-right: 20px;"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5" role="group" aria-label="6 / 8" style="width: 199.333px; margin-right: 20px;"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="6" role="group" aria-label="7 / 8" style="width: 199.333px; margin-right: 20px;"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="7" role="group" aria-label="8 / 8" style="width: 199.333px; margin-right: 20px;"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0" role="group" aria-label="1 / 8" style="width: 199.333px; margin-right: 20px;"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide" data-swiper-slide-index="1" role="group" aria-label="2 / 8" style="width: 199.333px; margin-right: 20px;"><img src="{{ asset('serviceCss/assets/img/clients/client-1.png') }}" class="img-fluid" alt=""></div>
              <div class="swiper-slide" data-swiper-slide-index="2" role="group" aria-label="3 / 8" style="width: 199.333px; margin-right: 20px;"><img src="{{ asset('serviceCss/assets/img/clients/client-2.png') }}" class="img-fluid" alt=""></div>
              <div class="swiper-slide" data-swiper-slide-index="3" role="group" aria-label="4 / 8" style="width: 199.333px; margin-right: 20px;"><img src="{{ asset('serviceCss/assets/img/clients/client-3.png') }}" class="img-fluid" alt=""></div>
              <div class="swiper-slide" data-swiper-slide-index="4" role="group" aria-label="5 / 8" style="width: 199.333px; margin-right: 20px;"><img src="{{ asset('serviceCss/assets/img/clients/client-4.png') }}" class="img-fluid" alt=""></div>
              <div class="swiper-slide" data-swiper-slide-index="5" role="group" aria-label="6 / 8" style="width: 199.333px; margin-right: 20px;"><img src="{{ asset('serviceCss/assets/img/clients/client-5.png') }}" class="img-fluid" alt=""></div>
              <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="6" role="group" aria-label="7 / 8" style="width: 199.333px; margin-right: 20px;"><img src="{{ asset('serviceCss/assets/img/clients/client-6.png') }}" class="img-fluid" alt=""></div>
              <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="7" role="group" aria-label="8 / 8" style="width: 199.333px; margin-right: 20px;"><img src="{{ asset('serviceCss/assets/img/clients/client-6.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="0" role="group" aria-label="1 / 8" style="width: 199.333px; margin-right: 20px;"><img src="{{ asset('serviceCss/assets/img/clients/client-6.png') }}" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" role="group" aria-label="2 / 8" style="width: 199.333px; margin-right: 20px;"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group" aria-label="3 / 8" style="width: 199.333px; margin-right: 20px;"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group" aria-label="4 / 8" style="width: 199.333px; margin-right: 20px;"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" role="group" aria-label="5 / 8" style="width: 199.333px; margin-right: 20px;"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5" role="group" aria-label="6 / 8" style="width: 199.333px; margin-right: 20px;"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div></div>
            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 6"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 7"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 8"></span></div>
          <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

        </div>
      </section>



      <section class="section-about">
        <div class="container">
          <div class="row">

              <div class="col-lg-5 about-img mr-5" style="margin: 10ppx">
                  <img src="{{ asset('serviceCss/assets/img/about-img.jpg') }}" class="img-fluid card-img-top" alt="agent picture" style="max-width:1920px; max-height:960px; ">
              </div>
              <div class="col-lg-6 content aos-init aos-animate" data-aos="fade-up" data-aos-delay="700" style="margin-left: 10px;">
                  <div class="box">
                     <div class="section-header">
                          <h2> VISION</h2>
                      </div>


                          <ul style="list-style: none;">

                              <li style="list-style: none;">
                                  <div class="section-footer m-0 p-2" style="background: #ffffff;  margin-top:0%; ">

                                      <span class="content">

                                        To be the most preferred Estate Surveying and Valuation firm Delivering Superior
                                        Client Services.
                                      </span>
                                  </div>
                              </li>
                          </ul>
                  </div>
                  <div class="box">
                     <div class="section-header">
                          <h2> MISSION STATEMENT</h2>
                      </div>


                          <ul style="list-style: none;">

                              <li style="list-style: none;">
                                  <div class="section-footer m-0 p-2" style="background: #ffffff;  margin-top:0%; ">

                                      <span class="content">
                                        To be an outstanding Estate Surveying and Valuation firm that provides worldclass Real Estate Services to our clients using Modern Technologies and
                                        Competent Professionals.
                                      </span>
                                  </div>
                              </li>
                          </ul>
                  </div>
                  <div class="box">
                    <div class="section-header">
                         <h2>OUR CORE VALUES</h2>

                     </div>


                         <ul style="list-style: none;">
                             <li style="list-style: none;">
                                 <div class="icon">
                                     <i class="bi bi-check-circle" style="color: #50d8af; margin: 0px; padding: 10px; list-style: none; font-size: 20px; padding-right: 4px; color: #50d8af;"></i>
                                    <span class="content">
                                     Integrity
                                    </span>
                                 </div>
                             </li>
                             <li style="list-style: none;">
                                 <div class="icon">
                                     <i class="bi bi-check-circle" style="color: #50d8af; margin: 0px; padding: 10px; list-style: none; font-size: 20px; padding-right: 4px; color: #50d8af;"></i>
                                    <span class="content">
                                         Professionalism

                                    </span>
                                 </div>
                             </li>
                             <li style="list-style: none;">
                                 <div class="icon">
                                     <i class="bi bi-check-circle" style="color: #50d8af; margin: 0px; padding: 10px; list-style: none; font-size: 20px; padding-right: 4px; color: #50d8af;"></i>
                                    <span class="content">
                                         Employee Career Development
                                    </span>
                                 </div>
                             </li>
                             <li style="list-style: none;">
                                 <div class="icon">
                                     <i class="bi bi-check-circle" style="color: #50d8af; margin: 0px; padding: 10px; list-style: none; font-size: 20px; padding-right: 4px; color: #50d8af;"></i>
                                    <span class="content">
                                         Business Focus

                                    </span>
                                 </div>
                             </li>

                         </ul>
                 </div>
                  <div class="box">
                    <div class="section-header">
                         <h2>WHY PEOPLE PREFER US</h2>

                     </div>


                         <ul style="list-style: none;">
                             <li style="list-style: none;">
                                 <div class="icon">
                                     <i class="bi bi-check-circle" style="color: #50d8af; margin: 0px; padding: 10px; list-style: none; font-size: 20px; padding-right: 4px; color: #50d8af;"></i>
                                    <span class="content">
                                         We are passionate about satisfying the needs of our clients and this we achieve &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; through proper understanding of their needs;

                                    </span>
                                 </div>
                             </li>
                             <li style="list-style: none;">
                                 <div class="icon">
                                     <i class="bi bi-check-circle" style="color: #50d8af; margin: 0px; padding: 10px; list-style: none; font-size: 20px; padding-right: 4px; color: #50d8af;"></i>
                                    <span class="content " >
                                           We constantly regenerate our self through research in order to meet the needs &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; of today’s Real Estate services;
                                    </span>
                                 </div>
                             </li>
                             <li style="list-style: none;">
                                 <div class="icon">
                                     <i class="bi bi-check-circle" style="color: #50d8af; margin: 0px; padding: 10px; list-style: none; font-size: 20px; padding-right: 4px; color: #50d8af;"></i>
                                    <span class="content">
                                        We maintain team of Consultants who are brought into our service on a case &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; by case basis to ensure that we deliver a more professional and acceptable
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; services.


                                    </span>
                                 </div>
                             </li>


                         </ul>
                 </div>
              </div>

          </div>
        </div>
      </section>

<!--/ About End /-->
