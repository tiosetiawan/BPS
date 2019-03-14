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

$query = mysql_query("INSERT INTO pegawai (nip, nama, jk, ttl, golongan, jabatan, pd, username, password, hak_akses) VALUES ('$nip', '$nama', '$jk', '$ttl', '$gol', '$jb', '$pd', '$user', '$pass', '$hak')");
if ($query){
	echo "<script>alert('Data Pegawai Berhasil dimasukan!'); window.location = 'pegawai.php'</script>";	
} else {
	echo "<script>alert('Data Pegawai Gagal dimasukan!'); window.location = 'inputp.php'</script>";	
}
?>