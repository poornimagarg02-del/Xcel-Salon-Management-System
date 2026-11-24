<?php
// mass_refactor.php

$files = array(
    'barberCPcode.php', 'barbereditbyadmin.php', 'barberupdatebyadmin.php', 'booking.php',
    'bookingstatus.php', 'bookingstatusupdate.php', 'complaintcode.php', 'contactuscode.php',
    'create_admin_code.php', 'customerCPcode.php', 'cust_reg_code.php', 'C_deletebooking.php',
    'deletebarberbyadmin.php', 'deletebookingbybarber.php', 'deletecomplaintbyadmin.php',
    'deletecontact.php', 'deletecustomerbyadmin.php', 'deletenewadmin.php',
    'deleteservicebyadmin.php', 'deletetimeslot.php', 'editbooking.php', 'index2.php',
    'SERVICES_CODE.php', 'showbarbers.php', 'showbarbertocustomer.php',
    'showbookingstatustoadmin.php', 'showbookingstatustobarber.php', 'showcomplaints.php',
    'showcontactstoadmin.php', 'showcustomers.php', 'shownewadmin.php',
    'showservicestoadmin.php', 'showservicestocustomer.php', 'showtimeslot.php',
    'showtimeslotstocustomer.php', 'timeslotcode.php'
);

foreach ($files as $file) {
    if (!file_exists($file)) {
        echo "File $file not found. skipping.\n";
        continue;
    }
    
    $content = file_get_contents($file);
    
    // Add include_once 'config.php'; after session_start or <?php
    if (strpos($content, "include 'config.php'") === false && strpos($content, 'include_once "config.php"') === false && strpos($content, 'include "config.php"') === false) {
        if (preg_match('/session_start\(\);/', $content)) {
            $content = preg_replace('/session_start\(\);/', "session_start();\ninclude_once 'config.php';", $content, 1);
        } else {
            $content = preg_replace('/<\?php/', "<?php\ninclude_once 'config.php';", $content, 1);
        }
    }
    
    // Remove old connection calls
    $content = preg_replace('/mysql_connect\(.*?\);/', '', $content);
    $content = preg_replace('/mysql_select_db\(.*?\);/', '', $content);
    
    // Replace functions
    $replacements = array(
        'mysql_query(' => 'mysqli_query($conn, ',
        'mysql_fetch_assoc(' => 'mysqli_fetch_assoc(',
        'mysql_fetch_array(' => 'mysqli_fetch_array(',
        'MYSQL_BOTH' => 'MYSQLI_BOTH',
        'mysql_num_rows(' => 'mysqli_num_rows(',
        'mysql_error()' => 'mysqli_error($conn)',
        'mysql_real_escape_string(' => 'mysqli_real_escape_string($conn, ',
        'mysql_close(' => 'mysqli_close($conn, '
    );
    
    foreach ($replacements as $old => $new) {
        $content = str_replace($old, $new, $content);
    }

    // Fix some potential double inclusions or syntax errors
    $content = str_replace('mysqli_query($conn, mysqli_query($conn, ', 'mysqli_query($conn, ', $content);
    
    file_put_contents($file, $content);
    echo "Refactored $file\n";
}
?>
