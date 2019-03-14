<?php
include "../config/koneksi.php";
$nosurat	= $_GET['kd'];

$query = mysql_query("DELETE FROM uploadst WHERE nosurat='$nosurat'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'ust.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'ust.php'</script>";	
}
?>