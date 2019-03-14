<?php
mysql_connect("localhost", "root", "");
mysql_select_db("bps");

$sql = mysql_query("SELECT kode from spd where spd.kode=anggaran.kode and kode = '$_POST[user]';");
$cocok = mysql_num_rows($sql);

echo $cocok;
?>