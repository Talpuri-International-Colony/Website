<?php


 /* error_reporting(E_ALL);
ini_set('display_errors', 1);*/

	ini_set('display_errors', 1);

if(isset($_POST['action']))
{
	if($_POST['action'] == 'call_email_verifier') {
	  verifyEmailAddress($_POST['receiver'], $_POST['verif_code']);
	}


	if($_POST['action'] == 'call_phone_verifier') {
	  verifyPhoneAddress($_POST['receiver'], $_POST['verif_code']);
	}

	if($_POST['action'] == 'store_registratin_data') {
		insertNewUnapprovedMemberRecord($_POST['usr_login_id'], $_POST['usr_email'], $_POST['usr_mobile'], $_POST['usr_pwd'], $_POST['usr_house_owner_name'], $_POST['usr_hndovr_date'], $_POST['usr_occpnc_date']);
	}

	if($_POST['action'] == 'try_login') {
		tryLogin($_POST['_usr_usrname_'], $_POST['_usr_pwd_']);
	}

  if($_POST['action'] == 'add_notice') {
    addNotice($_POST['_not_date_'], $_POST['_not_title_'], $_POST['_not_msg_']);
  }

  if($_POST['action'] == 'edit_notice') {
    editNotice($_POST['_n_id_'],$_POST['_n_date_'], $_POST['_n_title_'], $_POST['_n_msg_']);
  }

  if($_POST['action'] == 'load_notice') {
    loadNotice($_POST['notice_id']);
  }

  if($_POST['action'] == 'delete_complaint') {
    deleteComplaint($_POST['comp_id']);
  }

  if($_POST['action'] == 'delete_notice') {
    deleteNotice($_POST['not_id']);
  }

	if($_POST['action'] == 'approve_reg_request') {

		

		if($_POST['adminrights'] === 'true')
		{
			approveRequestWithHouseID($_POST['house_id'], false); // false denotes that it should not send the first message

			giveAdminRightsToHouseID($_POST['house_id']);
		}
		else
		{
			approveRequestWithHouseID($_POST['house_id'], true); // true denotes that it should send the first message
		}
	}

	if($_POST['action'] == 'reject_reg_request') {

			if($_POST['message'] != '') // there is some message to be sent
				rejectRequestWithHouseID($_POST['house_id'], $_POST['message']);
			else
			{
				rejectRequestWithHouseID($_POST['house_id'], 'false');
			}

	}

	if($_POST['action'] == 'sndmssg_reg_request') {

		sendEmailAndPhoneMessageToApplicant(getMemberWithHouseID($_POST['house_id']), $_POST['message']);

	}


	if($_POST['action'] == 'add_new_Complaint')
	{
		insertNewComplaint($_POST['complainant'], $_POST['complaintSubject'], $_POST['complaintBody']);
	}


	
}






//////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////
//////////////////////		UI - RE-USABLE CODE	//////////////////////////////////////////
//////////////////////		UI - RE-USABLE CODE	//////////////////////////////////////////
//////////////////////		UI - RE-USABLE CODE	//////////////////////////////////////////
//////////////////////		UI - RE-USABLE CODE	//////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////


