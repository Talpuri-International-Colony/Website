<?php
  include('../VR_scripts/helper_modules.php');

  session_start();

    if(!isset($_SESSION['_house_owner_name_']))
  //  header("Location: ../dashboard/courses.php");

  
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Talpuri International Colony RWA </title>

    <!-- Bootstrap -->
    <link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- PNotify -->
    <link href="../../vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="../../vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="../../vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-tumblr-square"></i> <span> Talpuri RWA </span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="../images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2> <?php echo $_SESSION['_house_owner_name_']; ?> </h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

             <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="home_page.php"><i class="fa fa-home"></i> Home <!-- <span class="fa fa-chevron-down"> --></span></a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Admin Tasks <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="admin_tasks.php#home_tab"> New Registration Requests</a></li>
                      <li><a href="admin_tasks.php#tab_content2">  Handle Complaints </a></li>
                      <li><a href="admin_tasks.php#tab_content3">Notice Board Pins</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-users"></i> Support Contacts <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="general_elements.html"> Plumbers </a></li>
                      <li><a href="media_gallery.html"> Electrician </a></li>
                      <li><a href="typography.html"> Mason / Handyman </a></li>
                      <li><a href="icons.html">Painters</a></li>
                      <li><a href="glyphicons.html">Air-Conditioning</a></li>
                      <li><a href="widgets.html">Carpenter</a></li>
                      <li><a href="invoice.html">Kitchen Appliance Repair</a></li>
                      <li><a href="inbox.html">House Maids</a></li>
                      <li><a href="calendar.html">Security</a></li>
                      <li><a href="calendar.html">House Water Supply</a></li>
                      <li><a href="calendar.html">Electricity Failure</a></li>
                      <li><a href="calendar.html">Landline issues</a></li>
                      <li><a href="calendar.html">Catering needs</a></li>
                      <li><a href="calendar.html">Theft</a></li>
                      <li><a href="calendar.html">Snakes / Dog nuisance</a></li>
                      <li><a href="calendar.html">Medical Needs</a></li>
                      <li><a href="calendar.html">Road Accidents</a></li>
                      <li><a href="calendar.html">Fire Brigade</a></li>
                      <li><a href="calendar.html">Street Light</a></li>
                      <li><a href="calendar.html">Lifts</a></li>
                      <li><a href="calendar.html">Water Drainage</a></li>
                      <li><a href="calendar.html">Sewage Treatment & Disposal </a></li>
                      <li><a href="calendar.html">Open Space / Garden Management</a></li>
                      <li><a href="calendar.html">Road/Drain Cleaning</a></li>
                      <li><a href="calendar.html">Garbage Collection</a></li>
                      <li><a href="calendar.html">General Support</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-inr"></i> RWA Funds Management <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tables.html">Tables</a></li>
                      <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Colony Statistics <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">Chart JS</a></li>
                      <li><a href="chartjs2.html">Chart JS2</a></li>
                      <li><a href="morisjs.html">Moris JS</a></li>
                      <li><a href="echarts.html">ECharts</a></li>
                      <li><a href="other_charts.html">Other Charts</a></li>
                    </ul>
                  </li>
                
                </ul>
              </div>
            

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="../login.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="../images/user.png" alt=""> <?php $_SESSION['_house_owner_name_'] ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="../images/user.png" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="../images/user.png" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="../images/user.png" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="../images/user.png" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Administrator Home Page  </h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="">




                                 <div class="col-md-612 col-sm-12 col-xs-12">
                                    <div class="x_panel">
                                      <div class="x_title">
                                        <h2> Welcome to Your Administrator Home Page <small> [web page under construction ]</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                          </li>
                                          <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Settings 1</a>
                                              </li>
                                              <li><a href="#">Settings 2</a>
                                              </li>
                                            </ul>
                                          </li>
                                          <li><a class="close-link"><i class="fa fa-close"></i></a>
                                          </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                      </div>
                                      <div class="x_content">

                                        <div class="bs-example" data-example-id="simple-jumbotron">
                                          <div class="jumbotron">
                                            <h1>Hello, <?php echo $_SESSION['_house_owner_name_'] ?> !</h1>
                                            <p> This page is your Administrator Home Page ! It will show all the latest summary, statistics and daily briefings of the operations and activities of all the members in the Talpuri Colony. This page is under constrution, so stay tuned ;-P </p>
                                          </div>
                                        </div>

                                      </div>
                                    </div>
                                  </div>



              </div>
            </div>


            <div class="clearfix"></div>


        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
      <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
      </ul>
      <div class="clearfix"></div>
      <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <!-- jQuery -->
    <script src="../../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../../vendors/iCheck/icheck.min.js"></script>


    <!-- Custom Theme Scripts -->
    <script src="../../build/js/custom.min.js"></script>
	
  </body>
</html>