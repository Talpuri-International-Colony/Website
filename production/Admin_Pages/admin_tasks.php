<?php
  include('../VR_scripts/helper_modules.php');

  session_start();

    if(!isset($_SESSION['_house_owner_name_']))
    header("Location: ../dashboard/courses.php");

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



    <!-- Select2 -->
    <link href="../../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../../vendors/switchery/dist/switchery.min.css" rel="stylesheet">



  </head>

  <body class="nav-md">



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


    <script type="text/javascript">
    // A $( document ).ready() block.
    $( document ).ready(function() {
        PNotify.removeAll();
    });
    window.onload = function() {
        PNotify.removeAll();
    };
  </script>


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
            <?php
            echo_Admin_sideBar_Menu();
            ?>
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
                    <li><a href="../login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
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
                <h3> Administrator Tasks  </h3>
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





                              <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                  <div class="x_title">
                                    <h2><i class="fa fa-bars"></i> Registration Requests, Complaints, etc. <small> Switch from one tab to other </small></h2>
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


                                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                        <li id="tab_select_1" role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"> Registration Requests </a>
                                        </li>
                                        <li id="tab_select_2" role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false"> Handle Complaints </a>
                                        </li>
                                        <li id="tab_select_3" role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false"> Notice Board Pins </a>
                                        </li>
                                      </ul>
                                      <div id="myTabContent" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                           
                                            <!-- start accordion -->
                                                <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">



                                              <?php 

                                              $all_members = fetchAllMembersfromDatabase();


                                              $counter = 0;
                                              foreach ($all_members as $memb) {
                                                $counter = $counter + 1;

                                                 // display ONLY unapproved members
                                                if($memb->approved)
                                                  continue;

                                              echo
                                                  "<div class='panel'>
                                                    <a class='panel-heading' role='tab' id='acc_tab_heading_".$counter."' data-toggle='collapse' data-parent='#accordion' href='#acc_tab_collapse_".$counter."' aria-expanded='true' aria-controls='acc_tab_collapse_".$counter."'>
                                                      <h4 class='panel-title'> Request from ".$memb->owner_name." @ ".$memb->house_id." </h4>
                                                    </a>
                                                    <div id='acc_tab_collapse_".$counter."' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingOne'>
                                                      <div class='panel-body'>


                                                              <table class='table'>
                                                                
                                                                <tbody>
                                                                  <tr>
                                                                    <th scope='row'>House ID</th>
                                                                    <td>".$memb->house_id."</td>
                                                                  </tr>
                                                                  <tr>
                                                                    <th scope='row'>Contact Email</th>
                                                                    <td>".$memb->email."</td>
                                                                  </tr>
                                                                  <tr>
                                                                    <th scope='row'>Contact Mobile</th>
                                                                    <td>".$memb->mobile."</td>
                                                                  </tr>
                                                                  <tr>
                                                                    <th scope='row'>House Owner</th>
                                                                    <td>".$memb->owner_name."</td>
                                                                  </tr>
                                                                  <tr>
                                                                    <th scope='row'>HandOver Date</th>
                                                                    <td>".$memb->handovr_date."</td>
                                                                  </tr>
                                                                  <tr>
                                                                    <th scope='row'>Occupancy Date</th>
                                                                    <td>".$memb->occupancy_date."</td>
                                                                  </tr>
                                                                </tbody>
                                                              </table>

                                                               <div class='x_content' style='text-align: center;'>

                                                                  <button type='button' onclick=\"ajax_reg_request_approve('".$memb->house_id."', 'false')\" class='btn btn-round btn-success'>Approve Request </button>

                                                                  <button type='button' onclick=\"ajax_reg_request_sndmssg('".$memb->house_id."', 'Plz meet Mr. Shishir Tamotia personally for approval of your Talpuri RWA registration request.')\" class='btn btn-round btn-primary'>Ask Applicant to meet Personally</button>

                                                                  <button type='button' onclick=\"ajax_reg_request_approve('".$memb->house_id."', 'true')\" class='btn btn-round btn-info'>Approve Request with Admin Rights</button>

                                                                  <button type='button' onclick=\"ajax_reg_request_reject('".$memb->house_id."', 'Plz resubmit your Talpuri RWA registration request with complete & correct details. Contact Mr. Shishir Tamotia for details.')\"  class='btn btn-round btn-warning'>Ask Applicant to Resubmit with complete & correct details</button>

                                                                  <button type='button' onclick=\"ajax_reg_request_reject('".$memb->house_id."', '')\" class='btn btn-round btn-danger'>Reject Request</button>
                                                                </div>

                                                      </div>
                                                    </div>
                                                  </div>";
                                                }

                                                  ?>


                                                <!--   <button type="button" id="hidden_4_reload" hidden></button>

 -->
                                                  <script type="text/javascript">

                                                 /* $('#hidden_4_reload').click(function() {
                                                    setTimeout(location.reload.bind(location), 3000);
                                                        location.reload();
                                                    });*/

                                                    
                                                     function ajax_reg_request_sndmssg(house_id, message)
                                                    {
                                                       $.ajax({
                                                             type: "POST",
                                                             url: '../VR_scripts/helper_modules.php',
                                                             data:{action:'sndmssg_reg_request', house_id: house_id, message: message},
                                                             success:function(html) {
                                                               new PNotify({
                                                                          text: 'Message Sent Successfully !',
                                                                          text: 'Applicant of '+house_id+' has been asked to meet the Admin personally !',
                                                                          type: 'success',
                                                                          styling: 'bootstrap3'
                                                                        });
                                                              // $('#hidden_4_reload').click();

                                                             
                                                               window.setTimeout(function(){location.reload()},5000);
                                                             }

                                                        });

                                                        waitingDialog.show('Sending Message ... ');
                                                                    setTimeout(function () {
                                                                      waitingDialog.hide();
                                                                    }, 5000);


                                                    }


                                                    function ajax_reg_request_approve(house_id, approve_admin_rights)
                                                    {
                                                       $.ajax({
                                                             type: "POST",
                                                             url: '../VR_scripts/helper_modules.php',
                                                             data:{action:'approve_reg_request', house_id: house_id, adminrights: approve_admin_rights},
                                                             success:function(html) {
                                                               new PNotify({
                                                                          text: 'Approval Success !',
                                                                          text: 'Registration Request has been approved for '+house_id+' !',
                                                                          type: 'success',
                                                                          styling: 'bootstrap3'
                                                                        });
                                                              // $('#hidden_4_reload').click();

                                                             
                                                               window.setTimeout(function(){location.reload()},5000);
                                                             }

                                                        });

                                                        waitingDialog.show('Approving Request ... ');
                                                                    setTimeout(function () {
                                                                      waitingDialog.hide();
                                                                    }, 5000);


                                                    }


                                                    function ajax_reg_request_reject(house_id, message)
                                                    {
                                                       $.ajax({
                                                             type: "POST",
                                                             url: '../VR_scripts/helper_modules.php',
                                                             data:{action:'reject_reg_request', house_id: house_id, message:message},
                                                             success:function(html) {
                                                               new PNotify({
                                                                          text: 'Rejection Success !',
                                                                          text: 'Registration Request has been rejected for '+house_id+' !',
                                                                          type: 'success',
                                                                          styling: 'bootstrap3'
                                                                        });
                                                              
                                                               window.setTimeout(function(){location.reload()},5000);
                                                             }

                                                        });

                                                           waitingDialog.show('Rejecting Request ... ');
                                                                    setTimeout(function () {
                                                                      waitingDialog.hide();
                                                                    }, 5000);

                                                    }


                                                  </script>



                                                </div>
                                                <!-- end of accordion -->

                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">


                                                    <div class="col-md-12 col-sm-6 col-xs-12">
                                                    	<div class="x_panel">
                  <div class="x_title">
                    <h2>All Unresolved Complaints</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <!--
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            -->
                            <th class="column-title">Id </th>
                            <th class="column-title">Subject </th>
                            <th class="column-title">Date </th>
                            <th class="column-title">Complaintant </th>
                            <th class="column-title">Status </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          <?php
                            $all_unres_complaints = fetchAllUnresolvedComplaints();

                            $count = 0;

                            foreach ($all_unres_complaints as $cmplnt) {
                              $count = $count + 1;

                              if($count%2) echo "<tr class='odd pointer'>";
                              else echo "<tr class='even pointer'>";

                              echo "
                                <td class=''>".$cmplnt->complaint_id."</td>
                                <td class=''>".$cmplnt->complaint_subject."</td>
                                <td class=''>".$cmplnt->time_stamp."</td>
                                <td class=''>".$cmplnt->complainant."</td>
                                <td class=''>".$cmplnt->status."</td>
                                <td class='' hidden>".$cmplnt->complaint_body."</td>
                                <td class='' hidden>".$cmplnt->worker."</td>
                                <td class=' last'>";
                                if($cmplnt->status=='initiated' || $cmplnt->status=='viewed') {
                                	echo "
                                	<a href='#' id='btn_view_notice' class='btn btn-info view_buttons'><i class='fa fa-eye'></i></a>
                                	";
                              	}
                              	else {
                              		echo "
                                	<span class='btn btn-default'><i class='fa fa-eye'></i></span>
                                	";
                              	}
                              	echo "
                                <a href='#' class='btn btn-danger' onclick='delete_complaint(".$cmplnt->complaint_id.")'><i class='fa fa-remove'></i></a>
                                </td>
                              ";
                              echo "</tr>";
                            }
                            
                          ?>

                          
                        </tbody>
                      </table>
                    </div>

                  </div>
                </div>
                <!--unresolved complains end-->
                                                        
                                                      </div>


                                           
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                          <p class="label label-danger"> Under construction </p>
              <div class="row">
                <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add A New Notice</h2>
                    <!-- Hide the right toolbar-->
                    <!--
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
                  -->
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <!-- start form for validation -->
                    <form id="add_notice" data-parsley-validate>

                      <label for="noticedate">Notice Date* :</label>
                      <input type="Date" id="noticedate" class="form-control" name="noticedate" required />

                      <label for="noticetitle">Notice Title * :</label>
                      <input type="text" id="noticetitle" class="form-control" name="noticetitle" required />

                          <label for="message">Notice Content (20 chars min, 100 max) :</label>
                          <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10"></textarea>

                          <br/>
                          <a class="btn btn-primary" onclick="add_notice()">Add Notice</a>
                          <!-- <span class="btn btn-primary" onclick="add_notice()">Add Notice</span> -->

                    </form>
                    <!-- end form for validations -->

                  </div>
                </div>
                </div>

                <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Manage existing notices</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <!--
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            -->
                            <th class="column-title">Id </th>
                            <th class="column-title">Date </th>
                            <th class="column-title">Title </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          <?php
                            $notice_list = fetchAllNotices();

                            $count = 0;

                            foreach ($notice_list as $notice) {
                              $count = $count + 1;

                              if($count%2) echo "<tr class='odd pointer'>";
                              else echo "<tr class='even pointer'>";

                              echo "
                                <td class=''>".$notice->notice_id."</td>
                                <td class=''>".$notice->notice_date."</td>
                                <td class=''>".$notice->notice_title."</td>
                                <td class='' hidden>".$notice->notice_content."</td>
                                <td class=' last'>
                                <a href='#' id='btn_edit_notice' class='btn btn-warning edit_buttons'><i class='fa fa-edit'></i></a>
                                <a href='#' class='btn btn-danger' onclick='delete_notice(".$notice->notice_id.")'><i class='fa fa-remove'></i></a>
                                </td>
                              ";
                              echo "</tr>";
                            }
                            
                          ?>

                          
                        </tbody>
                      </table>
                    </div>

                  </div>
                </div>
                </div>
              </div>

                <script type="text/javascript">

                      var add_notice = function()
                      {
                        var entered_date = $('#noticedate').val();
                        var entered_title = $('#noticetitle').val();
                        var entered_msg = $('#message').val();

                        $.ajaxSetup({
                            headers: {
                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                          });

                        slash_last_indx = window.location.href.lastIndexOf('/')

                        //window.alert(window.location.href.substring(0,slash_last_indx) + '/VR_scripts/helper_modules.php');

                         $.ajax({
                                   type: "POST",
                                   //CSRF: getCSRFTokenValue(),
                                   //url:  'VR_scripts/helper_modules.php',
                                   url : window.location.href.substring(0,slash_last_indx) + '/../VR_scripts/helper_modules.php',
                                   data: {action:'add_notice', _not_date_ : entered_date, _not_title_ : entered_title, _not_msg_ : entered_msg},
                                   success:function(return_data) {
                                    new PNotify({
                                      text: 'Success !',
                                      text: 'Successfully added new notice!',
                                      type: 'success',
                                      styling: 'bootstrap3'
                                    });
                                    window.setTimeout(function(){location.reload()},5000);
                                   }

                              });


                      }

                      var ajaxEditNotice = function()
                      {
                        $('#edit_close').click();
                        var id = $('#nid').val();
                        var new_date = $('#ndate').val();
                        var new_title = $('#ntitle').val();
                        var new_msg = $('#ncontent').val();

                        $.ajaxSetup({
                            headers: {
                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                          });

                        slash_last_indx = window.location.href.lastIndexOf('/')

                        //window.alert(window.location.href.substring(0,slash_last_indx) + '/VR_scripts/helper_modules.php');

                         $.ajax({
                                   type: "POST",
                                   //CSRF: getCSRFTokenValue(),
                                   //url:  'VR_scripts/helper_modules.php',
                                   url : window.location.href.substring(0,slash_last_indx) + '/../VR_scripts/helper_modules.php',
                                   data: {action:'edit_notice', _n_id_ : id, _n_date_ : new_date, _n_title_ : new_title, _n_msg_ : new_msg},
                                   success:function(return_data) {
                                    new PNotify({
                                      text: 'Success !',
                                      text: 'Successfully updated notice!',
                                      type: 'success',
                                      styling: 'bootstrap3'
                                    });
                                    window.setTimeout(function(){location.reload()},5000);
                                   }

                              });


                      }

                      $('.edit_buttons').on('click',function(){
                        $("#edit_notice").modal("show");
                        $("#nid").val($(this).closest('tr').children()[0].textContent);
                        $("#ndate").val($(this).closest('tr').children()[1].textContent);
                        $("#ntitle").val($(this).closest('tr').children()[2].textContent);
                        $("#ncontent").val($(this).closest('tr').children()[3].textContent);
                      });

                      $('.view_buttons').on('click',function(){
                        $("#view_complaint").modal("show");
                        $("#cid_modal").val($(this).closest('tr').children()[0].textContent);
                        $("#cbadge").text("CID:" + $(this).closest('tr').children()[0].textContent);
                        $("#csubject").text($(this).closest('tr').children()[1].textContent);
                        $("#cdate").text($(this).closest('tr').children()[2].textContent);
                        $("#cuser").text($(this).closest('tr').children()[3].textContent);
                        $("#cstatus").text($(this).closest('tr').children()[4].textContent);
                        $("#cbody").text($(this).closest('tr').children()[5].textContent);
                        $("#cworker").val($(this).closest('tr').children()[6].textContent);
                      });

                      var delete_notice = function(n_id)
                      {                                      
                            $.ajaxSetup({
                            headers: {
                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                          });

                        slash_last_indx = window.location.href.lastIndexOf('/')

                        //window.alert(window.location.href.substring(0,slash_last_indx) + '/VR_scripts/helper_modules.php');

                         $.ajax({
                                   type: "POST",
                                   //CSRF: getCSRFTokenValue(),
                                   //url:  'VR_scripts/helper_modules.php',
                                   url : window.location.href.substring(0,slash_last_indx) + '/../VR_scripts/helper_modules.php',
                                   data: {action:'delete_notice', not_id : n_id},
                                   success:function(return_data) {
                                    new PNotify({
                                      text: 'Success !',
                                      text: 'Successfully notice deleted!',
                                      type: 'success',
                                      styling: 'bootstrap3'
                                    });
                                    window.setTimeout(function(){location.reload()},5000);
                                   }

                              });


                      }

                      var ajaxResolveComplaint = function()
                      {     
                      		var cid = $('#cid_modal').val();
                        	var wid = $('#wid_modal').val();
                        	var date = $('#resolve_date').val();
                        	var time = $('#resolve_time').val();
                            $.ajaxSetup({
                            headers: {
                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                          });

                        slash_last_indx = window.location.href.lastIndexOf('/')

                        //window.alert(window.location.href.substring(0,slash_last_indx) + '/VR_scripts/helper_modules.php');

                         $.ajax({
                                   type: "POST",
                                   //CSRF: getCSRFTokenValue(),
                                   //url:  'VR_scripts/helper_modules.php',
                                   url : window.location.href.substring(0,slash_last_indx) + '/../VR_scripts/helper_modules.php',
                                   data: {action:'resolve_complaint', comp_id: cid, worker_id : wid, comp_date: date, comp_time : time},
                                   success:function(return_data) {
                                    new PNotify({
                                      title: 'Success !',
                                      text: 'Successfully alloted a worker!',
                                      type: 'success',
                                      styling: 'bootstrap3'
                                    });
                                    window.setTimeout(function(){location.reload()},5000);
                                   }

                              });


                      }

                      var ajaxComplaintViewed = function()
                      {     
                      		var cid = $('#cid_modal').val();
                            $.ajaxSetup({
                            headers: {
                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                          });

                        slash_last_indx = window.location.href.lastIndexOf('/')

                        //window.alert(window.location.href.substring(0,slash_last_indx) + '/VR_scripts/helper_modules.php');

                         $.ajax({
                                   type: "POST",
                                   //CSRF: getCSRFTokenValue(),
                                   //url:  'VR_scripts/helper_modules.php',
                                   url : window.location.href.substring(0,slash_last_indx) + '/../VR_scripts/helper_modules.php',
                                   data: {action:'view_complaint', comp_id: cid},
                                   success:function(return_data) {
                                    new PNotify({
                                      title: 'Success !',
                                      text: 'Complaint viewed!',
                                      type: 'success',
                                      styling: 'bootstrap3'
                                    });
                                   }

                              });


                      }

                  </script>


                    <script type="text/javascript">

                      var delete_complaint = function(input_comp_id)
                      {
                                                  
                              $.ajaxSetup({
                            headers: {
                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                          });

                        slash_last_indx = window.location.href.lastIndexOf('/')

                        //window.alert(window.location.href.substring(0,slash_last_indx) + '/VR_scripts/helper_modules.php');

                         $.ajax({
                                   type: "POST",
                                   //CSRF: getCSRFTokenValue(),
                                   //url:  'VR_scripts/helper_modules.php',
                                   url : window.location.href.substring(0,slash_last_indx) + '/../VR_scripts/helper_modules.php',
                                   data: {action:'delete_complaint', comp_id : input_comp_id},
                                   success:function(return_data) {
                                    new PNotify({
                                      text: 'Success !',
                                      text: 'Successfully deleted!',
                                      type: 'success',
                                      styling: 'bootstrap3'
                                    });
                                    window.setTimeout(function(){location.reload()},5000);
                                   }

                              });


                      }

                  </script>


                                        </div>
                                      </div>
                                    </div>

                                  </div>
                                </div>
                              </div>



                          <!-- modals -->

                          <div class="modal fade bs-example-modal-sm" id="edit_notice" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Edit Notice</h4>
                        </div>
                        <div class="modal-body">
                          <p>Enter new date, title and content for the notice. Notice ID is not editable(automatically generated).</p>
                            <form id="add_notice" data-parsley-validate>
                              <label for="noticeid">Notice Id* :</label>
                              <input type="text" id="nid" class="form-control" name="noticeid" required readonly/>
                              <label for="noticedate">Notice Date* :</label>
                              <input type="Date" id="ndate" class="form-control" name="noticedate" required />
                              <label for="noticetitle">Notice Title * :</label>
                              <input type="text" id="ntitle" class="form-control" name="noticetitle" required />
                              <label for="message">Notice Content (20 chars min, 100 max) :</label>
                              <textarea id="ncontent" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10"></textarea>

                          <br/>
                          <!-- <span class="btn btn-primary" onclick="add_notice()">Add Notice</span> -->

                    </form>
                    <!-- end form for validations -->
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" id="edit_close" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary" onclick="ajaxEditNotice()">Save changes</button>
                        </div>

                      </div>
                    </div>
                  </div>


                  <!-- Modal for complaints -->
                  <div class="modal fade bs-example-modal-lg" id="view_complaint" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">View Complaint</h4>
                        </div>
                        <div class="modal-body">
                          <p>You can now decide how to resolve this problem.</p>
                            <form id="resolve_complaint" class="form-group">
                              <input type="text" id="cid_modal" name="cid" size="1" readonly hidden/>
                              <span id="cbadge" class="badge bg-green"></span>
                              <strong><span id="csubject"></span></strong> on 
                              <i><span id="cdate"></span></i> by
                              <u><span id="cuser"></span></u>
                              <span class="label label-info" id="cstatus"></span>
                              <br/>
                              <label for="cbody">Complaint:</label>
                              <blockquotes><p id="cbody"></p></blockquote>
                              <hr>
                              <label for="wid_modal">Select Worker:</label>
                              <select id="wid_modal" class="select2_group form-control">
                                          	<?php
                            					$workerlist = fetchAllWorkers();

                            					$count = 0;

                            					foreach ($workerlist as $worker) {
                              						$count = $count + 1;

                              						echo "
                                					<option value=".$worker->worker_id.">".$worker->worker_name." -- ".$worker->worker_job."</option>";
                            					}		
                            
                          					?>

                                          </select>
                              <label for="resolve_date">Select Date:</label>
                              <input type="date" id="resolve_date" class="form-control"/>
                              <label for="resolve_time">Select Time:</label>
                              <input type="time" id="resolve_time" class="form-control"/>
                              
                          <br/>
                          <!-- <span class="btn btn-primary" onclick="add_notice()">Add Notice</span> -->

                    </form>
                    <!-- end form for validations -->
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" id="view_close"  onclick='ajaxComplaintViewed()' data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary" onclick="ajaxResolveComplaint()">Resolve Complaint</button>
                        </div>

                      </div>
                    </div>
                  </div>


                          <!-- Large modal -->

                          <div id="resolve_modal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">

                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title" id="myModalLabel"> Resolve this complaint  </h4>
                                </div>
                                <div class="modal-body">
                                  <h4>  Select the Type of Support required for this complaint </h4>
                                 

                                     <div class="form-group">
                                      <div class="col-md-9 col-sm-9 col-xs-12">
                                      		<input type="text" id="cid_hidden" required>
                                          <select id="wid_select" class="select2_group form-control">
                                          	<?php
                            					$workerlist = fetchAllWorkers();

                            					$count = 0;

                            					foreach ($workerlist as $worker) {
                              						$count = $count + 1;

                              						echo "
                                					<option value=".$worker->worker_id.">".$worker->worker_name."</option>";
                            					}		
                            
                          					?>

                                          </select>

                                      </div>
                                    </div>


                                <hr>


                                </div>

                                <div class="modal-footer">
                                  <button type="button" class="btn btn-success" onclick="ajaxResolveComplaint(
                                  )"> Set this complaint to RESOLVING stage </button>
                                  
                                  <button id='btn_close_cmpnt_title_modal' type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>

                              </div>
                            </div>
                          </div>



                              <script type="text/javascript">


                                function activateTab1()
                                {

                                     $(document).ready()
                                    { 


                                        $('#tab_content1').attr('class', "tab-pane fade active in" );
                                        $('#tab_select_1').attr('class', "active");
                                        $('#tab_content2').attr('class', "tab-pane fade" );
                                        $('#tab_select_2').attr('class', "");
                                        $('#tab_content3').attr('class', "tab-pane fade" );
                                        $('#tab_select_3').attr('class', "");
                                      
                                    }

                                } 

                                function activateTab2()
                                {

                                    $(document).ready()
                                    { 

                                        $('#tab_content2').attr('class', "tab-pane fade active in" );
                                        $('#tab_select_2').attr('class', "active");
                                        $('#tab_content1').attr('class', "tab-pane fade" );
                                        $('#tab_select_1').attr('class', "");
                                        $('#tab_content3').attr('class', "tab-pane fade" );
                                        $('#tab_select_3').attr('class', "");
                                    }
                                }

                                function activateTab3()
                                {

                                    $(document).ready()
                                    { 

                                      $('#tab_content3').attr('class', "tab-pane fade active in" );
                                      $('#tab_select_3').attr('class', "active");
                                      $('#tab_content2').attr('class', "tab-pane fade" );
                                      $('#tab_select_2').attr('class', "");
                                      $('#tab_content1').attr('class', "tab-pane fade" );
                                      $('#tab_select_1').attr('class', "");
                                    }
                                }
                              </script>




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


        <!-- PNotify -->
    <script src="../../vendors/pnotify/dist/pnotify.js"></script>
    <script src="../../vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="../../vendors/pnotify/dist/pnotify.nonblock.js"></script>


     <!-- Loading Blocking  -->
    <script src="../../build/js/bootstrap-waitingfor.js"></script>
    <script src="../../build/js/bootstrap-waitingfor.min.js"></script>


        <!-- Switchery -->
    <script src="../../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../../vendors/select2/dist/js/select2.full.min.js"></script>



    <!-- Custom Theme Scripts -->
    <script src="../../build/js/custom.min.js"></script>
	
  </body>
</html>