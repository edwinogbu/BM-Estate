{{-- <div class="preloader">
    <div class="la-ball-pulse la-2x">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div> --}}
<header>
    <div id="headerMain">
        <div id="header">
            <div class="nawbarMain  headerWrapper clearfix">
                <div class="nawbarMainLeft ">
                    <div class="mainLogo">
                    </div>
                    <!--mainLogo-->
                    <div class="nawbarMainButtonWrapper">
                        <button id="menuIcon" class="hamburger">
                            <span></span>
                        </button>
                    </div>
                    <div class="headerLogo">
                        <a href="{{ route('welcome') }}" style="color: #ffffff;">BM Consulting Admin</a>
                    </div>
                    <!--headerLogo-->
                </div>
                <!--nawbarMainLeft-->
                <div class="nawbarMainRight">
                    <ul class="nawbarMainMenu">
                        {{-- <li><a id="toggle-link1" class="reminderIcon hvr-rectangle ">
                            <i class="fa fa-user"></i><span class="">Logout</span>
                        </a> --}}
                        </li>
                        <li><a id="toggle-link" class="  hvr-rectangle-out" href="{{ route('logout') }}"><i class="fa fa-user" class="  hvr-rectangle-out"><span  style="margin: 2px; font-weight: 900;" >Logout</span></i></a></li>
                        <li>

                            {{-- <div class="sideBarUserConteinerImg"> --}}
                                <img src="{{ asset('dashboardcss/img/userProfilLarge.jpg')}}" alt="UserInfo" class="" style="border-radius: 100%; width:20%; height:20%; margin-left: 25px;">
                            {{-- </div>                        </li> --}}
                    </ul>
                    <div class="dropdown nawbarMainMenuSmallLeft">
                        <span class="dropdown-toggle dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="button">
                            <i class="fa fa-ellipsis-v"></i>
                            </span>
                        <ul class="dropdown-menu">
                            {{-- <li><a href="#" id="toggle-link4" class="mailboxIcon"><span class="headerMenuIconIndigo"><i class="fa fa-user"></i></span>Logout <span class="badge"></span></a></li> --}}
                            {{-- <li><a href="#" id="toggle-link3" class="reminderIcon"><span class="headerMenuIconIndigo"><i class="fa fa-bell"></i></span>Reminder</a></li> --}}
                            {{-- <li><a href="#" id="toggle-link5" class="latestActivityIcon"><span class="headerMenuIconIndigo"><i class="fa fa-calendar"></i></span>Activity</a></li> --}}
                        </ul>
                    </div>
                </div>
                <!--nawbarMainRight-->
                {{-- <div id="sb-search" class="sb-search">
                    <form>
                        <input class="sb-search-input" placeholder="Enter search" type="search" value="" name="search" id="search">
                        <input class="sb-search-submit" type="submit" value="">
                        <span class="sb-icon-search"></span>
                    </form>
                </div> --}}
                <div class="latestActivity">
                    <div class="latestActivityHeader colorCyan clearfix">
                        <div class="antBoxHeaderText">
                            <span class="mainIcon"><i class="fa fa-calendar"></i></span><span class="mainContent">latest activity</span>
                        </div>
                        <!--mantBoxHeaderTexText-->
                        <div class="antBoxHeaderIcon">
                            <a class="closelatestActivity pull-right" href="#"><i class="fa fa-times"></i></a>
                        </div>
                        <!--antBoxHeaderIcon-->
                    </div>
                    <!--latestActivityHeader-->
                    <div id="latestActivityContent">
                        <div class="latestActivityAntWrapper">
                            <div class="latestActivityAntContent">
                                <div class="latestActivityAntContentHeader">
                                    <span class="point">
                                        <button type="button" class="btn btn-info btn-df float-button-light  latestActivityButton">Logout</button>

                                    </span>
                                </div>
                                <div class="latestActivityAntContentText">
                                    <span class="latestActivityAntContentTextHeader">
                                        {{-- <button type="button" class="btn btn-info btn-df float-button-light  latestActivityButton">Logout</button> --}}

                                    </span>
                                    {{-- <p>
                                       some text here
                                    </p> --}}
                                </div>
                                <!--latestActivityAntContentText-->
                            </div>
                            <!--latestActivityAntContent-->
                        </div>
                        <!--latestActivityAntWrapper-->
                        {{-- <div class="latestActivityAntWrapper">
                            <div class="latestActivityAntContent">
                                <div class="latestActivityAntContentHeader">
                                    <span class="point"></span> Today, 14:45
                                </div>
                                <div class="latestActivityAntContentText">
                                    <span class="latestActivityAntContentTextHeader"> Order placed</span>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus etLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et</p>
                                </div>
                                <!--latestActivityAntContentText-->
                            </div>
                            <!--latestActivityAntContent-->
                        </div> --}}
                        <!--latestActivityAntWrapper-->
                        {{-- <div class="latestActivityAntWrapper">
                            <div class="latestActivityAntContent">
                                <div class="latestActivityAntContentHeader">
                                    <span class="point"></span> Yesterday, 17:46
                                </div>
                                <div class="latestActivityAntContentText">
                                    <span class="latestActivityAntContentTextHeader"> Price Change </span>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                                </div>
                                <!--latestActivityAntContentText-->
                            </div>
                            <!--latestActivityAntContent-->
                        </div> --}}
                        <!--latestActivityAntWrapper-->
                    </div>
                    <!--latestActivityContent-->
                        {{-- <button type="button" class="btn btn-info btn-df float-button-light  latestActivityButton">Logout</button> --}}
                </div>
                <!--latestActivity-->
                <div class="mailboxShow">
                    <div class="mailboxHeader clearfix colorPink">
                        <div class="antBoxHeaderText">
                            <span class="mainIcon"><i class="fa fa-user"></i></span><span class="mainContent"> Logout</span>
                        </div>
                        <!--mantBoxHeaderTexText-->
                        <div class="antBoxHeaderIcon">

                            <a class="closeMailbox pull-right" href="#"><i class="fa fa-times"></i></a>
                        </div>
                        <!--antBoxHeaderIcon-->
                    </div>
                    <!--commentsHeader-->
                    <div id="mailboxContent">
                        <button type="button" class="btn btn-info btn-df float-button-light  latestActivityButton">Logout</button>
                    <!--mailboxContent-->
                    </div>
                </div>
                <div class="reminderShow " style="margin: 25px; padding: 20px;">
                    <div class="reminderHeader clearfix ">
                        <a class="closeReminde pull-right" href="#" style="background: teal; margin-right: 20px;"><i class="fa fa-times"></i></a>
                    </div>
                    <!--commentsHeader-->
                    <button type="button" class="btn btn-success btn-df float-button-light " style="background:teal; margin: 20px; padding: 20px;">Logout</button>

                    <!--carouselWrapper-->
                </div>
                <!--reminderShow-->
            </div>
            <!--nawbarMain-->
        </div>
        <!--header-->
    </div>
    <!--headerMain -->
