<style>

#services .readmore {
    margin-top: 15px;
    display: inline-block;
    color: #050;
}
</style>
<section id="services">
    <div class="container aos-init aos-animate" data-aos="fade-up">
      <div class="section-header">


        <h2>  OUR PROFESSIONAL SERVICES</h2>
        {{-- <p>
            Our real estate practice is focused on delivering excellent services to our Clients.
            To meet up with this objective, we maintain a team of competent and experienced
            professional with considerable wealth of experience and conversant with the
            knowledge of the property market. The professional are ready to deliver any of the
            under listed services that falls within the scope of our operations:
        </p> --}}
      </div>

      <div class="row gy-4">

        {{-- <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <div class="box">
            <div class="icon"><i class="bi bi-briefcase"></i></div>
            <h4 class="title"><a href="">Valuation;</a></h4>
            <p class="description">
                {{ Str::limit( 'here we assist our prospective client in determining the worth
                    of an interest in landed property and assets for any of the following
                    purpose: Audit or Balance Sheet, Asset Sharing, Merger and Acquisition,
                    Rental, Mortgage, Insurance, Compulsory Purchase and Compensation,
                    Injurious Affection, Probate, Property Rating and Taxation,
                    Commercialization and Privatization and other related purposes', 150, $end='...')  }}


                <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>

            </p>

          </div>
        </div>

        <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
          <div class="box">
            <div class="icon"><i class="bi bi-card-checklist"></i></div>
            <h4 class="title"><a href="">Property Management: </a></h4>
            <p class="description">
                {{ Str::limit( 'Our services here entails; enforcement of lease
                and tenancy agreement terms, property maintenance, rent collection and 4
                review, tenants selection, routine inspection and service charge
                administration;', 150, $end='...')  }}
                  <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </p>

          </div>
        </div>

        <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
          <div class="box">
            <div class="icon"><i class="bi bi-bar-chart"></i></div>
            <h4 class="title"><a href="">Project management </a></h4>
            <p class="description">
                {{ Str::limit( 'Under Project Management we assist clients to supervise activities on construction works and also carry out renovation
                and maintenance of building;', 150, $end='...')  }}


              <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </p>

          </div>
        </div>

        <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
          <div class="box">
            <div class="icon"><i class="bi bi-binoculars"></i></div>
            <h4 class="title"><a href="">Real Estate Investment Appraisal and Analysis </a></h4>
            <p class="description">
                {{ Str::limit( 'Here we assist our prospective client to carry out a feasible study
                 on a proposed investment
                and advised on its Practicability and Viability.', 250, $end='...')  }}

            <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </p>

          </div>
        </div>

        <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
          <div class="box">
            <div class="icon"><i class="bi bi-binoculars"></i></div>
            <h4 class="title"><a href="">Real Estate Advisory and Consultancy </a></h4>
            <p class="description">
                {{ Str::limit( 'Under Real Estate Advisory and consultancy, we advised our clients on the most ideal and secure Real
                Estate investment options and other Real Estate matters.', 150, $end='...')  }}

               <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </p>

          </div>
        </div>

        <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
          <div class="box">
            <div class="icon"><i class="bi bi-binoculars"></i></div>
            <h4 class="title"><a href="">Land Acquisition, Perfection of Title and Asset Disposal</a></h4>
            <p class="description">
                {{ Str::limit( 'we help our client to acquire landed properties, suitable for their personal or business
                needs and perfection of the title documents for such land if need be. We
                may further be engaged for disposal of the company assets such as: land
                and building, Plant, Machineries and Equipments, Motor Vehicle, Tanks,
                Furniture and Fittings and other related companies assets.', 150, $end='...')}}

               <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </p>

          </div>
        </div> --}}
        @php
            // $icons = ['binoculars', 'briefcase', 'card-checklist','binoculars', 'briefcase', 'card-checklist','binoculars'];
            $icon1 = 'binoculars';
            $icon2 = 'briefcase' ;
            $icon3 = 'card-checklist';
            $icons = [$icon1];
        @endphp
@forelse ($services as $service)

@foreach ($icons as $icon)
<div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="700">
    <div class="box">

      <div class="icon"><i class="bi bi-{{ $icon }}"></i></div>

      {{-- <div class="icon"><i class="bi bi-binoculars"></i></div> --}}
      <h4 class="title"><a href="">  {{  $service->title }}</a></h4>
      <p class="description">
          {{ Str::limit($service->text, 120, $end='..')}}

          <a href="{{ route('service.show', $service->id) }}" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
        </p>
    </div>
</div>
@endforeach

@empty
 No Services Upload yet
@endforelse


      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              {{-- <h2 class="title-a" style="color: #05083b;">{{ __('Our Service') }}</h2> --}}
            </div>
            <div class="title-link">
              <a href="{{ route('services') }}" style="color: #05083b;">{{ __('Our Service Details') }}
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
