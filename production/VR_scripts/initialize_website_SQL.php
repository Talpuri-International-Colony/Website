<?php

include('helper_modules.php');


createMembersTable();
createComplaintsTable();

// (house_id, owner_name, pwd, admin_rights, handovr_date, occupancy_date, contact_email, contact_phone, approved)
insertNewUnapprovedMemberRecord('rose102', 'arpana.rawal@gmail.com', '9407962074', 'admin', 'Vineet Rawal', date('Y-m-d', strtotime('07/09/2013')), date('Y-m-d', strtotime('10/10/2013')));
approveRequestWithHouseID('rose102');
giveAdminRightsToHouseID('rose102');


?>
