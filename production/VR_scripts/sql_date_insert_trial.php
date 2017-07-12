<?php
	
  error_reporting(E_ALL);
ini_set('display_errors', 1);


	$olddate = '07/09/2013';
	$newdate = date('Y-m-d', strtotime($olddate));
	//echo $newdate;
	//insertNewUnapprovedMemberRecord('aaa','aa','333','sfsf','fwf',$newdate,$newdate);
	// IT WORKS !!
	/// !
  $u1 = password_hash("india123", PASSWORD_DEFAULT);
  $u2 = password_hash("india123", PASSWORD_DEFAULT);
  echo password_verify ( "india123" , $u1 );
  echo password_verify ( "india123" , $u2 );

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
   
   mysql_select_db('talpuri', $conn);
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
      'pwd varchar(30) NOT NULL,'.
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

function insertNewUnapprovedMemberRecord($usr_login_id, $usr_email, $usr_mobile, $usr_pwd, $usr_house_owner_name, $usr_hndovr_date, $usr_occpnc_date)
{
	$conn = connectToDatabase();

	$sql="INSERT INTO members(house_id, owner_name, pwd, admin_rights, handovr_date, occupancy_date, contact_email, contact_phone, approved) VALUES ('".$usr_login_id."', '".$usr_house_owner_name."', '".$usr_pwd."', 0, '".$usr_hndovr_date."', '".$usr_occpnc_date."', '".$usr_email."', '".$usr_mobile."', 0)";


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

?>