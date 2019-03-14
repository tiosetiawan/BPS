<?php
include "../config/koneksi.php";
$nos            	= $_POST['nosurat'];
$komitmen           = $_POST['komitmen'];
$nipk		 	    = $_POST['namakomitmen'];
$nip 		    	= $_POST['nip'];
$kode		 	    = $_POST['kode'];
$tbiaya		 	    = $_POST['tbiaya'];
$mp 	        	= $_POST['mp'];
$alat 			    = $_POST['alat'];
$ttb	       		= $_POST['tempatb'];
$ttk	       		= $_POST['tempatt'];
$lp	       			= $_POST['lamap'];
$tb	       			= $_POST['tb'];
$tk	       			= $_POST['tk'];
$pengikut	       	= $_POST['pengikut'];
$pengikutn	       	= $_POST['pengikutn'];
$pengikutt	       	= $_POST['pengikutt'];
$pengikutk	       	= $_POST['pengikutk'];
$ins	       		= $_POST['instansi'];
$ktr	       		= $_POST['keterangan'];

$query = mysql_query("INSERT INTO spd (nosurat, komitmen, namakomitmen, nip, kode, tbiaya,  mp, alat, tempatb, tempatt, lamap, tb, tk, pengikut, pengikutn, pengikutt, pengikutk, instansi,keterangan) VALUES ('$nos', '$komitmen','$nipk', '$nip', '$kode','$tbiaya', '$mp', '$alat','$ttb', '$ttk', '$lp', '$tb', '$tk', '$pengikut','$pengikutn','$pengikutt','$pengikutk', '$ins', '$ktr')");
if ($query){
	echo "<script>alert('Data SPD Berhasil dimasukan!'); window.location = 'inputspd.php'</script>";	
} else {
	echo "<script>alert('Data SPD Gagal dimasukan!'); window.location = ''</script>";	
}
?>