function echo_Admin_sideBar_Menu()
{
	echo 


	"
	<div id='sidebar-menu' class='main_menu_side hidden-print main_menu'>
              <div class='menu_section'>
                <h3>General</h3>
                <ul class='nav side-menu'>
                  <li><a href='home_page.php'><i class='fa fa-home'></i> Home <!-- <span class='fa fa-chevron-down'> --></span></a>
                  </li>
                  <li><a><i class='fa fa-edit'></i> Admin Tasks <span class='fa fa-chevron-down'></span></a>
                    <ul class='nav child_menu'>
                      <li><a href='admin_tasks.php#tabContent1' onclick='activateTab1()'> New Registration Requests</a></li>
                      <li><a href='admin_tasks.php#tabContent2' onclick='activateTab2()'>  Handle Complaints </a></li>
                      <li><a href='admin_tasks.php#tabContent3' onclick='activateTab3()'>Notice Board Pins</a></li>
                    </ul>
                  </li>
                  <li><a><i class='fa fa-users'></i> Support Contacts <span class='fa fa-chevron-down'></span></a>
                    <ul class='nav child_menu'>
                      <li><a href='general_elements.html'> Plumbers </a></li>
                      <li><a href='media_gallery.html'> Electrician </a></li>
                      <li><a href='typography.html'> Mason / Handyman </a></li>
                      <li><a href='icons.html'>Painters</a></li>
                      <li><a href='glyphicons.html'>Air-Conditioning</a></li>
                      <li><a href='widgets.html'>Carpenter</a></li>
                      <li><a href='invoice.html'>Kitchen Appliance Repair</a></li>
                      <li><a href='inbox.html'>House Maids</a></li>
                      <li><a href='calendar.html'>Security</a></li>
                      <li><a href='calendar.html'>House Water Supply</a></li>
                      <li><a href='calendar.html'>Electricity Failure</a></li>
                      <li><a href='calendar.html'>Landline issues</a></li>
                      <li><a href='calendar.html'>Catering needs</a></li>
                      <li><a href='calendar.html'>Theft</a></li>
                      <li><a href='calendar.html'>Snakes / Dog nuisance</a></li>
                      <li><a href='calendar.html'>Medical Needs</a></li>
                      <li><a href='calendar.html'>Road Accidents</a></li>
                      <li><a href='calendar.html'>Fire Brigade</a></li>
                      <li><a href='calendar.html'>Street Light</a></li>
                      <li><a href='calendar.html'>Lifts</a></li>
                      <li><a href='calendar.html'>Water Drainage</a></li>
                      <li><a href='calendar.html'>Sewage Treatment & Disposal </a></li>
                      <li><a href='calendar.html'>Open Space / Garden Management</a></li>
                      <li><a href='calendar.html'>Road/Drain Cleaning</a></li>
                      <li><a href='calendar.html'>Garbage Collection</a></li>
                      <li><a href='calendar.html'>General Support</a></li>
                    </ul>
                  </li>
                  <li><a><i class='fa fa-inr'></i> RWA Funds Management <span class='fa fa-chevron-down'></span></a>
                    <ul class='nav child_menu'>
                      <li><a href='tables.html'>Tables</a></li>
                      <li><a href='tables_dynamic.html'>Table Dynamic</a></li>
                    </ul>
                  </li>
                  <li><a><i class='fa fa-bar-chart-o'></i> Colony Statistics <span class='fa fa-chevron-down'></span></a>
                    <ul class='nav child_menu'>
                      <li><a href='list_all_society_members.php'> Show Registered Members </a></li>
                    </ul>
                  </li>
                
                </ul>
              </div>
            

            </div>

	";
}



