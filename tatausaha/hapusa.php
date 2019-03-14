<?php
include "../config/koneksi.php";
$kode	= $_GET['kd'];

$query = mysql_query("DELETE FROM anggaran WHERE kode='$kode'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'anggaran.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'anggaran.php'</script>";	
}
?>