</header>

<div class="mainWrapper">
    <div id="sideBarWrapper">
        <div id="sideBarContent">
            <div id="bar" class="sideBar sideBarDark">
                <!-- start sitebar-->
                <div class="sideBarUser">
                    <div class="sideBarUserConteiner">
                        <div class="sideBarUserConteinerImg">
                            <a href="{{ route('welcome') }}">
                                <img src="{{ asset('dashboardcss/img/userProfilLarge.jpg')}}" alt="UserInfo" class="userimg">

                            </a>
                        </div>
                        <!--sideBarUserConteinerImg-->
                        <div class="sideBarUserConteinerText">
                            <span class="userInfo"><a href="{{ route('welcome') }}">MB </a><br><i class="fa fa-map-marker"></i> Surveyor & Real Estate </span>
                        </div>
                        <!--sideBarUserConteinerText-->
                    </div>
                    <!--sideBarUserConteiner-->
                </div>
                <div id="menuContent">
                    <div id="menuSize">
                        <aside class="sidebar">
                            <nav class="sidebar-nav">
                                <ul class="metismenu" id="menu">
                                    <li>
                                        <a href="#" aria-expanded="true">
                                            <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
                                            <span class="sidebar-nav-item" >User Management</span>
                                            <span class="fa arrow"></span>
                                        </a>
                                        <ul aria-expanded="true" class="collapse">
                                            <li>
                                                <a href="{{ route('password.view') }}" >Change Password</a>
                                            </li>
                                            <li>
                                                <a href="#" >Manage User</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" aria-expanded="true">
                                            <span class="glyphicon glyphicon-signal" aria-hidden="true"></span>
                                            <span class="sidebar-nav-item" >Agent management</span>
                                            <span class="fa arrow"></span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse">
                                            <li>
                                                <a href="{{ route('agent.create') }}" >
                                                  Add New Adgent
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('agent.index') }}" >
                                                Manage Agent Details
                                                </a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#" aria-expanded="true">
                                            <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
                                            <span class="sidebar-nav-item" >Property</span>
                                            <span class="fa arrow"></span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse">
                                            <li>
                                                <a href="{{ route('property.create') }}" >
                                                    Add New property
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('property.index') }}" >
                                                    manage Property details
                                                </a>
                                            </li>


                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" aria-expanded="true">
                                            <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
                                            <span class="sidebar-nav-item">About</span>
                                            <span class="fa arrow"></span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse">
                                            <li>
                                                <a href="{{ route('about.create') }}">
                                                    Add About
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('about.index') }}">
                                                    manage About Us details
                                                </a>
                                            </li>


                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" aria-expanded="true">
                                            <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
                                            <span class="sidebar-nav-item">Services</span>
                                            <span class="fa arrow"></span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse">
                                            <li>
                                                <a href="{{ route('services.create') }}">
                                                    Add Service
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('services.index') }}">
                                                    Manage Service Details
                                                </a>
                                            </li>


                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" aria-expanded="true">
                                            <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
                                            <span class="sidebar-nav-item">Contact</span>
                                            <span class="fa arrow"></span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse">
                                            <li>
                                                <a href="{{ route('contact.create') }}">
                                                    Add MB Contact
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('contact.index') }}">
                                                    manage MB Contact details
                                                </a>
                                            </li>


                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" aria-expanded="true">
                                            <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
                                            <span class="sidebar-nav-item">Testimonial</span>
                                            <span class="fa arrow"></span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse">
                                            <li>
                                                <a href="{{ route('testimonial.create') }}">
                                                    Add testimonial
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('testimonial.index') }}">
                                                    manage testimonial Us details
                                                </a>
                                            </li>


                                        </ul>
                                    </li>

                                        <li>
                                            <a href="#" aria-expanded="true">
                                                <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                                                <span class="sidebar-nav-item">Surveyor</span>
                                                <span class="fa arrow"></span>
                                            </a>
                                            <ul aria-expanded="false" class="collapse">
                                                <li>

                                                    <a href="{{ route('surveyor.index') }}">
                                                  View Proposal Request
                                                </a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" aria-expanded="true">
                                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                                <span class="sidebar-nav-item">Team Member</span>
                                                <span class="fa arrow"></span>
                                            </a>
                                            <ul aria-expanded="false" class="collapse">
                                                <li>
                                                    <a href="{{ route('team.create') }}">
                                                  Add Team Member
                                                </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('team.index') }}">
                                                  Manage Team Member
                                                </a>
                                                </li>

                                            </ul>
                                        </li>


                                </ul>
                            </nav>
                        </aside>
                    </div>
                    <!--menuSize-->
                </div>
                <!--	menuContent-->


                <div class="timeWrapper colorTheme">
                    <div class="menuTime2">
                        <span class="current-time2"></span>
                    </div>
                    <div class="menuTime">
                        <span class="current-time"></span>
                    </div>
                </div>
            </div>
            <!--menuSize-->
        </div>
        <!--sideBar-->
    </div>
    <!--sideBarContent-->
</div>
