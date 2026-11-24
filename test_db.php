<?php
$conn = @mysql_connect('localhost', 'root', '');
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
$db_selected = @mysql_select_db('salondemo1', $conn);
if (!$db_selected) {
    die ('Can\'t use salondemo1 : ' . mysql_error());
}
echo 'Database salondemo1 selected';
mysql_close($conn);
?>
