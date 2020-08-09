
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc." />
    <meta name="author" content="Coderthemes" />

    <link rel="shortcut icon" href="assets/dashboard/img/favicon_1.ico" />

    <title>Velonic - Responsive Admin Dashboard Template</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/dashboard/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/dashboard/css/bootstrap-reset.css" rel="stylesheet" />

    <!--Animation css-->
    <link href="assets/dashboard/css/animate.css" rel="stylesheet" />

    <!--Icon-fonts css-->
    <link href="assets/dashboard/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/dashboard/assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
    <link href="assets/dashboard/assets/material-design-iconic-font/css/material-design-iconic-font.min.css" rel="stylesheet" />

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="assets/dashboard/assets/morris/morris.css" />

    <!-- sweet alerts -->
    <link href="assets/dashboard/assets/sweet-alert/sweet-alert.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="assets/dashboard/css/style.css" rel="stylesheet" />
    <link href="assets/dashboard/css/helper.css" rel="stylesheet" />



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-62751496-1', 'auto');
        ga('send', 'pageview');

    </script>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>


<body>

<!-- Aside Start-->
<x-dashboard.left-menu></x-dashboard.left-menu>
<!-- Aside Ends-->


<!--Main Content Start -->
<section class="content">

    <!-- Header -->
    <header class="top-head container-fluid">
        <button type="button" class="navbar-toggle pull-left">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Search -->
        <form role="search" class="navbar-left app-search pull-left hidden-xs"  >
        <input type="text" placeholder="Search..." class="form-control" />
        <a href="./index.html"><i class="fa fa-search"></i></a>
        </form>

        <!-- Left navbar -->
        <nav class=" navbar-default" role="navigation">
            <ul class="nav navbar-nav hidden-xs">
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">English <span class="caret"></span></a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="#">German</a></li>
                        <li><a href="#">French</a></li>
                        <li><a href="#">Italian</a></li>
                        <li><a href="#">Spanish</a></li>
                    </ul>
                </li>
                <li><a href="#">Files</a></li>
            </ul>

            <!-- Right navbar -->
            <ul class="nav navbar-nav navbar-right top-menu top-right-menu">
                <!-- mesages -->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="zmdi zmdi-email-open"></i>
                        <span class="badge badge-sm up bg-purple count">4</span>
                    </a>
                    <ul class="dropdown-menu extended fadeInUp animated nicescroll" tabindex="5001">
                        <li>
                            <p>Messages</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="pull-left"><img src="assets/dashboard/img/avatar-2.jpg" class="img-circle thumb-sm m-r-15" alt="img" /></span>
                                <span class="block"><strong>John smith</strong></span>
                                <span class="media-body block">New tasks needs to be done<br /><small class="text-muted">10 seconds ago</small></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="pull-left"><img src="assets/dashboard/img/avatar-3.jpg" class="img-circle thumb-sm m-r-15" alt="img" /></span>
                                <span class="block"><strong>John smith</strong></span>
                                <span class="media-body block">New tasks needs to be done<br /><small class="text-muted">3 minutes ago</small></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="pull-left"><img src="assets/dashboard/img/avatar-4.jpg" class="img-circle thumb-sm m-r-15" alt="img" /></span>
                                <span class="block"><strong>John smith</strong></span>
                                <span class="media-body block">New tasks needs to be done<br /><small class="text-muted">10 minutes ago</small></span>
                            </a>
                        </li>
                        <li>
                            <p><a href="inbox.html" class="text-right">See all Messages</a></p>
                        </li>
                    </ul>
                </li>
                <!-- /messages -->
                <!-- Notification -->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="zmdi zmdi-notifications-none"></i>
                        <span class="badge badge-sm up bg-pink count">3</span>
                    </a>
                    <ul class="dropdown-menu extended fadeInUp animated nicescroll" tabindex="5002">
                        <li class="noti-header">
                            <p>Notifications</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="pull-left"><i class="fa fa-user-plus fa-2x text-info"></i></span>
                                <span>New user registered<br /><small class="text-muted">5 minutes ago</small></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="pull-left"><i class="fa fa-diamond fa-2x text-primary"></i></span>
                                <span>Use animate.css<br /><small class="text-muted">5 minutes ago</small></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="pull-left"><i class="fa fa-bell-o fa-2x text-danger"></i></span>
                                <span>Send project demo files to client<br /><small class="text-muted">1 hour ago</small></span>
                            </a>
                        </li>

                        <li>
                            <p><a href="#" class="text-right">See all notifications</a></p>
                        </li>
                    </ul>
                </li>
                <!-- /Notification -->

                <!-- user login dropdown start-->
                <li class="dropdown text-center">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="assets/dashboard/img/avatar-2.jpg" class="img-circle profile-img thumb-sm" />
                        <span class="username">John Deo </span> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu pro-menu fadeInUp animated" tabindex="5003" style="overflow: hidden; outline: none;">
                        <li><a href="profile.html"><i class="fa fa-briefcase"></i>Profile</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                        <li><a href="#"><i class="fa fa-bell"></i> Friends <span class="label label-info pull-right mail-info">5</span></a></li>
                        <li><a href="#"><i class="fa fa-sign-out"></i> Log Out</a></li>
                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <!-- End right navbar -->
        </nav>

    </header>
    <!-- Header Ends -->


    <!-- Page Content Start -->
    <!-- ================== -->

    <div class="wraper container-fluid">
        <div class="page-title">
            <h3 class="title">Welcome !</h3>
        </div>


        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="tile-stats white-bg">
                    <div class="status">
                        <h3 class="m-t-0"><span class="counter">25</span>% more</h3>
                        <p>Monthly visitor statistics</p>
                    </div>
                    <div class="chart-inline">
                        <span class="inlinesparkline"></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="tile-stats white-bg">
                    <div class="status">
                        <h3 class="m-t-0 counter">49</h3>
                        <p>Avg. Sales per day</p>
                    </div>
                    <span class="dynamicbar-big"></span>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="tile-stats white-bg">
                    <div class="status">
                        <h3 class="m-t-0 counter">0.9</h3>
                        <p>Stock Market</p>
                    </div>
                    <span id="compositeline"></span>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="tile-stats white-bg">
                    <div class="col-sm-8">
                        <div class="status">
                            <h3 class="m-t-15"><span class="counter">91.5</span>%</h3>
                            <p>US Dollar Share</p>
                        </div>
                    </div>
                    <div class="col-sm-4 m-t-20">
                        <span class="sparkpie-big"></span>
                    </div>
                </div>
            </div>
        </div>


        <!-- WEATHER -->
        <div class="row">

            <div class="col-lg-6">

                <!-- BEGIN WEATHER WIDGET 1 -->
                <div class="panel bg-success-alt">
                    <div class="panel-body">

                        <div class="row">
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col-xs-6 text-center">
                                        <canvas id="partly-cloudy-day" width="115" height="115"></canvas>
                                    </div>
                                    <div class="col-xs-6">
                                        <h2 class="m-t-0 text-white"><b>32°</b></h2>
                                        <p class="text-white">Partly cloudy</p>
                                        <p class="text-white">15km/h - 37%</p>
                                    </div>
                                </div><!-- End row -->
                            </div>
                            <div class="col-sm-5">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <h4 class="text-white m-t-0">SAT</h4>
                                        <canvas id="cloudy" width="35" height="35"></canvas>
                                        <h4 class="text-white">30<i class="wi-degrees"></i></h4>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <h4 class="text-white m-t-0">SUN</h4>
                                        <canvas id="wind" width="35" height="35"></canvas>
                                        <h4 class="text-white">28<i class="wi-degrees"></i></h4>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <h4 class="text-white m-t-0">MON</h4>
                                        <canvas id="clear-day" width="35" height="35"></canvas>
                                        <h4 class="text-white">33<i class="wi-degrees"></i></h4>
                                    </div>
                                </div><!-- end row -->
                            </div>
                        </div><!-- end row -->
                    </div><!-- panel-body -->
                </div><!-- panel-->
                <!-- END Weather WIDGET 1 -->

            </div><!-- End col-md-6 -->

            <div class="col-lg-6">

                <!-- WEATHER WIDGET 2 -->
                <div class="panel bg-primary-alt">
                    <div class="panel-body">

                        <div class="row">
                            <div class="col-sm-7">
                                <div class="">
                                    <div class="row">
                                        <div class="col-xs-6 text-center">
                                            <canvas id="snow" width="115" height="115"></canvas>
                                        </div>
                                        <div class="col-xs-6">
                                            <h2 class="m-t-0 text-white"><b> 23°</b></h2>
                                            <p class="text-white">Partly cloudy</p>
                                            <p class="text-white">15km/h - 37%</p>
                                        </div>
                                    </div><!-- end row -->
                                </div><!-- weather-widget -->
                            </div>
                            <div class="col-sm-5">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <h4 class="text-white m-t-0">SAT</h4>
                                        <canvas id="sleet" width="35" height="35"></canvas>
                                        <h4 class="text-white">30<i class="wi-degrees"></i></h4>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <h4 class="text-white m-t-0">SUN</h4>
                                        <canvas id="fog" width="35" height="35"></canvas>
                                        <h4 class="text-white">28<i class="wi-degrees"></i></h4>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <h4 class="text-white m-t-0">MON</h4>
                                        <canvas id="partly-cloudy-night" width="35" height="35"></canvas>
                                        <h4 class="text-white">33<i class="wi-degrees"></i></h4>
                                    </div>
                                </div><!-- End row -->
                            </div> <!-- col-->
                        </div><!-- End row -->
                    </div><!-- panel-body -->
                </div><!-- panel -->
                <!-- END WEATHER WIDGET 2 -->

            </div><!-- /.col-md-6 -->
        </div> <!-- End row -->


        <div class="row">

            <div class="col-lg-12">

                <div class="portlet"><!-- /primary heading -->
                    <div class="portlet-heading">
                        <h3 class="portlet-title text-dark text-uppercase">
                            Projects
                        </h3>
                        <div class="portlet-widgets">
                            <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                            <span class="divider"></span>
                            <a data-toggle="collapse" data-parent="#accordion1" href="#portlet2"><i class="ion-minus-round"></i></a>
                            <span class="divider"></span>
                            <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="portlet2" class="panel-collapse collapse in">
                        <div class="portlet-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Project Name</th>
                                        <th>Start Date</th>
                                        <th>Due Date</th>
                                        <th>Status</th>
                                        <th>Assign</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Velonic Admin v1</td>
                                        <td>01/01/2015</td>
                                        <td>26/04/2015</td>
                                        <td><span class="label label-info">Released</span></td>
                                        <td>Coderthemes</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Velonic Frontend v1</td>
                                        <td>01/01/2015</td>
                                        <td>26/04/2015</td>
                                        <td><span class="label label-success">Released</span></td>
                                        <td>Coderthemes</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Velonic Admin v1.1</td>
                                        <td>01/05/2015</td>
                                        <td>10/05/2015</td>
                                        <td><span class="label label-pink">Pending</span></td>
                                        <td>Coderthemes</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Velonic Frontend v1.1</td>
                                        <td>01/01/2015</td>
                                        <td>31/05/2015</td>
                                        <td><span class="label label-purple">Work in Progress</span></td>
                                        <td>Coderthemes</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Velonic Admin v1.3</td>
                                        <td>01/01/2015</td>
                                        <td>31/05/2015</td>
                                        <td><span class="label label-warning">Coming soon</span></td>
                                        <td>Coderthemes</td>
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>Velonic Admin v1.3</td>
                                        <td>01/01/2015</td>
                                        <td>31/05/2015</td>
                                        <td><span class="label label-primary">Coming soon</span></td>
                                        <td>Coderthemes</td>
                                    </tr>

                                    <tr>
                                        <td>7</td>
                                        <td>Velonic Admin v1.3</td>
                                        <td>01/01/2015</td>
                                        <td>31/05/2015</td>
                                        <td><span class="label label-info">Cool</span></td>
                                        <td>Coderthemes</td>
                                    </tr>

                                    <tr>
                                        <td>8</td>
                                        <td>Velonic Admin v1.3</td>
                                        <td>01/01/2015</td>
                                        <td>31/05/2015</td>
                                        <td><span class="label label-warning">Coming soon</span></td>
                                        <td>Coderthemes</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->

        </div> <!-- end row -->





    </div>
    <!-- Page Content Ends -->
    <!-- ================== -->

    <!-- Footer Start -->
    <footer class="footer">
        2016 © Velonic.
    </footer>
    <!-- Footer Ends -->



