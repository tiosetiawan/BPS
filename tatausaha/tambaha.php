<?php
include "../config/koneksi.php";
$kode            	= $_POST['kode'];
$uraian           	= $_POST['uraian'];
$vol 		    	= $_POST['volume'];
$satuan		 	    = $_POST['satuan'];
$sat 	        	= $_POST['hargasat'];
$jum 	        	= $_POST['jumlah'];



$query = mysql_query("INSERT INTO anggaran (kode, uraian, volume, satuan, hargasat,jumlah) VALUES ('$kode', '$uraian', '$vol', '$satuan', '$sat', '$jum')");
if ($query){
	echo "<script>alert('Data Anggran Berhasil dimasukan!'); window.location = 'anggaran.php'</script>";	
} else {
	echo "<script>alert('Data Anggaran Gagal dimasukan!'); window.location = 'inputa.php'</script>";	
}
?>