function echo_Member_sideBar_Menu()
{

echo
            "<div id='sidebar-menu' class='main_menu_side hidden-print main_menu'>
              <div class='menu_section'>
                <h3>General</h3>
                <ul class='nav side-menu'>
                  <li><a href='home_page.php'><i class='fa fa-home'></i> Home <!-- <span class='fa fa-chevron-down'> --></span></a>
                  </li>
                  <li><a><i class='fa fa-edit'></i> My Tasks <span class='fa fa-chevron-down'></span></a>
                    <ul class='nav child_menu'>
                      <li><a href='member_complaints.php'>  My Complaints </a></li>
                      <li><a href=''> Notice Board </a></li>
                    </ul>
                  </li>
                  <li><a><i class='fa fa-users'></i> Support Contacts <span class='fa fa-chevron-down'></span></a>
                    <ul class='nav child_menu'>
                      <li><a href='general_elements.html'> Plumbers </a></li>
                      <li><a href='media_gallery.html'> Electrician </a></li>
                      <li><a href='typography.html'> Mason / Handyman </a></li>
                      <li><a href='icons.html'>Painters</a></li>
                      <li><a href='glyphicons.html'>Air-Conditioning</a></li>
                      <li><a href='widgets.html'>Carpenter</a></li>
                      <li><a href='invoice.html'>Kitchen Appliance Repair</a></li>
                      <li><a href='inbox.html'>House Maids</a></li>
                      <li><a href='calendar.html'>Security</a></li>
                      <li><a href='calendar.html'>House Water Supply</a></li>
                      <li><a href='calendar.html'>Electricity Failure</a></li>
                      <li><a href='calendar.html'>Landline issues</a></li>
                      <li><a href='calendar.html'>Catering needs</a></li>
                      <li><a href='calendar.html'>Theft</a></li>
                      <li><a href='calendar.html'>Snakes / Dog nuisance</a></li>
                      <li><a href='calendar.html'>Medical Needs</a></li>
                      <li><a href='calendar.html'>Road Accidents</a></li>
                      <li><a href='calendar.html'>Fire Brigade</a></li>
                      <li><a href='calendar.html'>Street Light</a></li>
                      <li><a href='calendar.html'>Lifts</a></li>
                      <li><a href='calendar.html'>Water Drainage</a></li>
                      <li><a href='calendar.html'>Sewage Treatment & Disposal </a></li>
                      <li><a href='calendar.html'>Open Space / Garden Management</a></li>
                      <li><a href='calendar.html'>Road/Drain Cleaning</a></li>
                      <li><a href='calendar.html'>Garbage Collection</a></li>
                      <li><a href='calendar.html'>General Support</a></li>
                    </ul>
                  </li>
                  <li><a><i class='fa fa-inr'></i> Pay Maintenance Fees <span class='fa fa-chevron-down'></span></a>
                    <ul class='nav child_menu'>
                      <li><a href='tables.html'>Tables</a></li>
                      <li><a href='tables_dynamic.html'>Table Dynamic</a></li>
                    </ul>
                  </li>
                  <li><a><i class='fa fa-bar-chart-o'></i> My Summary Statistics <span class='fa fa-chevron-down'></span></a>
                    <ul class='nav child_menu'>
                      <li><a href='chartjs.html'>Chart JS</a></li>
                      <li><a href='chartjs2.html'>Chart JS2</a></li>
                      <li><a href='morisjs.html'>Moris JS</a></li>
                      <li><a href='echarts.html'>ECharts</a></li>
                      <li><a href='other_charts.html'>Other Charts</a></li>
                    </ul>
                  </li>
                
                </ul>
              </div>
            

            </div>";

}








//////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////
//////////////////////		CLASSES 			//////////////////////////////////////////
//////////////////////		CLASSES 			//////////////////////////////////////////
//////////////////////		CLASSES 			//////////////////////////////////////////
//////////////////////		CLASSES 			//////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////


class Member
{
   function Member($house_id, $email, $mobile, $handovr_date , $occupancy_date, $admin_rights, $approved, $owner_name)
   {
      $this->house_id = $house_id;
      $this->email = $email;
      $this->mobile = $mobile;
      $this->handovr_date = $handovr_date;
      $this->occupancy_date = $occupancy_date;
      $this->admin_rights = $admin_rights;
      $this->approved = $approved;
      $this->owner_name = $owner_name;
   }
}



class Complaint
{
   function Complaint($complaint_id, $complainant_id, $complaint_body, $complaint_subject, $resolved, $status, $time_stamp)
   {
      $this->complaint_id = $complaint_id;
      $this->complainant = $complainant_id;
      $this->time_stamp = $time_stamp;
      $this->complaint_body = $complaint_body;
      $this->complaint_subject = $complaint_subject;
      $this->resolved = $resolved;
      $this->status = $status;
   }
}

