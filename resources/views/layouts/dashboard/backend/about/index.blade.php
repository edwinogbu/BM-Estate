@extends('layouts.dashboard.app')
@section('content')


<div id="mainWrapper" class="mainConteiner column">
    <!--start nainconteiner-->
    <div class="mainConteinerConten">
        <div class="container-fluid footerfix">
            <!--row firstRow-->
            @include('layouts.dashboard.partials.first-row')
            <!--	MEIN CONTENT  -->
            <div id="spy" class="row">
                <div class="row">
                    <div class="col-lg-12 ">
                            <div class="panel panel-default">
                                <div class="panel-heading clearfix">
                                    <div class="panel-heading-title pull-left">
                                        <h6>ABOUT</h6>

                                        <div class="buttonWrapper">
                                            <button type="button" class="btn btn-default btn-info pull-left btn-lg" data-toggle="modal" data-target="#myModal">ADD ABOUT</button>
                                        </div>
                                    </div>
                                    <!--panel-heading-title-->
                                    <div class="panel-heading-buttons pull-right">
                                        <div class="bs-example">
                                            <ul class="clearfix">
                                                <li class="btn btn-defult remove"> <i class="fa fa-times"></i></li>
                                                <li class="btn btn-defult  fullScreen"> <i class="fa fa-expand"></i> </li>
                                                <li class=" btn btn-defult dropdown">
                                                    <a id="drop10" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-cog"></i>
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="drop10">
                                                        <li><a href="#">Action</a></li>

                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--panel-heading-buttons-->
                                </div>
                                <!--panel-->
                                <div class="panel-body">
                                    <table class="table tableCyan table-striped-cyan ">
                                        <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>{{ __('Title Name') }}</th>
                                                <th>{{ __('Subtitle') }}</th>
                                                <th>{{ __('About ') }}</th>
                                                <th>{{ __('Team Picture') }}</th>
                                                <th>{{ __('Company Image') }}</th>
                                                <th class="pull-right">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($aboutMb as $about)
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>{{ $about->title }}</td>
                                                <td>{{ $about->subtitle }}</td>
                                                <td>{{ $about->text }}</td>
                                                <td>
                                                    <img src="{{ Storage::url($about->team_image) }}" alt="team image" style="width: 100px; height: ;50px; border-radius:100%;">

                                                </td>
                                                <td>
                                                    <img src="{{ Storage::url($about->company_image) }}" alt="team image" style="width: 100px; height: ;50px; border-radius:100%;">

                                                </td>
                                                <td>

                                                    <form action="{{ route('about.destroy', $about->id) }}">
                                                        <a href="{{ route('about.edit', $about->id) }}" type="button" class="btn btn-sm btn-primary">Edit</a>
                                                        <button type="submit" class="btn btn-sm btn-primary" >Delete</button>
                                                    </form>
                                                </td>

                                                <td class="pull-right">
                                                    <div class="butto-group">

                                                        {{-- <a href="{{ route('agent.edit', $agent->id) }}" class="btn btn-info btn-xs">
                                                            <i class="pl-2 fa fa-edit">Edit</i>
                                                        </a>
                                                        <a href="{{ route('agent.show', $agent->id) }}" class="btn btn-info btn-xs">
                                                            <i class="pl-2 fa fa-edit">Show</i>
                                                        </a>

                                                        <a href="{{ route('agent.destroy', $agent->id) }}" class="btn btn-danger btn-xs">
                                                            <i class="pl-2 fa fa-trash">Delete</i>
                                                        </a> --}}
                                                    </div>
                                                    </td>
                                            </tr>

                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--panel-body-->
                    </div>
                </div>

                <div class="col-md-12 " style="display: none">
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


            <!---
                ----FUTURE REVIEW :
                 PLS ENGR EDDY REMEMBER.
            EDDY TECH DUE TO THE URGENCY OF THE WORK
            AND THE COMPLEXITY OF THE TEMPLATE STRUCTURE
            DISPLAY NONE WAS USED TO HIDE OTHER FEATURE NOT NEEDED
            --->
            <!--row-->
            <div class="row"  style="display: none">
                <div class="col-lg-4 col-md-12">
                    <div class="panel panel-default colorPink h550">
                        <div class="panel-heading clearfix">
                            <div class="panel-heading-title pull-left">
                                <h6>TODAY</h6>
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
                        <div class="panel-body">
                            <div class="todayWrapper">
                                <div class="visitors ">
                                    <canvas id="chartDashboard4"></canvas>
                                </div>
                                <div class="pageviews  todayHide">
                                    <canvas id="chartDashboard41"></canvas>
                                </div>
                                <div class="logs todayHide">
                                    <canvas id="chartDashboard42"></canvas>
                                </div>
                            </div>
                            <div class="todayFooter">
                                <ul class="clearfix">
                                    <li class=""><a class="todayGraph1" href="#">VISITORS</a></li>
                                    <li class=""><a class="todayGraph2" href="#">PAGEVIEWS</a></li>
                                    <li class=""><a class="todayGraph3" href="#">LOGS<span class="badge todayBage">3</span></a></li>
                                </ul>
                                <br>
                                <p class="flow-text">Viris phaedrum ad cum, in usu ipsum percipit. Ut ponderum percipitur est, cum no natum ponderum. In affert fierent vix.</p>
                            </div>
                            <!--todayFooter-->
                        </div>
                    </div>
                    <!--panel-body-->
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="panel panel-default h550">
                        <div class="panel-heading clearfix">
                            <div class="panel-heading-title pull-left">
                                <h6>LAST MONTH</h6>
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
                        <div class="panel-body">
                            <canvas id="chartDashboard5"></canvas>
                            <div class="lastFooter">
                                <ul>
                                    <li><span class="number1">1</span><span class="description">.inc company</span><span class="index">8%</span></li>
                                    <li><span class="number2">2</span><span class="description">Camecorp</span><span class="index">23%</span></li>
                                    <li><span class="number3">3</span><span class="description">Startup</span><span class="index">69%</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--panel-body-->
                </div>


                <div id="lastWeek" class="col-lg-4 col-md-12">
                    <div class="panel panel-default colorTheme h550">
                        <div id="lastWeekHeader" class="panel-heading clearfix">
                            <div class="panel-heading-title pull-left">

                                <h6>LAST WEEK</h6>
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
                        <div class="panel-body">
                            <div class="weekIndex">
                                <span class="weekIndexDescription">total visitor</span><span class="index">26.349</span>
                                <br/>
                                <span class="weekIndexDescription">total orders</span><span class="index">16.349</span>
                            </div>
                            <canvas id="chartDashboard6"></canvas>
                        </div>
                    </div>
                    <!--panel-body-->
                </div>
            </div>
            <!--row-->
            <div class="row"  style="display: none">
                <div class="col-lg-4 ">
                    <div class="row noP">
                        <div class="col-lg-12">
                            <div class="panel panel-widgets">
                                <div class="weatherContent clearfix ">
                                    <div id="weather"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="panel panel-widgets countdownWrapper">
                                <div class="panel-body">
                                    <div class="countdownContent colorTextTheme">
                                        <div id="countdown1"></div>
                                    </div>
                                </div>
                                <div class="panel-footer colorTheme">
                                    Appointment with Doctor Markinson
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 ">
                    <div class="panel panel-default">
                        <div class="panel-heading clearfix">
                            <div class="panel-heading-title pull-left">
                                <h6>AMSTERDAM</h6>
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
                        <div class="panel-body clearfix">
                            <img class="img-rounded img-responsive" src="img/amsterdam.jpg" alt="amsterdam">
                            <div class="amsterdamContent">
                                <div class="amsterdamButtonPlaseholder">
                                    <button type="button" class="btn btn-danger buttonsRounded float-button-light"><i class="fa fa-pencil"></i></button>
                                </div>
                                <!--	amsterdamContent-->
                                <br>
                                <br>
                                <p>Amsterdam's name derives from Amstelredamme, indicative of the city's origin as a dam of the river Amstel. Originating as a small fishing village in the late 12th century, Amsterdam became one of the most important ports in the world during the Dutch Golden Age (17th century), a result of its innovative developments in trade.</p>
                                <p> During that time, the city was the leading center for finance and diamonds. In the 19th and 20th centuries, the city expanded, and many new neighborhoods and suburbs were planned and built. The 17th-century canals of Amsterdam and the 19–20th century Defence Line of Amsterdam are on the UNESCO World Heritage List.</p>
                                <p> During that time, the city was the leading center for finance and diamonds. In the 19th and 20th centuries, the city expanded, and many new neighborhoods and suburbs were planned and built. The 17th-century canals of Amsterdam and the 19–20th century Defence Line of Amsterdam are on the UNESCO World Heritage List.</p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <!--panel-body-->
                </div>
            </div>
            <!--row-->
            <div class="row"  style="display: none">
                <div class="col-lg-4 ">
                    <div class="row noP">
                        <div class="col-lg-12">
                            <div class="panel panel-widgets">
                                <div class="panel-body">
                                    <div class="userProfil">
                                        <img class="img-circle img-responsive" src="img/userProfil.jpg" alt="amsterdam">
                                        <span class="colorTextCyan">Olga Lutskova</span>
                                        <p>Puerto Cortes, Honduras</p>
                                    </div>
                                    <!--userProfil-->
                                </div>
                                <div class="panel-footer colorCyan">
                                    <div class="row userFooter">
                                        <div class="col-xs-4">
                                            <p><i class="fa fa-heart"></i>
                                                <br/>25,498</p>
                                        </div>
                                        <div class="col-xs-4"><i class="fa fa-thumb-tack"></i>
                                            <br/>145,369</div>
                                        <div class="col-xs-4"><i class="fa fa-comment"></i>
                                            <br/>2,487</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="panel panel-widgets">
                                <div class="panel-body">
                                    <div class="downloadFoto" style="background-image: url(img/downloadFoto.jpg)">

                                    </div>
                                    <!--downloadFoto-->
                                </div>
                                <div class="panel-footer colorTheme">
                                    <div class="downloadFotoFooter">
                                        <div class="row">
                                            <div class="col-xs-6 left"><i class="fa fa-heart"></i>25,498</div>
                                            <div class="col-xs-6 right"><i class="fa fa-cloud-download"></i>25,498</div>
                                        </div>
                                    </div>
                                    <!--downloadFotoFooter-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading clearfix">
                            <div class="panel-heading-title pull-left">
                                <h6>DRAGABLE TASK AND MEETING</h6>
                            </div>
                            <!--panel-heading-title-->
                            <div class="panel-heading-buttons pull-right">
                                <div class="bs-example">
                                    <p class="clearfix">
                                        <button class="btn remove"> <i class="fa fa-times"></i></button>
                                    </p>
                                </div>
                            </div>
                            <!--panel-heading-buttons-->
                        </div>
                        <!--panel-->
                        <div class="panel-body">

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="todoWrapper">
                                        <div class="sort-todo">
                                            <a class="all-todo" href="#">All</a>
                                            <a class="active-todo" href="#">Active </a>
                                            <a class="complete-todo" href="#">Complete </a>
                                            <a class="archive-todo" href="#">Archive </a>
                                        </div>
                                        <br>
                                        <form id="add_todo" method="post">
                                            <div class="form-group add-todo">
                                                <div class="input-group input-group-lg input-primary">
                                                    <input type="text" class="form-control name-of-todo" placeholder="Write  your tasks">
                                                    <span class="input-group-addon border-right" id="basic-addon2"><i class="fa fa-pencil"></i></span>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="panel">
                                            <div class="panel-body todo">
                                                <ul class="list-group">
                                                    <li class="list-group-item">
                                                        <div class="checkbox">
                                                            <input id="checkbox" class="styled" type="checkbox">
                                                            <label for="checkbox">
                                                                Meeting with friends
                                                            </label>
                                                        </div>
                                                        <div class="pull-right action-btns">
                                                            <a href="#" class="archive"><span class="fa fa-archive"></span></a>
                                                            <a href="#" class="trash"><span class="fa fa-close"></span></a>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="checkbox">
                                                            <input type="checkbox" id="checkbox1" />
                                                            <label for="checkbox1">
                                                                Update design
                                                            </label>
                                                        </div>
                                                        <div class="pull-right action-btns">
                                                            <a href="#" class="archive"><span class="fa fa-archive"></span></a>
                                                            <a href="#" class="trash"><span class="fa fa-close"></span></a>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item checked-todo">
                                                        <div class="checkbox">
                                                            <input type="checkbox" id="checkbox2" checked/>
                                                            <label for="checkbox2">
                                                                Call manager
                                                            </label>
                                                        </div>
                                                        <div class="pull-right action-btns">
                                                            <a href="#" class="archive"><span class="fa fa-archive"></span></a>
                                                            <a href="#" class="trash"><span class="fa fa-close"></span></a>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="checkbox">
                                                            <input type="checkbox" id="checkbox3" />
                                                            <label for="checkbox3">
                                                                Business lunch with Mr. Thompson
                                                            </label>
                                                        </div>
                                                        <div class="pull-right action-btns">
                                                            <a href="#" class="archive"><span class="fa fa-archive"></span></a>
                                                            <a href="#" class="trash"><span class="fa fa-close"></span></a>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="checkbox">
                                                            <input type="checkbox" id="checkbox4" />
                                                            <label for="checkbox4">
                                                                Сontrol sales
                                                            </label>
                                                        </div>
                                                        <div class="pull-right action-btns">
                                                            <a href="#" class="archive"><span class="fa fa-archive"></span></a>
                                                            <a href="#" class="trash"><span class="fa fa-close"></span></a>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="checkbox">
                                                            <input type="checkbox" id="checkbox5" />
                                                            <label for="checkbox5">
                                                                Write a letter to Ms. Gareth
                                                            </label>
                                                        </div>
                                                        <div class="pull-right action-btns">
                                                            <a href="#" class="archive"><span class="fa fa-archive"></span></a>
                                                            <a href="#" class="trash"><span class="fa fa-close"></span></a>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="checkbox">
                                                            <input type="checkbox" id="checkbox6" />
                                                            <label for="checkbox6">
                                                                Сall parents
                                                            </label>
                                                        </div>
                                                        <div class="pull-right action-btns">
                                                            <a href="#" class="archive"><span class="fa fa-archive"></span></a>
                                                            <a href="#" class="trash"><span class="fa fa-close"></span></a>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="checkbox">
                                                            <input type="checkbox" id="checkbox7" />
                                                            <label for="checkbox7">
                                                                Find information on the pattern
                                                            </label>
                                                        </div>
                                                        <div class="pull-right action-btns">
                                                            <a href="#" class="archive"><span class="fa fa-archive"></span></a>
                                                            <a href="#" class="trash"><span class="fa fa-close"></span></a>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="checkbox">
                                                            <input type="checkbox" id="checkbox8" />
                                                            <label for="checkbox8">
                                                                Accurate prices for works
                                                            </label>
                                                        </div>
                                                        <div class="pull-right action-btns">
                                                            <a href="#" class="archive"><span class="fa fa-archive"></span></a>
                                                            <a href="#" class="trash"><span class="fa fa-close"></span></a>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">

                                                        <div class="checkbox">
                                                            <input type="checkbox" id="checkbox9" />
                                                            <label for="checkbox9">
                                                                Сheck purchases
                                                            </label>
                                                        </div>
                                                        <div class="pull-right action-btns">
                                                            <a href="#" class="archive"><span class="fa fa-archive"></span></a>
                                                            <a href="#" class="trash"><span class="fa fa-close"></span></a>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="checkbox">
                                                            <input type="checkbox" id="checkbox10" />
                                                            <label for="checkbox10">
                                                                Сall Dr. Harith
                                                            </label>
                                                        </div>
                                                        <div class="pull-right action-btns">
                                                            <a href="#" class="archive"><span class="fa fa-archive"></span></a>
                                                            <a href="#" class="trash"><span class="fa fa-close"></span></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="checkbox clear-todo pull-left">
                                            <input type="checkbox" id="clear" />
                                            <label for="clear">
                                                Mark all as complete
                                            </label>
                                        </div>
                                        <button id="clear-comp" class="btn btn-danger btn-df float-button-light   pull-right m-5-0">CLEAR </button>
                                    </div>
                                </div>
                                <!--todoWrapper-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--row-->
            <div class="row"  style="display: none">
                <div class="col-lg-8 ">
                    <div class="panel panel-default h350">
                        <div class="panel-heading clearfix">
                            <div class="panel-heading-title pull-left">
                                <h6>Managed Services</h6>
                                <small>SERVICE REPORT OF THIS YEAR</small>
                            </div>
                            <!--panel-heading-title-->
                            <div class="panel-heading-buttons pull-right">
                                <div class="bs-example">
                                    <p></p>
                                    <div class="position3 pull-right">
                                        <div class="switch">
                                            <div class="handle"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--panel-heading-buttons-->
                        </div>
                        <!--panel-->
                        <div class="panel-body">
                            <div class="serviseWrapper">
                                <div class="serviseContent animated pulse">
                                    <canvas id="chartDashboard7"></canvas>
                                </div>
                                <!--serviseContent-->
                                <div class="serviseContent animated  servisehide">
                                    <canvas id="chartDashboard"></canvas>
                                </div>
                                <!--serviseContent-->
                            </div>
                            <!--	serviseWrapper-->
                        </div>
                    </div>
                    <!--panel-body-->
                </div>
                <div class="col-lg-4 ">
                    <div class="panel panel-default colorTheme smartPanel h350">
                        <div class="panel-heading clearfix">
                            <div class="panel-heading-title pull-left">
                                <h6>REPORTS</h6>
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
                            <span class="colorTextWhite">Consulting</span><span class="colorTextWhite pull-right">80%</span>
                            <div class="progress progress-success-thin">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                    <span class="sr-only">80% Complete</span>
                                </div>
                            </div>
                            <span class="colorTextWhite">Online tutorials</span><span class="colorTextWhite pull-right">60%</span>
                            <div class="progress progress-info-thin ">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                    <span class="sr-only">60% Complete</span>
                                </div>
                            </div>
                            <span class="colorTextWhite">EDU management</span><span class="colorTextWhite pull-right">40%</span>
                            <div class="progress progress-danger-thin">
                                <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                    <span class="sr-only">40% Complete</span>
                                </div>
                            </div>
                            <p class="smartText colorTextWhite"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <!--panel-body-->
                    </div>
                </div>
            </div>
            <!--row-->
            <div class="row"  style="display: none">
                <div class="col-lg-12 ">
                    <div class="panel panel-default colorCyan h350">
                        <div class="panel-heading clearfix">
                            <div class="panel-heading-title pull-left">
                                <h6>ACTIVITY</h6>
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
                        <div class="panel-body">
                            <canvas id="chartDashboard1"></canvas>
                        </div>
                    </div>
                    <!--panel-body-->
                </div>
            </div>
            <!--row-->
            <div class="row"  style="display: none">
                <div class="col-lg-12 ">
                    <div class="panel panel-default">
                        <div class="panel-heading clearfix">
                            <div class="panel-heading-title pull-left">
                                <h6>MAP</h6>
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
                        <div class="panel-body">
                            <div class="mapWrapper">
                                <div class="mapConteiner">
                                    <div id="map"></div>
                                </div>
                                <!--mapWrapper-->
                                <div class="mapConteinerFooter clearfix">
                                    <span class="marker"><i class="fa fa-map-marker"></i></span>
                                    <span class="address">RIDS<br/>2 College St,  Providence, RI 02903, United States</span>
                                    <div class="mapButtons">
                                        <button type="button" class="btn btn-danger btn-df float-button-light pull-right">PRINT</button>
                                        <button type="button" class="btn btn-danger btn-df float-button-light pull-right">SHARE</button>
                                    </div>
                                </div>
                                <!--mapConteinerFooter-->
                            </div>
                            <!--antConteinerFooter-->
                        </div>
                    </div>
                    <!--panel-body-->
                </div>
            </div>


            <!--row-->
            <!--MEIN CONTENT  -->

        </div>
        <!--container-fluid-->
    </div>
    <!--mainConteinerConten-->
    <div class="fotterWrapper">
        Eddy @Page Inn0vation © 2022 Copyright.
    </div>
    <!--fotterWrapper-->
