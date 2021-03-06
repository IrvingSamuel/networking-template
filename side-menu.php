<!-- id="sidemenu" -->

<!-- menu  -->
<div class="container-fluid no-gutters">
    <div class="row">
        <div class="col-lg-12 p-0">
            <div class="header_iner d-flex justify-content-between align-items-center">
                <button class="btn btn-lg" id="menu-toggle">
                    <i class="fas fa-bars text-muted"></i>
                </button>
                <div class="sidebar_icon d-lg-none">
                    <i class="ti-menu"></i>
                </div>
                <div class="serach_field-area">
                    <div class="search_inner">
                        <form action="#">
                            <div class="search_field">
                                <input type="text" placeholder="Search here...">
                            </div>
                            <button type="submit"> <img src="img/icon/icon_search.svg" alt=""> </button>
                        </form>
                    </div>
                </div>
                <div class="header_right d-flex justify-content-between align-items-center">
                    <div class="header_notification_warp d-flex align-items-center">
                        <li>
                            <a href="#"> <img src="img/icon/bell.svg" alt=""> </a>
                        </li>
                        <li>
                            <a href="#"> <img src="img/icon/msg.svg" alt=""> </a>
                        </li>
                    </div>
                    <div class="profile_info">
                        <img src="img/client_img.png" alt="#">
                        <div class="profile_info_iner">
                            <p>Welcome Admin!</p>
                            <h5>Travor James</h5>
                            <div class="profile_info_details">
                                <a href="#">My Profile <i class="ti-user"></i></a>
                                <a href="#">Settings <i class="ti-settings"></i></a>
                                <a href="#">Log Out <i class="ti-shift-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ menu  -->



<aside class="sidemenu " id="sidemenu">
    <!-- sidebar part here -->
    <nav class="sidebar">
        <div class="logo d-flex justify-content-between">
            <a href="index.php"><img src="img/logo.png" alt=""></a>
            <button class="btn sidebar_close_icon" id="menu-close">
                <i class="fas fa-times text-muted"></i>
            </button>
        </div>
        <ul id="sidebar_menu">
            <li class="mm-active">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <!-- <i class="fas fa-th"></i> -->
                    <img src="img/menu-icon/1.svg" alt="">
                    <span>Dashboard</span>
                </a>
                <ul>
                    <li><a class="active" href="index.php">Classic</a></li>
                    <li><a href="index_2.html">Minimal</a></li>
                </ul>

            </li>

            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="img/menu-icon/2.svg" alt="">
                    <span>Pages</span>
                </a>
                <ul>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="resister.html">Register</a></li>
                    <li><a href="forgot_pass.html">Forgot Password</a></li>
                </ul>
            </li>

            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="img/menu-icon/3.svg" alt="">
                    <span>Applications</span>
                </a>
                <ul>
                    <li><a href="mail_box.html">Mail Box</a></li>
                    <li><a href="chat.html">Chat</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                </ul>
            </li>

            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="img/menu-icon/4.svg" alt="">
                    <span>UI Component</span>
                </a>
                <ul>
                    <li><a href="#">Elements</a>
                        <ul>
                            <li><a href="buttons.html">Buttons</a></li>
                            <li><a href="dropdown.html">Dropdowns</a></li>
                            <li><a href="Badges.html">Badges</a></li>
                            <li><a href="Loading_Indicators.html">Loading Indicators</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Components</a>
                        <ul>
                            <li><a href="notification.html">Notifications</a></li>
                            <li><a href="progress.html">Progress Bar</a></li>
                            <li><a href="carousel.html">Carousel</a></li>
                            <li><a href="cards.html">cards</a></li>
                            <li><a href="Pagination.html">Pagination</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="img/menu-icon/5.svg" alt="">
                    <span>Widgets</span>
                </a>
                <ul>
                    <li><a href="chart_box_1.html">Chart Boxes 1</a></li>
                    <li><a href="profilebox.html">Profile Box</a></li>
                </ul>
            </li>

            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="img/menu-icon/6.svg" alt="">
                    <span>Forms</span>
                </a>
                <ul>
                    <li><a href="#">Elements</a>
                        <ul>
                            <li><a href="data_table.html">Data Tables</a></li>
                            <li><a href="bootstrap_table.html">Grid Tables</a></li>
                            <li><a href="datepicker.html">Date Picker</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Widgets</a>
                        <ul>
                            <li><a href="Input_Selects.html">Input Selects</a></li>
                            <li><a href="Input_Mask.html">Input Mask</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="img/menu-icon/7.svg" alt="">
                    <span>Charts</span>
                </a>
                <ul>
                    <li><a href="chartjs.html">ChartJS</a></li>
                    <li><a href="apex_chart.html">Apex Charts</a></li>
                    <li><a href="chart_sparkline.html">chart sparkline</a></li>
                </ul>
            </li>

        </ul>

    </nav>
    <!-- sidebar part end -->
</aside>

<script>
    var hamburger = document.getElementById("menu-toggle");
    hamburger.addEventListener("click", function() {
        document.getElementById("sidemenu").classList.add("active");
    })

    var hamburguerClose = document.getElementById("menu-close");
    hamburguerClose.addEventListener("click", function() {
        document.getElementById("sidemenu").classList.remove("active");
    })
</script>