class Notices
{
   function Notices($nId, $nDate, $nTitle, $nMessage)
   {
      $this->notice_id = $nId;
      $this->notice_date = $nDate;
      $this->notice_title = $nTitle;
      $this->notice_content = $nMessage;
   }
}






//////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////
//////////////////////		FUNCTIONS 			//////////////////////////////////////////
//////////////////////		FUNCTIONS 			//////////////////////////////////////////
//////////////////////		FUNCTIONS 			//////////////////////////////////////////
//////////////////////		FUNCTIONS 			//////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////





function connectToDatabase()
{

   include('info.php');
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   if(! $conn ) {
     die('Could not connect: ' . mysql_error());
   }
  //  else
  //  {
	 //   	$res=mysql_query('SHOW DATABASES',$conn);

	 //   	while ($row = mysql_fetch_assoc($res)) 
	 //   	{
	 //    	echo $row['Database']."<br>";
		// }	
  // 	}
   
   mysql_select_db($db_database, $conn);
   // echo 'Connected successfully <br>';

   return $conn;
}

function endDatabaseConnection($conn)
{
    mysql_close($conn);
}


function createMembersTable()
{
   $conn=connectToDatabase();

   $sql='CREATE TABLE members('.
      'house_id varchar(15) NOT NULL,'.
      'owner_name varchar(100) NOT NULL,'.
      'pwd varchar(255) NOT NULL,'.
      'admin_rights BOOLEAN NOT NULL,'.
      'handovr_date DATE NOT NULL,'.
      'occupancy_date DATE NOT NULL,'.
      "contact_email varchar(100) NOT NULL,".
//      "contact_email varchar(100) NOT NULL CONSTRAINT email_format CHECK (REGEXP_LIKE (contact_email, '^\w+(\.\w+)*+@\w+(\.\w+)+$')),".
      "contact_phone varchar(50) NOT NULL,".
      "approved BOOLEAN NOT NULL,". // approved decides whetther the registration of this member has been approved or not
      'PRIMARY KEY(house_id) )';

   $retval=mysql_query($sql,$conn);
   
   if(!$retval )
   {
     die('Could not get data (createMembersTable) : ' . mysql_error());
   }
   // else{
   //    echo "Created Members Table successfully <br>";
   // }

   endDatabaseConnection($conn);
} 


function createComplaintsTable()
{
    $conn=connectToDatabase();

   $sql='CREATE TABLE complaints('.
      'complaint_id INTEGER AUTO_INCREMENT NOT NULL,'.
      'complainant_id varchar(15) NOT NULL,'.
      'time_stamp DATETIME NOT NULL,'.
      'subject varchar(100) NOT NULL,'. // the status changes as follows :  INITIATED >> RESOLVING >> FINISHED
      'body varchar(1000) NULL,'.
      'status varchar(20) NOT NULL,'.
      'resolved BOOLEAN NOT NULL,'.
      'PRIMARY KEY(complaint_id), '.
      'FOREIGN KEY(complainant_id) REFERENCES members(house_id))';
      
   $retval=mysql_query($sql,$conn);
   
   if(!$retval )
   {
     die('Could not get data createComplaintsTable: ' . mysql_error());
   }
   else{
     // echo "Created Complaints Table successfully <br>";
   }
   endDatabaseConnection($conn);
}

function insertNewComplaint($complainant, $complaint_subject, $complaint_body)
{
	$conn = connectToDatabase();


	$sql="INSERT INTO complaints(complainant_id, time_stamp, subject, body, status, resolved) VALUES ('".$complainant."', now() , '".$complaint_subject."', '".$complaint_body."', 'initiated', 0)";


   $retval=mysql_query($sql,$conn);
   
   if(!$retval )
   {
     die('Could not insert data (insertNewComplaint) : ' . mysql_error());
   }
   else
   	echo "success";

   endDatabaseConnection($conn);
}


