<?php
mysql_connect("localhost", "root", "");
mysql_select_db("bps");

$sql = mysql_query("SELECT * from spd where nosurat = '$_POST[username]';");
$cocok = mysql_num_rows($sql);

echo $cocok;
?>