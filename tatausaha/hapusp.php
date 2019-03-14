<?php
include "../config/koneksi.php";
$nip	= $_GET['kd'];

$query = mysql_query("DELETE FROM pegawai WHERE nip='$nip'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'pegawai.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'pegawai.php'</script>";	
}
?>