function getAllComplaintsByUser($complainant_id)
{
	$conn=connectToDatabase();

    $sql = "SELECT time_stamp, subject, body, status, resolved FROM complaints WHERE complainant_id = '".$complainant_id."'";

   $retval=mysql_query($sql,$conn);
   if(! $retval )
   {
     die('Could not get data: getAllComplaintsByUser' . mysql_error());
   }

	$cmplnts_ARRAY = array();

   $i=0;
   while($row=mysql_fetch_assoc($retval))
   {
      $cmplnts_ARRAY[$i] = new Complaint($complainant_id, $row['body'], $row['subject'], $row['resolved'], $row['status'], $row['time_stamp']);
      $i = $i + 1;
   }

   endDatabaseConnection($conn);
   return array_reverse($cmplnts_ARRAY);

}


function fetchAllUnresolvedComplaints()
{

	 $conn=connectToDatabase();

    $sql = "SELECT complaint_id, complainant_id, resolved, time_stamp, subject, body, status FROM complaints where resolved = 0";

   $retval=mysql_query($sql,$conn);
   if(! $retval )
   {
     die('Could not get data: fetchAllUnresolvedComplaints' . mysql_error());
   }

   $complnts_ARRAY = array();

   $i=0;
   while($row=mysql_fetch_assoc($retval))
   {
   	// ($house_id, $email, $mobile, $handovr_date , $occupancy_date, $admin_rights, $approved)
      $complnts_ARRAY[$i] = new Complaint($row['complaint_id'], $row['complainant_id'], $row['body'], $row['subject'], $row['resolved'], $row['status'], $row['time_stamp']);
      $i = $i + 1;
   }

   endDatabaseConnection($conn);
   return array_reverse($complnts_ARRAY);

}

function fetchAllNotices()
{

   $conn=connectToDatabase();

    $sql = "SELECT * from notice";

   $retval=mysql_query($sql,$conn);
   if(! $retval )
   {
     die('Could not get data: fetchNotices' . mysql_error());
   }

   $notices_ARRAY = array();

   $i=0;
   while($row=mysql_fetch_assoc($retval))
   {
    // ($house_id, $email, $mobile, $handovr_date , $occupancy_date, $admin_rights, $approved)
      $notices_ARRAY[$i] = new Notices($row['nId'], $row['nDate'], $row['nTitle'], $row['nMessage']);
      $i = $i + 1;
   }

   endDatabaseConnection($conn);
   return $notices_ARRAY;
   //return array_reverse($notices_ARRAY);

}



function insertNewUnapprovedMemberRecord($usr_login_id, $usr_email, $usr_mobile, $usr_pwd, $usr_house_owner_name, $usr_hndovr_date, $usr_occpnc_date)
{
	$conn = connectToDatabase();

	$sql_handovr_date = date('Y-m-d', strtotime( $usr_hndovr_date));
	$sql_occpnc_date = date('Y-m-d', strtotime($usr_occpnc_date));

	$_password_hash_ = password_hash($usr_pwd, PASSWORD_DEFAULT);
	// use : 
	// echo password_verify ( $usr_pwd , $_password_hash_ );
	// for verfification @ login time


	$sql="INSERT INTO members(house_id, owner_name, pwd, admin_rights, handovr_date, occupancy_date, contact_email, contact_phone, approved) VALUES ('".$usr_login_id."', '".$usr_house_owner_name."', '".$_password_hash_."', 0, '".$sql_handovr_date."', '".$sql_occpnc_date."', '".$usr_email."', '".$usr_mobile."', 0)";


   $retval=mysql_query($sql,$conn);
   
   if(!$retval )
   {
     die('Could not insert data (insertNewUnapprovedMemberRecord) : ' . mysql_error());
   }
   // else{
   //    echo "Created Members Table successfully <br>";
   // }

   endDatabaseConnection($conn);

}


