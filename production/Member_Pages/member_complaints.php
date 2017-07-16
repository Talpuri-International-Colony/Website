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

    <!-- bootstrap-wysiwyg -->
    <link href="../../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">


    <!-- Custom Theme Style -->
    <link href="../../build/css/custom.min.css" rel="stylesheet">
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
                <input id="house_id_logged_in" type="text" hidden value= <?php echo "'".$_SESSION['house_id']."'"; ?> ></input>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

         <!-- sidebar menu -->
             <?php 
                echo_Member_sideBar_Menu();
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
                <h3> Talpuri International Colony RWA - Complaint Management  </h3>
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
                                    <h2><i class="fa fa-bars"></i> My Complaints <small> Switch from one tab to other </small></h2>
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


                              <button id="compose" class="btn btn-lg btn-primary btn-block" type="button">LODGE A NEW COMPLAINT</button>


                                  <div class="x_content">


                                           <!-- start accordion -->
                                            <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">


                                            <?php


                                              $all_my_complaints = getAllComplaintsByUser($_SESSION['house_id']);


                                              $counter = 0;
                                              foreach ($all_my_complaints as $cmplnt) {
                                                $counter = $counter + 1;

                                                    if($cmplnt->resolved)
                                                      $resolv_mssg = "<h2 class='pull-right' style='color : green;'> RESOLVED";
                                                    else
                                                      $resolv_mssg = "<h2 class='pull-right' style='color : red;'> UNRESOLVED";
                                                

                                              echo "  
                                                <div class='panel'>
                                                  <a class='panel-heading' role='tab' id='headingOne' data-toggle='collapse' data-parent='#accordion' href='#cmpnt_tab_collapse_".$counter."' aria-expanded='true' aria-controls='cmpnt_tab_collapse_".$counter."'>
                                                    <h4 class='panel-title'>".$cmplnt->complaint_subject."</h4> &nbsp; ".$resolv_mssg."</h2>
                                                  </a>
                                                  <div id='cmpnt_tab_collapse_".$counter."' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingOne'>
                                                    <div class='panel-body'>
                                                      
                                                      <hr>

                                                      <p><strong>SUBJECT</strong>
                                                      </p>
                                                      ".$cmplnt->complaint_subject."

                                                      <hr>

                                                      <p><strong>COMPLAINT BODY</strong>
                                                      </p>
                                                      ".$cmplnt->complaint_body."

                                                      <hr>

                                                      <p><strong>CURRENT STATUS</strong>
                                                      </p>
                                                      ".$cmplnt->status."

                                                      <hr>

                                                      <p><strong>DATE & TIME OF COMPLAINT</strong>
                                                      </p>
                                                      ".$cmplnt->time_stamp."

                                                      <hr>


                                                            <div class='x_content' style='text-align: center;'>

                                                                  <button type='button' onclick=\"ajax_reg_request_approve('".$memb->house_id."', 'false')\" class='btn btn-round btn-success'> Thanks Admin ! You resolved my issue. </button>

                                                                  <button type='button' onclick=\"ajax_reg_request_sndmssg('".$memb->house_id."', 'Plz meet Mr. Shishir Tamotia personally for approval of your Talpuri RWA registration request.')\" class='btn btn-round btn-primary'>Request Admin to Call me</button>

                                                                  <button type='button' onclick=\"ajax_reg_request_approve('".$memb->house_id."', 'true')\" class='btn btn-round btn-info'> ITS URGENT. I need HELP </button>

                                                                  <button type='button' onclick=\"ajax_reg_request_reject('".$memb->house_id."', 'Plz resubmit your Talpuri RWA registration request with complete & correct details. Contact Mr. Shishir Tamotia for details.')\"  class='btn btn-round btn-warning'> I resolved this issue on my own</button>

                                                                  <button type='button' onclick=\"ajax_reg_request_reject('".$memb->house_id."', '')\" class='btn btn-round btn-danger'> Delete This Complaint</button>
                                                                </div>





                                                    </div>
                                                  </div>
                                                </div>
                                                ";

                                              }

                                              ?>



                                            </div>
                                            <!-- end of accordion -->


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








    <!-- compose -->
    <div class="compose col-md-6 col-xs-12">
      <div class="compose-header">
        <h1> Please Describe the Complaint in Detail. </h1>
        <button type="button" class="close compose-close">
          <span>&times;</span>
        </button>
      </div>

      <div class="compose-body">
        <div id="alerts"></div>

        <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor">
          <div class="btn-group">
            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
            <ul class="dropdown-menu">
            </ul>
          </div>

          <div class="btn-group">
            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li>
                <a data-edit="fontSize 5">
                  <p style="font-size:17px">Huge</p>
                </a>
              </li>
              <li>
                <a data-edit="fontSize 3">
                  <p style="font-size:14px">Normal</p>
                </a>
              </li>
              <li>
                <a data-edit="fontSize 1">
                  <p style="font-size:11px">Small</p>
                </a>
              </li>
            </ul>
          </div>

          <div class="btn-group">
            <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
            <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
            <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
            <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
          </div>

          <div class="btn-group">
            <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
            <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
            <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
            <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
          </div>

          <div class="btn-group">
            <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
            <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
            <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
            <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
          </div>

          <div class="btn-group">
            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
            <div class="dropdown-menu input-append">
              <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
              <button class="btn" type="button">Add</button>
            </div>
            <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
          </div>

          <div class="btn-group">
            <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
            <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
          </div>

          <div class="btn-group">
            <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
            <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
          </div>
        </div>

        <div id="editor" class="editor-wrapper"></div>
      </div>



      <div class="compose-footer">
        <button id="send_complnt_bttn" class="btn btn-lg btn-success compose-close" type="button" data-toggle="modal" data-target=".bs-example-modal-lg"  >Lodge Complaint</button>

      

       <script type="text/javascript">
      // document.getElementById ("send_complnt_bttn").addEventListener ("click", send_Complaint, false);

         /* send_Complaint = function() {
            window.alert($('#editor').text());
          }*/
      </script>




        <button type="button" class="pull-left compose-close btn btn-danger btn-lg">
          Cancel
        </button>

      </div>
    </div>
    <!-- /compose -->





                   <!-- modals -->
                  <!-- Large modal -->

                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel"> Please enter a Subject Title for your Complaint  </h4>
                        </div>
                        <div class="modal-body">
                          <h4>  What are you complaining about ? </h4>
                          <input id="complnt_subject_input" type="text" class="form-control" placeholder="Enter Complaint Subject here ... " required>
                        </div>
                        <div class="modal-footer">
                          <button id='btn_close_cmpnt_title_modal' type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary" onclick="ajaxSendComplaint()"> Submit Complaint to Administrator</button>
                        </div>

                      </div>
                    </div>
                  </div>




                        <script type="text/javascript">
                          

                              function ajaxSendComplaint() {

                                    //window.alert("ok");

                                    var complaint_body =  $('#editor').text();
                                    var complaint_subj = $('#complnt_subject_input').val();
                                    var logged_in_house_id = $('#house_id_logged_in').val();

                                   // alert(logged_in_house_id);

                                    if (complaint_body == '')
                                    {
                                      new PNotify({
                                              title: 'Empty complaint body Specified !',
                                              text: 'You cannot leave the body of the complaint BLANK !',
                                              type: 'error',
                                              styling: 'bootstrap3'
                                            });

                                    }
                                    else if (complaint_subj == '')
                                    {
                                      new PNotify({
                                              title: 'Empty complaint Subject Specified !',
                                              text: 'You cannot leave the subject title of the complaint BLANK !',
                                              type: 'error',
                                              styling: 'bootstrap3'
                                            });

                                    }
                                    else
                                    {

                                       $.ajax({
                                         type: "POST",
                                         url: '../VR_scripts/helper_modules.php',
                                         data:{action:'add_new_Complaint', complainant: logged_in_house_id, complaintSubject : complaint_subj, complaintBody : complaint_body},
                                         success:function(html) {
                                         // alert(html);

                                           new PNotify({
                                                      title: 'Complaint Succesfully Lodged !',
                                                      text: 'Your Complaint has been succesfully lodged onto the Database.',
                                                      type: 'success',
                                                      styling: 'bootstrap3'
                                                    });

                                           $('#btn_close_cmpnt_title_modal').click();


                                           window.setTimeout(function(){location.reload()},3000);


                                           },
                                           error:function(XMLHttpRequest, textStatus, errorThrown) {
                                              new PNotify({
                                                      title: ' FAILURE !',
                                                      text: 'We faced an error lodging your complaint onto the Database.',
                                                      type: 'error',
                                                      styling: 'bootstrap3'
                                                    });
                                           }

                                      });


                                      waitingDialog.show('Lodging your complaint ... ');
                                      setTimeout(function () {
                                        waitingDialog.hide();
                                      }, 2000);
                                  }
                         }


                        </script>




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


     <!-- bootstrap-wysiwyg -->
    <script src="../../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../../vendors/google-code-prettify/src/prettify.js"></script>




    <!-- Custom Theme Scripts -->
    <script src="../../build/js/custom.min.js"></script>
	
  </body>
</html>