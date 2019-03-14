<?php
include "../config/koneksi.php";
$kode            	= $_POST['kode'];
$uraian           	= $_POST['uraian'];
$vol 		    	= $_POST['volume'];
$satuan		 	    = $_POST['satuan'];
$sat 	        	= $_POST['hargasat'];
$jum 	        	= $_POST['jumlah'];
$query = mysql_query("UPDATE anggaran SET uraian='$uraian',volume='$vol', satuan='$satuan', hargasat='$sat', jumlah='$jum'
 WHERE kode='$kode'");
if ($query){
   echo "<script>alert('Data Anggaran Berhasil diubah!'); window.location = 'anggaran.php'</script>"; 
} else {
	echo "<script>alert('Data Anggaran Gagal diubah!'); window.location = 'edita.php?hal=edit&kd=$NIP</script>";
    }
?>