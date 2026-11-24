<?php
include 'config.php';

echo "Testing connection...\n";
if ($conn) {
    echo "Connected successfully to " . $db_name . "\n";
    
    $query = "SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = '$db_name'";
    $res = mysqli_query($conn, $query);
    
    if ($res) {
        echo "Tables in database:\n";
        while ($row = mysqli_fetch_assoc($res)) {
            echo "- " . $row['TABLE_NAME'] . "\n";
        }
    } else {
        echo "Error fetching tables: " . mysqli_error($conn) . "\n";
    }
} else {
    echo "Connection failed.\n";
}
?>
