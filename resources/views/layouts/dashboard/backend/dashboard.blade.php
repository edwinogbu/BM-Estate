@extends('layouts.dashboard.app')

@section('content')
<div class="row">
    <div class="col-lg-8 ">
        <div class="panel panel-default colorTheme">
            <div class="panel-heading clearfix">
                <div class="panel-heading-title pull-left">
                    <h6>ACTIVITY</h6>
                </div>
                <!--panel-heading-title-->
                <div class="panel-heading-buttons pull-right">
                    <div class="bs-example">
                        <p class="clearfix">
                            <button class="btn btn-defult remove"> <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!--panel-heading-buttons-->
            </div>
            <!--panel-->
            <div class="panel-body">
                <canvas id="chartDashboard10"></canvas>
            </div>
        </div>
        <!--panel-body-->
    </div>
    <div class="col-lg-4 ">
        <div class="panel panel-default ">
            <!--panel-->
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="indicators colorCyan">
                            <span>529</span>
                            <br>some text
                            <i class="fa fa-cloud-download"></i>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="indicators colorTheme">
                            <span>529</span>
                            <br>some text
                            <i class="fa fa-cloud-download"></i>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="indicators colorTheme">
                            <span>529</span>
                            <br>some text
                            <i class="fa fa-cloud-download"></i>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="indicators colorCyan">
                            <span>529</span>
                            <br>some text
                            <i class="fa fa-cloud-download"></i>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="indicators clearfix  colorCyan">
                            <div class="row">
                                <div class="col-md-6">
                                    <div id="sparkline22" class="indicatorsCharts">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="indicatorsContent">
                                        <span>529</span>
                                        <br>some text
                                        <i class="fa fa-cloud-download"></i>
                                    </div>
                                    <!--	indicatorsContent-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--panel-body-->
    </div>
</div>
<!--row-->
<div class="row">
    <!--row-->
    <div id="spy" class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default ">
                <div class="panel-heading clearfix">
                    <div class="panel-heading-title pull-left">
                        <h6>SALE RATE</h6>
                    </div>
                    <!--panel-heading-title-->
                    <div class="panel-heading-buttons pull-right">
                        <div class="bs-example">
                            <p class="clearfix">
                                <button class="btn remove"> <i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!--panel-heading-buttons-->
                </div>
                <!--panel-->
                <div class="panel-body-widget saleRateContent">
                    <div class="panelMenu">
                        <ul>
                            <li><a href="#" class="activePanelMenu">Day</a></li>
                            <li><a href="#">Month</a></li>
                            <li><a href="#">Year</a></li>
                        </ul>
                    </div>
                    <div class="panelBodyContentChart  day  panelBodyContentActive">


                        <div class="panelBodyContentMain">

                            <div class="chartPlaseholder">


                                <div id="placeholder11"></div>


                            </div>
                        </div>
                        <!--panelBodyContentMain-->
                    </div>

                    <!--panelBodyContent-->
                    <div class="panelBodyContentChart month">
                        <div class="panelBodyContentMain">
                            <div class="chartPlaseholder">
                                <div id="placeholder12"></div>
                            </div>
                        </div>
                        <!--panelBodyContentMain-->
                    </div>
                    <!--panelBodyContent-->
                    <div class="panelBodyContentChart year">
                        <div class="panelBodyContentMain">
                            <div class="chartPlaseholder">
                                <div id="placeholder13"></div>
                            </div>
                        </div>
                        <!--panelBodyContentMain-->
                    </div>
                    <!--panelBodyContent-->
                    <!--saleRateContent-->
                    <div class="saleRateFooter">
                        <ul>
                            <li><span class="sale1 saleIndigo">$157,182</span>
                                <br/><span>Total Earnings</span></li>
                            <li><span class="sale1">$38,952</span>
                                <br/><span>Revenue</span></li>
                            <li><span class="sale1">+800k</span>
                                <br/><span>New Customers</span></li>
                        </ul>
                        <div class="saleRateButtonPlaseholder">
                            <button type="button" class="btn btn-danger buttonsRounded float-button-light"><i class="fa fa-line-chart"></i></button>
                        </div>
                    </div>
                    <!--antConteinerFooter-->
                    <!--antConteinerFooter-->
                </div>
            </div>
            <!--panel-body-->
        </div>
    </div>
</div>

@endsection
