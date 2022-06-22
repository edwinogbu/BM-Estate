<style>

.form-1-box { padding-top: 30px; text-align: left; }

.form-1-box legend {
    font-size: inherit;
    line-height: 30px;
    font-weight: 600;
    text-transform: uppercase;
    color: #555;
}

.form-1-box .form-check-label {
    line-height: 1.5;
    vertical-align: top;
}

.form-1-box input[type="text"],
.form-1-box input[type="email"],
.form-1-box input[type="password"] {
    background: none;
    border: 1px solid #ddd;
    font-family: 'Open Sans', sans-serif;
    font-size: 15px;
    font-weight: 400;
    color: #888;
    box-shadow: none;
}

.form-1-box input[type="text"]:focus,
.form-1-box input[type="email"]:focus,
.form-1-box input[type="password"]:focus {
    outline: 0;
    background: none;
    border: 1px solid #db5d50;
    box-shadow: none;
}

.form-1-box input[type="text"]::-moz-placeholder,
.form-1-box input[type="email"]::-moz-placeholder,
.form-1-box input[type="password"]::-moz-placeholder {
    color: #bbb;
    font-style: italic;
}

.form-1-box input[type="text"]:-ms-input-placeholder,
.form-1-box input[type="email"]:-ms-input-placeholder,
.form-1-box input[type="password"]:-ms-input-placeholder {
    color: #bbb;
    font-style: italic;
}

.form-1-box input[type="text"]::-webkit-input-placeholder,
.form-1-box input[type="email"]::-webkit-input-placeholder,
.form-1-box input[type="password"]::-webkit-input-placeholder {
    color: #bbb;
    font-style: italic;
}

.form-1-box button.btn-customized {
    margin-top: 1rem;
    padding: .75rem 1.5rem;
    background: #db5d50;
    border: 0;
    font-family: 'Open Sans', sans-serif;
    font-size: 15px;
    font-weight: 400;
    color: #fff;
    box-shadow: none;
}

