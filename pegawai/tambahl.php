<?php
include "../config/koneksi.php";
$nip          = $_POST['nip'];
$nosurat      = $_POST['nosurat'];
$tt 		    	= $_POST['tempatt'];
$tb			 	    = $_POST['tanggalb'];
$tk 	        = $_POST['tanggalk'];
$perihal 	    = $_POST['perihal'];
$laporan 	    = $_POST['laporan'];


$query = mysql_query("INSERT INTO lpd (nip, nosurat, tempatt, tanggalb, tanggalk,perihal,laporan) VALUES ('$nip', '$nosurat', '$tt', '$tb', '$tk', '$perihal', '$laporan')");
if ($query){
	echo "<script>alert('Laporan Berhasil dimasukan!'); window.location = 'lpd.php'</script>";
} else {
	echo "<script>alert('laporan Gagal dimasukan!'); window.location = 'lpd.php'</script>";
}
?>
