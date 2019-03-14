<?php
include "../config/koneksi.php";
$nosurat	= $_GET['kd'];

$query = mysql_query("DELETE FROM spd WHERE nosurat='$nosurat'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'spd.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'spd.php'</script>";	
}
?>