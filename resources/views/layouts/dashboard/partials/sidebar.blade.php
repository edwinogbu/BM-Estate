
<div class="mainWrapper">
    <div id="sideBarWrapper">
        <div id="sideBarContent">
            <div id="bar" class="sideBar sideBarDark">
                <!-- start sitebar-->
                <div class="sideBarUser">
                    <div class="sideBarUserConteiner">
                        <div class="sideBarUserConteinerImg">
                            <img src="{{  asset('dashboardcss/img/userProfilLarge.jpg')}}" alt="UserInfo" class="userimg">
                        </div>
                        <!--sideBarUserConteinerImg-->
                        <div class="sideBarUserConteinerText">
                            <span class="userInfo"><a href="user.html">MB </a><br><i class="fa fa-map-marker"></i> Real, Estate </span>
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
                                            <span class="sidebar-nav-item">Users</span>
                                            <span class="fa arrow"></span>
                                        </a>
                                        <ul aria-expanded="true" class="collapse">
                                            <li>
                                                <a href="index.html">Change password</a>
                                            </li>
                                            <li>
                                                <a href="dashboard2.html">Activity</a>
                                            </li>
                                            <li>
                                                <a href="dashboard3.html">
                                                Manage User
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" aria-expanded="true">
                                            <span class="glyphicon glyphicon-signal" aria-hidden="true"></span>
                                            <span class="sidebar-nav-item">Agents</span>
                                            <span class="fa arrow"></span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse">
                                            <li>
                                                <a href="{{ route('agent.create') }}">
                                                  Add
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('agent.index') }}">
                                                Manage
                                                </a>
                                            </li>

                                        </ul>
                                    </li>


                                    <li>
                                        <a href="#" aria-expanded="true">
                                            <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
                                            <span class="sidebar-nav-item">About MB</span>
                                            <span class="fa arrow"></span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse">
                                            <li>
                                                <a href="typography.html">
                                                    Typography
                                                </a>
                                            </li>

                                        </ul>

                                        <li>
                                            <a href="#" aria-expanded="true">
                                                <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                                                <span class="sidebar-nav-item">Testimonial</span>
                                                <span class="fa arrow"></span>
                                            </a>
                                            <ul aria-expanded="false" class="collapse">
                                                <li>

                                                    <a href="sale_rates.html">
                                                    Manage Testimonial
                                                </a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" aria-expanded="true">
                                                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                                                <span class="sidebar-nav-item">Contact</span>
                                                <span class="fa arrow"></span>
                                            </a>
                                            <ul aria-expanded="false" class="collapse">

                                                <li>
                                                    <a href="mailbox.html">
                                                    Manage Contact
                                                </a>
                                                </li>


                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" aria-expanded="true">
                                                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                                                <span class="sidebar-nav-item">Property</span>
                                                <span class="fa arrow"></span>
                                            </a>
                                            <ul aria-expanded="false" class="collapse">

                                                <li>
                                                    <a href="mailbox.html">
                                                    Manage Property
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
<!--sideBarWrapper-->