function getMemberWithHouseID($house_id)
{
	$conn=connectToDatabase();

    $sql = "SELECT house_id, owner_name, admin_rights, handovr_date, occupancy_date, contact_email, contact_phone, approved FROM members WHERE house_id = '".$house_id."'";

   $retval=mysql_query($sql,$conn);
   if(! $retval )
   {
     die('Could not get data: getMemberWithHouseID' . mysql_error());
   }

   if(mysql_num_rows($retval) == 0)
   {
   	die('No such member found ! (getMemberWithHouseID) ');
   }
   else if(mysql_num_rows($retval) >1)
   {
   		die('Impossible ! House_ID is a primary key');
   }	


   $row=mysql_fetch_assoc($retval);


   endDatabaseConnection($conn);
   
   	// ($house_id, $email, $mobile, $handovr_date , $occupancy_date, $admin_rights, $approved)
    return new Member($row['house_id'], $row['contact_email'],$row['contact_phone'],$row['handovr_date'] , $row['occupancy_date'], $row['admin_rights'], $row['approved'], $row['owner_name'] );
   

}


function approveRequestWithHouseID($house_id_2_apprv, $snd_mssg_bool=false)
{
	$conn = connectToDatabase();

	$sql="UPDATE members SET approved = 1 WHERE house_id = '".$house_id_2_apprv."'";

   $retval=mysql_query($sql,$conn);
   
   if(!$retval )
   {
     die('Could not insert data (insertNewUnapprovedMemberRecord) : ' . mysql_error());
   }
   // else{
   //    echo "Created Members Table successfully <br>";
   // }

   endDatabaseConnection($conn);

   if($snd_mssg_bool)
   {
   	 sendEmailAndPhoneMessageToApplicant(getMemberWithHouseID($house_id_2_apprv), "Congratz ! Your registration request has been accepted by Talpuri RWA Admin. You may now log into the website using your HouseID & password");
   }


}



function rejectRequestWithHouseID($house_id_2_reject, $status)
{
	if($status == 'false')
	{
  	 sendEmailAndPhoneMessageToApplicant(getMemberWithHouseID($house_id_2_reject), "Sorry ! Your registration request has been rejected by Talpuri RWA Admin. Please contact Mr. Shishir Tamotia for details.");
	}
	else // there is some message in the status variable
	{
		sendEmailAndPhoneMessageToApplicant(getMemberWithHouseID($house_id_2_reject), $status);
	}


	$conn = connectToDatabase();

	$sql="DELETE FROM members WHERE house_id = '".$house_id_2_reject."'";

   $retval=mysql_query($sql,$conn);
   
   if(!$retval )
   {
     die('Could not delete data (rejectRequestWithHouseID) : ' . mysql_error());
   }

   endDatabaseConnection($conn);

 
}






function giveAdminRightsToHouseID($house_id_2_adminate)
{
	$conn = connectToDatabase();

	$sql="UPDATE members SET admin_rights = 1 WHERE house_id = '".$house_id_2_adminate."'";

   $retval=mysql_query($sql,$conn);
   
   if(!$retval )
   {
     die('Could not insert data (insertNewUnapprovedMemberRecord) : ' . mysql_error());
   }
   // else{
   //    echo "Created Members Table successfully <br>";
   // }

   endDatabaseConnection($conn);

   sendEmailAndPhoneMessageToApplicant(getMemberWithHouseID($house_id_2_adminate), "Congratz ! You have now been given full Administrator Privileges by the Talpuri Association RWA. You may now log into your Admin account");
}

function addNotice($date, $title, $msg)
{
  $conn = connectToDatabase();


  $sql="INSERT INTO notice(nDate, nTitle, nMessage) values('".$date."', '".$title."', '".$msg."')";


   $retval=mysql_query($sql,$conn);
   
   if(!$retval )
   {
     die('Could not insert data (addNotice) : ' . mysql_error());
   }
   // else{
   //    echo "Added Notice successfully <br>";
   // }

   endDatabaseConnection($conn);
}

