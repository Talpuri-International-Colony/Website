<?php
include('helper_modules.php');


createMembersTable();
createComplaintsTable();
//echo "running";
//(house_id, owner_name, pwd, admin_rights, handovr_date, occupancy_date, contact_email, contact_phone, approved)
insertNewUnapprovedMemberRecord('rose0102', 'arpana.rawal@gmail.com', '9407962074', 'admin', 'Vineet Rawal', date('Y-m-d', strtotime('07/09/2013')), date('Y-m-d', strtotime('10/10/2013')));
//echo "running";
approveRequestWithHouseID('rose0102');
giveAdminRightsToHouseID('rose0102');

approveRequestWithHouseID('lotus78');
?>