.form-1-box button.btn-customized:hover,
.form-1-box button.btn-customized:active,
.form-1-box button.btn-customized:focus,
.form-1-box button.btn-customized:active:focus,
.form-1-box button.btn-customized.active:focus,
.form-1-box button.btn.btn-primary:not(:disabled):not(.disabled):active,
.form-1-box button.btn.btn-primary:not(:disabled):not(.disabled):active:focus {
    outline: 0;
    background: #ca594d;
    border: 0;
    color: #fff;
    box-shadow: none;
}
</style>
<!--/ Contact Star /-->
<section class="">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        {{-- <div class="contact-map box">
          <div id="map" class="contact-map"> --}}
            {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1ses-419!2sve!4v1510329142834"
              width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> --}}
          {{-- </div>
        </div> --}}
      </div>
      {{-- <div class="col-sm-12 "> --}}
        {{-- <div class="row"> --}}
          <div class="col-md-12">
            <div class="clear"><!-- --></div>

                <div id="ColumnLeft_Content" class="pull-left">
                    <p><strong>Providing an indispensable service to attorneys, builders,
                        land developers, homeowners, architects, and engineers,
                         Bayo Modeyin Consultanting Chattered Estate Land Surveyor & valuers. is available for all
                         types of land surveying work.<br><br></strong></p><p>&nbsp;</p>
                </div>
            </div>

        <div id="Content" class="row col-sm-12">


            <!-- Form 1 -->
            <div class="form-1-container section-container">
                <div class="container">
                    <div class="row">
                        <div class="col form-1 section-description wow fadeIn">
                            <h1 class="text-center">Proposal Request</h1>
                            <div class="divider-1 wow fadeInUp"><span></span></div>
                            <p>
                                <h3 class="text-center" style="margin-left: 25%;">Please Kindly fill The  service Request Form</h3>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 offset-md-1 form-1-box wow fadeInUp">

                            <form id="form" action="{{  route('surveyor.form.store') }}" method="post" enctype="multipart/form-data" class=" userform">

                                        @csrf



                                <fieldset class="form-group border p-3">
                                    <legend class="w-auto px-2">Primary Contact</legend>
                                    <div class="form-group">
                                        <div class="odd valOwner">
                                            <input id="" class="radio" name="primary_contact" type="radio" value="Owner">
                                            <label for="">Owner</label>
                                        </div>

                                        <div class="even valAgent">
                                            <input id="" class="radio" name="primary_contact" type="radio" value="Agent">
                                            <label for="">Agent</label>
                                        </div>

                                        <div class="odd valOther">
                                            <input id="" class="radio" name="primary_contact" type="radio" value="Other">
                                            <label for="">Other</label>
                                        </div>
                                    </div>



                                </fieldset>


                                    <div id="" class="row">
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <label class="pull-left" for="">Company</label>
                                                <input type="text" name="company" class="form-control form-control-lg form-control" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                                </div>
                                            </div>
                                    </div>


                                    <div id="" class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label class="pull-left" for="">First Name</label>
                                            <input type="text" name="first_name" class="form-control form-control-lg form-control-a" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label class="pull-left" for="">Sur Name</label>
                                                <input type="text" name="sur_name" class="form-control form-control-lg form-control-a" placeholder="sur Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                            </div>
                                        </div>
                                    </div>




                                <fieldset class="form-group border p-3">
                                        <legend class="w-auto px-2">Contact preference</legend>

                                        <div class="middleColumn">
                                            <div class="odd valPhone">
                                                <input id="" class="checkbox" name="prefer_contact[]" type="checkbox" value="Phone">
                                                <label for="">Phone</label>
                                            </div>

                                            <div class="even valEmail">
                                                <input id="" class="checkbox" name="prefer_contact[]" type="checkbox" value="Email">
                                                <label for="">Email</label>
                                            </div>
                                        </div>

                                        <span id="" class="right-title">To expedite the request call 070-853-2672</span>

                                    </fieldset>


                                    <div id="" class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label for="">Phone</label>
                                            <input type="text" name="phone" class="form-control form-control-lg form-control-a" placeholder="Your Phone Number" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <input type="text" name="email" class="form-control form-control-lg form-control-a" placeholder="Email Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                            </div>
                                        </div>
                                    </div>




                                            <h3 class=" FormHeading" id="" data-id="">Property to be surveyed</h3>

                                            <div id="" class="row">
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-group">
                                                        <label for="">Address</label>
                                                        <input type="text" name="address" class="form-control form-control-lg form-control-a" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <div class="form-group">
                                                        <label for="">City</label>
                                                        <input type="text" name="city" class="form-control form-control-lg form-control-a" placeholder="sur Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="" class="row">
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-group">
                                                        <label for="">Country</label>
                                                        <input type="text" name="country" class="form-control form-control-lg form-control-a" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <div class="form-group">
                                                    <label for="">Country Code</label>
                                                    <input type="text" name="code" class="form-control form-control-lg form-control-a" placeholder="sur Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                                    </div>
                                                </div>
                                            </div>

                                        <div class="form-group col-md-8">
                                                <label class="left" for="">Property type</label>
                                                <select id="inputState" name="property_type" class="form-control">
                                                <option selected>Choose...</option>
                                                <option value="(select one)">(select one)</option>

                                                <option value="Residential">Residential</option>

                                                <option value="Commercial">Commercial</option>

                                                <option value="Vacant Land">Vacant Land</option>

                                                <option value="Industrial">Industrial</option>

                                                <option value="Condominium/Residential">Condominium/Residential</option>

                                                <option value="Condominium/Commercial">Condominium/Commercial</option>

                                                <option value="Recreation and Entertainment">Recreation and Entertainment</option>

                                                <option value="Community Services">Community Services</option>

                                                <option value="Public Services">Public Services</option>

                                                <option value="Agricultural">Agricultural</option>

                                                <option value="Wild, Forested, Conservation Lands and Public Parks">Wild, Forested, Conservation Lands and Public Parks</option>

                                                </select>
                                        </div>



                                        <!-- User's Preferences  -->
                                <fieldset class="form-group border p-3">
                                    <legend class="w-auto px-2">Do you know the property size?</legend>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="known_size" id="daily" value="yes">
                                        <label class="form-check-label" for="daily">Yes <strong>I</strong> Have</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="known_size" id="weekly" value="no">
                                        <label class="form-check-label" for="weekly">No <strong>I</strong> Don't</label>
                                    </div>

                                </fieldset>


                                    <div id="" class="row">
                                        <div class="col-md-12 mb-3">
                                            <div class="form-group">
                                                <label for="">Property Size</label>
                                                <input type="text" name="property_size" class="form-control form-control-lg form-control" placeholder="enter property size e.g 3,125 Sq.Ft -or- 1/4 acre" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                            </div>
                                        </div>
                                    </div>



                                            <!-- User's Preferences  -->
                                <fieldset class="form-group border p-3">
                                    <legend class="w-auto px-2"> Do you have a copy of an old survey?</legend>


                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="known_survey_copy" id="daily" value="yes">
                                        <label class="form-check-label" for="daily">Yes <strong>I</strong> Have</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="known_survey_copy" id="weekly" value="I don&#039;t know">
                                        <label class="form-check-label" for="weekly">No <strong>I</strong> Don't</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="known_survey_copy" id="weekly" value="I will look for it">
                                        <label class="form-check-label" for="weekly">I <strong>Will Look</strong> For It</label>
                                    </div>
                                    <span id="" class="right-title">Discount maybe applied if copy of qualified survey is  sent to the surveyor</span>

                                </fieldset>


                                            <!-- User's Preferences  -->
                                <fieldset class="form-group border p-3">
                                    <legend class="w-auto px-2">Are there pre-existing survey property markers on the site? </legend>


                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="survey_property_markers" id="daily" value="yes">
                                        <label class="form-check-label" for="daily">Yes <strong>I</strong> Have</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="survey_property_markers" id="weekly" value="I don&#039;t know">
                                        <label class="form-check-label" for="weekly">No <strong>I</strong> Don't</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="survey_property_markers" id="weekly" value="I will look for it">
                                        <label class="form-check-label" for="weekly">I <strong>Will Look</strong> For It</label>
                                    </div>
                                    <span id="" class="right-title">Discount maybe applied if copy of qualified survey is  sent to the surveyor</span>

                                </fieldset>



                                            <!-- User's Preferences  -->
                                <fieldset class="form-group border p-3">
                                    <legend class="w-auto px-2">Services required</legend>

                                        <div class="form-check">
                                            <div class="odd valPlat_of_Survey_Boundary">
                                                <input id="" class="checkbox form-check-input" name="service_required['key']" type="checkbox" value="Plat of Survey/Boundary">
                                                <label for="">Plat of Survey/Boundary</label>
                                            </div>

                                            <div class="even valPlat_of_Survey_Boundary__with_property_markers_">
                                                <input id="" class="checkbox form-check-input" name="service_required['key']" type="checkbox" value="Plat of Survey/Boundary (with property markers)">
                                                <label for="">Plat of Survey/Boundary (with property markers)</label>
                                            </div>

                                            <div class="odd valALTA_NSPS_Land_Title_Survey">
                                                <input id="" class="checkbox form-check-input" name="service_required['key']" type="checkbox" value="ALTA/NSPS Land Title Survey">
                                                <label for="">ALTA/NSPS Land Title Survey</label>
                                            </div>

                                            <div class="even valCondominium_Survey">
                                                <input id="" class="checkbox form-check-input" name="service_required['key']" type="checkbox" value="Condominium Survey">
                                                <label for="">Condominium Survey</label>
                                            </div>

                                            <div class="odd valSubdivision">
                                                <input id="" class="checkbox form-check-input" name="service_required['key']" type="checkbox" value="Subdivision">
                                                <label for="">Subdivision</label>
                                            </div>

                                            <div class="even valTopographic_Survey">
                                                <input id="" class="checkbox form-check-input" name="service_required['key']" type="checkbox" value="Topographic Survey">
                                                <label for="">Topographic Survey</label>
                                            </div>

                                            <div class="odd valFEMA_Elevation_Certificate">
                                                <input id="" class="checkbox form-check-input" name="service_required['key']" type="checkbox" value="FEMA Elevation Certificate">
                                                <label for="">FEMA Elevation Certificate</label>
                                            </div>

                                            <div class="even valConstruction_Survey">
                                                <input id="" class="checkbox form-check-input" name="service_required['key']" type="checkbox" value="Construction Survey">
                                                <label for="">Construction Survey</label>
                                            </div>

                                            <div class="odd valFoundation_Location_Spot_Foundation">
                                                <input id="" class="checkbox form-check-input" name="service_required['key']" type="checkbox" value="Foundation Location/Spot Foundation">
                                                <label for="">Foundation Location/Spot Foundation</label>
                                            </div>

                                            <div class="even valAs-Built_Survey">
                                                <input id="" class="checkbox form-check-input" name="service_required['key']" type="checkbox" value="As-Built Survey">
                                                <label for="">As-Built Survey</label>
                                            </div>

                                            <div class="odd valTax_Division_Map">
                                                <input id="" class="checkbox form-check-input" name="service_required['key']" type="checkbox" value="Tax Division Map">
                                                <label for="">Tax Division Map</label>
                                            </div>

                                            <div class="even valSite_Plan">
                                                <input id="" class="checkbox form-check-input" name="service_required['key']" type="checkbox" value="Site Plan">
                                                <label for="">Site Plan</label>
                                            </div>

                                            <div class="odd valCivil_Engineering">
                                                <input id="" class="checkbox form-check-input" name="service_required['key']" type="checkbox" value="Civil Engineering">
                                                <label for="">Civil Engineering</label>
                                            </div>

                                            <div class="even valOther__please_describe_in_the_comments_">
                                                <input id="" class="checkbox form-check-input" name="service_required['key']" type="checkbox" value="Other (please describe in the comments)">
                                                <label for="">Other (please describe in the comments)</label>
                                            </div>
                                        </div>



                                    </fieldset>


                                            <fieldset id="EditableDropdown155" class="field optionset checkboxset">
                                        <legend class="left">Survey purpose</legend>

                                        <div class="form-check">
                                            <div class="odd valReal_estate_closing">
                                                <input id="" class="checkbox" name="survey_purpose[]" type="checkbox" value="Real estate closing">
                                                <label for="">Real estate closing</label>
                                            </div>

                                            <div class="even valPermit">
                                                <input id="" class="checkbox" name="survey_purpose[]" type="checkbox" value="Permit">
                                                <label for="">Permit
                                                    <span>

                                                        (please list the permit type in area) </label>
                                                    </span>
                                            </div>

                                            <div class="odd valBoundary_dispute_">
                                                <input id="" class="checkbox" name="survey_purpose[]" type="checkbox" value="Boundary dispute ">
                                                <label for="">Boundary dispute <span>

                                                    (please specify in  area)</label>
                                                </span>
                                            </div>

                                            <div class="even valOther">
                                                <input id="" class="checkbox" name="survey_purpose[]" type="checkbox" value="Other">
                                                <label for="">Other
                                                    <span>

                                                        (please specify in  area)
                                                    </span>
                                                </label>
                                            </div>
                                        </div>



                                    </fieldset>




                                        <div class="form-group col-md-8">
                                            <label class="left" for="">Request stage</label>
                                            <select id="inputState" name="request_stage" class="form-control">
                                            <option selected>Choose...</option>

                                                <option value="Planning and budgeting">Planning and budgeting</option>

                                                <option value="Ready to hire">Ready to hire</option>

                                                <option value="Need a rush service">Need a rush service</option>

                                            </select>
                                        </div>




                                        <div class="col-md-8 mb-3">
                                            <label class="left" for="">Plat of Survey needed before</label>
                                            <div class="form-group">
                                                <input type="date" name="date_of_Survey_plate" class="form-control" id="" required="required" aria-required="true" data-rule-required="true" data-msg-required="&amp;#039;Plat of Survey needed before&amp;#039; is required" placeholder="mm/dd/yy" autocomplete="off" aria-describedby="EditableDateField157_right_title">
                                            </div>
                                        <span id="" class="right-title"> (For completion of survey services allow 7-10 days, weather permitting. Call us for rush orders.)</span>

                                    </div>




                                    <div class="col-md-12 mb-3">
                                        <label class="left" for="">Special requirements or comments</label>
                                        <div class="form-group">
                                        <textarea name="message" class="form-control" name="message" cols="45" rows="8" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                        <div class="validation"></div>
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                            <button type="submit" class="btn btn-a">{{ __('Send Message') }}</button>
                                    </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <p>&nbsp;</p><p>&nbsp;</p>


                </div>
            </div>
            <div class="clear"><!-- --></div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Contact End /-->
