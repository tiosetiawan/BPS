<?php
// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];

// Tentukan folder untuk menyimpan file
$folder = "file/$nama_file";

// tanggal sekarang
$tgl_upload = date("Ymd");

// Apabila file berhasil di upload
if (move_uploaded_file($lokasi_file,"$folder")){
  echo "<script>alert('$nama_file  sukses di upload'); window.location = 'ust.php'</script>";
  // Masukkan informasi file ke database
  $konek = mysqli_connect("localhost","root","","bps");

  $query = "INSERT INTO uploadst (nosurat, nip,komitmen, nama_file, deskripsi, tgl_upload)
            VALUES('$_POST[nosurat]','$_POST[nip]','$_POST[komitmen]','$nama_file', '$_POST[deskripsi]', '$tgl_upload')";

  mysqli_query($konek, $query);
}
else{
  echo "File gagal di upload";
}
?>
