<?php
include "../config/koneksi.php";
$nip            	= $_POST['nip'];
$nama           	= $_POST['nama'];
$jk 		    	= $_POST['jk'];
$ttl		 	    = $_POST['ttl'];
$gol 	        	= $_POST['golongan'];
$jb 			    = $_POST['jabatan'];
$pd	       			= $_POST['pd'];
$user	       		= $_POST['username'];
$pass	       		= $_POST['password'];
$hak	       		= $_POST['hak_akses'];
$query = mysql_query("UPDATE pegawai SET nama='$nama',jk='$jk', ttl='$ttl', golongan='$gol', jabatan='$jb', pd='$pd', username='$user', password='$pass', hak_akses='$hak' 
 WHERE nip='$nip'");
if ($query){
   echo "<script>alert('Data pegawai Berhasil diubah!'); window.location = 'pegawai.php'</script>"; 
} else {
	echo "<script>alert('Data pegawai Gagal diubah!'); window.location = 'editp.php?hal=edit&kd=$NIP</script>";
    }
?>