function editNotice($id, $date, $title, $msg)
{
  $conn = connectToDatabase();


  $sql="UPDATE notice SET nDate = '".$date."', nTitle = '".$title."', nMessage = '".$msg."' WHERE nId = '".$id."'";


   $retval=mysql_query($sql,$conn);
   
   if(!$retval )
   {
     die('Could not update data (editNotice) : ' . mysql_error());
   }
   // else{
   //    echo "Updated Notice successfully <br>";
   // }

   endDatabaseConnection($conn);
}


function deleteComplaint($comp_id)
{
  $conn = connectToDatabase();


  $sql="delete from complaints where complaint_id=$comp_id";


   $retval=mysql_query($sql,$conn);
   
   if(!$retval )
   {
     die('Could not delete data (deleteComplaint) : ' . mysql_error());
   }
   // else{
   //    echo "Added Notice successfully <br>";
   // }

   endDatabaseConnection($conn);
}

function deleteNotice($n_id)
{
  $conn = connectToDatabase();


  $sql="delete from notice where nId=$n_id";


   $retval=mysql_query($sql,$conn);
   
   if(!$retval )
   {
     die('Could not delete data (deleteNotice) : ' . mysql_error());
   }
   // else{
   //    echo "Added Notice successfully <br>";
   // }

   endDatabaseConnection($conn);
}

function tryLogin($username, $password)
{

	$conn = connectToDatabase();

	#$_password_hash_ = password_hash($usr_pwd, PASSWORD_DEFAULT);
	// use : 
	
	// for verfification @ login time


	// fetch all the approved members of the given username and password :
   $sql = "SELECT admin_rights,approved,pwd,owner_name FROM members where house_id = '".$username."' ";


   $retval=mysql_query($sql,$conn);

   
   if(!$retval )
   {
     die('Could not fetch data (tryLogin) : ' . mysql_error());
   }
   else if (mysql_num_rows($retval) == 0)
   	echo 'id_not_found';
   else
   {
   	  $row=mysql_fetch_assoc($retval);

   	  // check if the entered password match the stored hash :
   	  if(password_verify($password , $row['pwd'] ))
   	  {
   	  	// great ! the password is Correct !
   	  	// now, check if it's an approved member
   	  	if($row['approved']==true)
   	  	{	
   	  		session_start();
   	  		$_SESSION['_house_owner_name_']=$row['owner_name'];
   	  		$_SESSION['house_id']=$username;

   	  		if($row['admin_rights']==true)
   	  			echo 'login_as_admin';
   	  		else
   	  			echo 'login_as_nonadmin';
   	  	}
   	  	else
   	  	{
   	  		echo 'unapproved_request';
   	  	}
   	  }
   	  else
   	  {
   	  	echo 'incorrect_password';
   	  }
   }
   // else{
   //    echo "Created Members Table successfully <br>";
   // }

   endDatabaseConnection($conn);
	
}


function fetchAllMembersfromDatabase()
{

   $conn=connectToDatabase();

    $sql = "SELECT house_id, owner_name, admin_rights, handovr_date, occupancy_date, contact_email, contact_phone, approved FROM members";

   $retval=mysql_query($sql,$conn);
   if(! $retval )
   {
     die('Could not get data: fetchAllMembersfromDatabase' . mysql_error());
   }

   $members_ARRAY = array();

   $i=0;
   while($row=mysql_fetch_assoc($retval))
   {
   	// ($house_id, $email, $mobile, $handovr_date , $occupancy_date, $admin_rights, $approved)
      $members_ARRAY[$i] = new Member($row['house_id'], $row['contact_email'],$row['contact_phone'],$row['handovr_date'] , $row['occupancy_date'], $row['admin_rights'], $row['approved'], $row['owner_name'] );
      $i = $i + 1;
   }

   endDatabaseConnection($conn);
   return array_reverse($members_ARRAY);
}