</section>
<!-- Main Content Ends -->



<!-- js placed at the end of the document so the pages load faster -->
<script src="assets/dashboard/js/jquery.js"></script>
<script src="assets/dashboard/js/bootstrap.min.js"></script>
<script src="assets/dashboard/js/modernizr.min.js"></script>
<script src="assets/dashboard/js/pace.min.js"></script>
<script src="assets/dashboard/js/wow.min.js"></script>
<script src="assets/dashboard/js/jquery.scrollTo.min.js"></script>
<script src="assets/dashboard/js/jquery.nicescroll.js" type="text/javascript"></script>

<!-- Counter-up -->
<script src="assets/dashboard/js/waypoints.min.js" type="text/javascript"></script>
<script src="assets/dashboard/js/jquery.counterup.min.js" type="text/javascript"></script>

<!-- sparkline -->
<script src="assets/dashboard/assets/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="assets/dashboard/assets/sparkline-chart/chart-sparkline.js" type="text/javascript"></script>

<!-- skycons -->
<script src="assets/dashboard/js/skycons.min.js" type="text/javascript"></script>

<!--Morris Chart-->
<script src="assets/dashboard/assets/morris/morris.min.js"></script>
<script src="assets/dashboard/assets/morris/raphael.min.js"></script>


<script src="assets/dashboard/js/jquery.app.js"></script>

<!-- Dashboard -->
<script src="assets/dashboard/js/jquery.dashboard.js"></script>


<script type="text/javascript">
    jQuery(document).ready(function($) {
        /* Counter Up */
        $('.counter').counterUp({
            delay: 100,
            time: 1200
        });
    });
    /* BEGIN SVG WEATHER ICON */
    if (typeof Skycons !== 'undefined'){
        var icons = new Skycons(
            {"color": "#fff"},
            {"resizeClear": true}
            ),
            list  = [
                "clear-day", "clear-night", "partly-cloudy-day",
                "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                "fog"
            ],
            i;

        for(i = list.length; i--; )
            icons.set(list[i], list[i]);
        icons.play();
    };
</script>



</body>
</html>
