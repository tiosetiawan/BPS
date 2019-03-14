<?php
		$c=mysql_connect('localhost','root','') or die(mysql_error()); // koneksi ke server database
		mysql_select_db('bps',$c)or die(mysql_error()); // pilih database
		
		$sql="select * from spd where nosurat='$_POST[parent_id]'";
		$response = array(); // siapkan respon yang nanti akan di convert menjadi JSON
		$query = mysql_query($sql);		
		if($query){
			if(mysql_num_rows($query) > 0){
				while($row = mysql_fetch_object($query)){
					// masukan setiap baris data ke variable respon
					$response[] = $row; 
				}
			}else{
				$response['error'] = 'Data kosong'; // memberi respon ketika data kosong
			}
		}else{
			$response['error'] = mysql_error(); // memberi respon ketika query salah
		}
		die(json_encode($response)); // convert variable respon menjadi JSON, lalu tampilkan 
	
?>