function dropTable($table_name)
{
	 $conn=connectToDatabase();

   $sql='DROP TABLE '.$table_name.'';

   $retval=mysql_query($sql,$conn);
   
   if(!$retval )
   {
     die('Could not delete data (drop'.$table_name.'Table) : ' . mysql_error());
   }
   // else{
   //    echo "Created Members Table successfully <br>";
   // }

   endDatabaseConnection($conn);
}





function sendEmailAndPhoneMessageToApplicant($member, $message)
{

	require 'PHPMailer-master\PHPMailer-master\PHPMailerAutoload.php';


	// Fetching data that is entered by the user
	$email = "talpuri.international.colony@gmail.com";
	$password = "talpuri123";
	$to_id = $member->email;
	$subject = "Message from Administrator - Talpuri International Colony";

	// Configuring SMTP server settings
	$mail = new PHPMailer;



  include('info.php'); // to include the Configuration Settings for PHPMailer

  $mail->isSMTP();

  $mail->Host = $_MAILER_Host;
  $mail->Port = $_MAILER_Port;
  $mail->SMTPSecure = $_MAILER_SMTPSecure;
  $mail->SMTPAuth = $_MAILER_SMTPAuth;

  if($_MAILER_Username!=='none')
   $mail->Username = $email;
  if($_MAILER_Password!=='none')
   $mail->Password = $password;


	// Email Sending Details
	$mail->addAddress($to_id);
	$mail->Subject = $subject;
	$mail->msgHTML($message);

	// Success or Failure
	if (!$mail->send()) {
	$error = "Mailer Error: " . $mail->ErrorInfo;
	echo 'Sorry ! Unable to send email ... '.$error;
	}
	else {
	echo 'An email has been succesfully sent to '. $member->email .'!';
	}


	include('Way2SMS-API-master\Way2SMS-API-master\way2sms-api.php');
    sendWay2SMS ( '9407962074' , 'rawalarpana' , $member->mobile , $message);   


}


function verifyEmailAddress($receiver_email, $verification_code)
{

  include('info.php');

	require 'PHPMailer-master\PHPMailer-master\PHPMailerAutoload.php';

	// Fetching data that is entered by the user
	$email = "talpuri.international.colony@gmail.com";
	$password = "talpuri123";
	$to_id = $receiver_email;
	$message = "The verification code is ".$verification_code." . Please enter this code on Talpuri website to get your email ID verified.";
	$subject = "Email Address Verification - Talpuri International Colony";

	// Configuring SMTP server settings
	$mail = new PHPMailer;


  include('info.php'); // to include the Configuration Settings for PHPMailer

	$mail->isSMTP();

	$mail->Host = $_MAILER_Host;
	$mail->Port = $_MAILER_Port;
	$mail->SMTPSecure = $_MAILER_SMTPSecure;
	$mail->SMTPAuth = $_MAILER_SMTPAuth;

  if($_MAILER_Username!=='none')
	 $mail->Username = $email;
  if($_MAILER_Password!=='none')
	 $mail->Password = $password;


	// Email Sending Details
	$mail->addAddress($to_id);
	$mail->Subject = $subject;
	$mail->msgHTML($message);

	// Success or Failure
	if (!$mail->send()) {
	$error = "Mailer Error: " . $mail->ErrorInfo;
	echo 'Sorry ! Unable to send email ... '.$error;
	}
	else {
	echo 'An email has been succesfully sent to '. $receiver_email .'!';
	}

}



function verifyPhoneAddress($receiver_phone, $verification_code)
{
	include('Way2SMS-API-master\Way2SMS-API-master\way2sms-api.php');

	$message = "The verification code is ".$verification_code." . Please enter this code on the Talpuri website to get your mobile number verified.";
    sendWay2SMS ( '9407962074' , 'rawalarpana' , $receiver_phone , $message);   

}


?>