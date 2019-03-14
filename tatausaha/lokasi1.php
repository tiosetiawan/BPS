<?php 
include 'koneksi.php';
?>
<!doctype html>
<html>
	<head>
		<title>Data Kecamatan</title>
		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	</head>
	<body>
		<table>
			<tr>
			<td>Pilih Provinsi</td>
			<td>:</td>
			<td>
				<script type="text/javascript" src="js/ajax_kota.js"></script>
				<select name="prop" id="prop" onchange="ajaxkota(this.value)">
					<option value="">Pilih Provinsi</option>
					<?php 
					$queryProvinsi=mysql_query("SELECT * FROM lokasi where lokasi_kabupatenkota=0 and lokasi_kecamatan=0 and lokasi_kelurahan=0 order by lokasi_nama");
					while ($dataProvinsi=mysql_fetch_array($queryProvinsi)){
						echo '<option value="'.$dataProvinsi['lokasi_propinsi'].'">'.$dataProvinsi['lokasi_nama'].'</option>';
					}
					?>
				<select>
			</td>
		</tr>
		<tr>
			<td>Pilih Kota/Kab</td>
			<td>:</td>
			<td>
				<select name="kota" id="kota" onchange="ajaxkec(this.value)">
					<option value="">Pilih Kota</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Pilih Kec</td>
			<td>:</td>
			<td>
				<select name="kec" id="kec" onchange="ajaxkel(this.value)">
					<option value="">Pilih Kecamatan</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Pilih Kelurahan/Desa</td>
			<td>:</td>
			<td>
				<select name="kel" id="kel">
					<option value="">Pilih Kelurahan/Desa</option>
				</select>
			</td>
		</tr>
		</table>
	</body>
</html>