</div>

<div class="modal modal-success fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Create  About Us</h4>
            </div>
            <div class="modal-body modal-default" style="background-color: white; color:black;">
                <form id="add-agent-form" data-parsley-validate="" novalidate=""
                        method="POST"
                        enctype="multipart/form-data"
                        action="{{ route('about.store') }}">
                        @csrf
                        <div class="row inputWrapper ">

                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right">
                                    <h6 class="modal-title">
                                    {{ __('title name') }}
                                    </h6>
                                    </label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input value="" name="title" type="text" placeholder="title name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right">
                                    <h6 class="modal-title">
                                    {{ __('subtitle name') }}
                                    </h6>
                                    </label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input value="" name="subtitle" type="text" placeholder="title name" class="form-control">
                            </div>
                        </div>


                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right">
                                    <h6 class="modal-title">
                                    {{__('About')}}
                                        </h6>
                            </label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <textarea name="text" type="text" class="form-control" cols="4" ></textarea>
                            </div>
                        </div>
                        <div class="row inputWrapper ">
                        <br>
                                <br>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">
                                        <h6 class="modal-title">
                                            {{ __('Select Image File') }}
                                        </h6>
                                        </label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                    <div class="left-inner-addon ">
                                        <i class="fa fa-file"></i>
                                        <input type="file" name="team_image" class="form-control" placeholder="custom file">
                                        <label class="custom-file-label" for="customFile">Select image (800x896)</label>

                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">
                                        <h6 class="modal-title">
                                            {{ __('Select horizontal_image File') }}
                                        </h6>
                                        </label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                    <div class="left-inner-addon ">
                                        <i class="fa fa-file"></i>
                                        <input type="file" name="horizontal_image" class="form-control" placeholder="custom horizontal_image file">
                                        <label class="custom-file-label" for="customFile">Select image (800x896)</label>

                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">
                                        <h6 class="modal-title">
                                            {{ __('Select vertical_image Image File') }}
                                        </h6>
                                        </label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                    <div class="left-inner-addon ">
                                        <i class="fa fa-file"></i>
                                        <input type="file" name="vertical_image" class="form-control" placeholder="custom vertical_image file">
                                        <label class="custom-file-label" for="customFile">Select image (800x896)</label>

                                    </div>
                                </div>
                                <br>
                                <br>
                                <br>




                    </div>
                    <div class="modal-footer">
                        <div class="registrationButtonPlaseholder text-center">
                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                <button
                                type="submit"
                                class="btn btn-default btn-info pull-right btn-lg">
                                {{ __('Save') }}
                            </button>
                            <button type="button" class="btn btn-default btn-info pull-left btn-lg" data-dismiss="modal">Close</button>
                            {{-- <button type="button" class="btn btn-default">Save changes</button> --}}
                            </div>
                        </div>
                        </div>
                </form>
        </div>
    </div>
</div>

@endsection
