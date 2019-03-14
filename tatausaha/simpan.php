<?php 
include '../tampilan/atastata.php';
 // membuat query max untuk kode barang
  $carikode = mysql_query("select max(nip) from spd") or die (mysql_error());
  // menjadikannya array
  $datakode = mysql_fetch_array($carikode);
  // jika $datakode
  if ($datakode) {
   // membuat variabel baru untuk mengambil kode barang mulai dari 1
   $nilaikode = substr($datakode[0], 1);
   // menjadikan $nilaikode ( int )
   $kode = (int) $nilaikode;
   // setiap $kode di tambah 1
   $kode = $kode + 1;
   // hasil untuk menambahkan kode 
   // angka 3 untuk menambahkan tiga angka setelah B dan angka 0 angka yang berada di tengah
   // atau angka sebelum $kode
   $hasilkode = "0".str_pad($kode, 2, "0", STR_PAD_LEFT);
  } else {
   $hasilkode = "00";  
  }

?>

 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Halaman Input Surat Perjalanan Dinas</h2>
            </div>

    <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Input Surat Perjalan Dinas</h2>
                            <ul class="header-dropdown m-r--5">
                            </ul>
                        </div>
                        <div class="body">

                            <form id="form_validation" action="tambahs.php" method="POST">

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nosurat" value="75713.10.03.<?php echo $hasilkode; ?>/SPD/2017" readonly/>
                                        <label class="form-label">No.Surat</label>
                                    </div>
                                </div>
                                
                                 <div class="form-group form-float">
                                    <div class="form-line">
                                        <select class="form-control show-tick" name="komitmen">
                                   
                                        <option >Pilih Pejabat Pembuat Komitmen</option>
                                        <?php
                                          include "../koneksi.php";
                                         $query = "select * from pegawai";
                                         $hasil = mysql_query($query);
                                         while ($qtabel = mysql_fetch_assoc($hasil))
                                             {
                                         echo '<option  value="'.$qtabel['nama'].'">'.$qtabel['nip'].' - '.$qtabel['nama'].' </option>';                
                                          }
                                         ?>

                                     </select>

                                </div>
                                </div>
                                   <div class="form-group form-float">
                                    <div class="form-line">
                                        <select id="id" name="nip" class="form-control show-tick" onchange="changeValue(this.value)">
                                        <option >NIP Pegawai</option>
                                         <?php 
                                          $result = mysql_query("select * from pegawai");    
                                        $jsArray = "var dtPgw = new Array();\n";        
                                     while ($row = mysql_fetch_array($result)) {    
                      echo '<option value="' . $row['nip'] . '">' . $row['nip'] . ' - '.$row['nama'].'</option>';    
                    $jsArray .= "dtPgw['" . $row['nip'] . "'] = {nama:'" . addslashes($row['nama']) . "', gol:'".addslashes($row['golongan'])."', jab:'".addslashes($row['jabatan'])."'};\n";    
    }      
    ?>    
                                     </select>
                                 </div>
                             </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control"  id="nm" required>
                                        <label class="form-label">Pegawai</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control"  id="gol" required>
                                        <label class="form-label">Golongan</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" n id="jab" required>
                                        <label class="form-label">Jabatan</label>
                                    </div>
                                </div>

                                        <div class="form-group form-float">
                                    <div class="form-line">
                                        <select class="form-control show-tick" name="kode">
                                        
                                        <option >Kode Anggaran / Uraian</option>
                                        <?php
                                          include "../koneksi.php";
                                         $query = "select * from anggaran";
                                         $hasil = mysql_query($query);
                                         while ($qtabel = mysql_fetch_assoc($hasil))
                                             {
                                         echo '<option  value="'.$qtabel['kode'].'">'.$qtabel['kode'].' - '.$qtabel['uraian'].' </option>';                
                                          }
                                         ?>

                                     </select>

                                </div>
                                </div>

                               
                                 <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea type="text" class="form-control" name="mp" required></textarea> 
                                        <label class="form-label">Maksud Perjalanan Dinas</label>
                                    </div>
                                </div>
                                 <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="alat" required>
                                        <label class="form-label">Alat Angkutan</label>
                                    </div>
                                </div>
                                    
                                    <!-- <h5>Tempat Berangkat</h5>
                                 <div class="form-group form-float">
                                    <div class="form-line">
                                      
                                         <script type="text/javascript" src="js/ajax_kota.js"></script>
                                        <select class="form-control show-tick" name="prop" id="prop" onchange="ajaxkota(this.value)">
                                        
                                        <option value="">Pilih Provinsi</option>
                                       <?php 
                                       $queryProvinsi=mysql_query("SELECT * FROM lokasi where lokasi_kabupatenkota=0 and lokasi_kecamatan=0 and lokasi_kelurahan=0 order by lokasi_nama");
                                       while ($dataProvinsi=mysql_fetch_array($queryProvinsi)){
                                         echo '<option value="'.$dataProvinsi['lokasi_propinsi'].'">'.$dataProvinsi['lokasi_nama'].'</option>';
                                          }
                                     ?>

                                    </select>
                                    </div>
                                </div>
                                   
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                        <select class="form-control show-tick" name="kota" id="kota1" onchange="ajaxkec1(this.value)">
                                        <option  value="">Pilih Kabupaten</option>
                                     </select>
                                    </div>
                                  </div>-->
                                 
                               
                                     <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="tempatb" />
                                        <label class="form-label">Tempat berangkat</label>
                                    </div>
                                </div>
                                 <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="tempatk" />
                                        <label class="form-label">Tempat Tujuan</label>
                                    </div>
                                </div>


                                 <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="lamap" required>
                                        <label class="form-label">Lama Perjalanan Dinas</label>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                <div class="col-md-6">
                                 <div class="form-group ">
                                    <div class="form-line">
                            <input type="text" class="form-control" name="tb" id="tanggal" placeholder="Tanggal Berangkat">
                                        
                                    </div>
                                </div>
                                </div>
                                 <div class="col-md-6">
                                 <div class="form-group">
                                    <div class="form-line">
                            <input type="text" class="form-control" name="tk" id="tanggal1" placeholder="Tanggal Harus Kembali">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                                  <div class="row clearfix">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="pengikut" placeholder="Pengikut">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Nama">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="tanggal2" placeholder="Tanggal Lahir">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Keterangan">
                                        </div>
                                    </div>
                                </div>
                            </div>

                                  <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="instansi" value="Badan Pusat Statistik" readonly="">
                                        <label class="form-label">Instansi</label>
                                    </div>
                                </div>
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea type="text" class="form-control" name="keterangan" required></textarea> 
                                        <label class="form-label">Keterangan Lain-Lain</label>
                                    </div>
                                </div>

                                <br></br>
								<td><input type="submit" value="Simpan Data"  class="btn btn-primary waves-effect"/>&nbsp &nbsp &nbsp<a href="anggaran.php" class="btn btn-warning waves-effect">Kembali</a></td>

                              
                            </form>
                        </div>
                    </div>
                </div>
            </div>


       </div>
        </div>
    </section>

   <script type="text/javascript">    
    <?php echo $jsArray; ?>  
    function changeValue(nip){  
    document.getElementById('nm').value = dtPgw[nip].nama;  
    document.getElementById('gol').value = dtPgw[nip].gol;
    document.getElementById('jab').value = dtPgw[nip].jab;    
    };  
    </script> 
  <?php 
include '../tampilan/footer.php';
?>