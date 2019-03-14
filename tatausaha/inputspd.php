<?php 
include '../tampilan/atastata.php';
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
                                      No.Surat
                                        <input type="text" class="form-control" name="nosurat"  id="username"  value="/SPD/2018" />
                                       
                                    </div>
                                    <span id="pesan"></span>
                                </div>
                                
                                 <div class="form-group form-float">
                                    <div class="form-line">

                                     <select id="id" name="komitmen" class="form-control show-tick" onchange="changeValue(this.value)">
                                        <option >NIP Penjabat Pembuat Komitmen</option>
                                         <?php 
                                          $result = mysql_query("select * from pegawai where hak_akses='kasie'");    
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
                                      Nama Pejabat Pembuat Komitmen
                                        <input type="text" class="form-control" name="namakomitmen"  id="nm" required>
                                        <label class="form-label"></label>
                                    </div>
                                </div>


                                   <div class="form-group form-float">
                                    <div class="form-line">
                                        <select  name="nip" class="form-control show-tick" onchange="changeValue(this.value)">
                                        <option >NIP Pegawai</option>
                                         <?php 
                                          $result = mysql_query("select * from pegawai");    
                                              
                                     while ($row = mysql_fetch_array($result)) {    
                      echo '<option value="' . $row['nip'] . '">' . $row['nip'] . ' - '.$row['nama'].'</option>';    
    }      
    ?>    
                                     </select>
                                 </div>
                             </div>
                               <!-- <div class="form-group form-float">
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
                                        <input type="text" class="form-control"  id="jab" required>
                                        <label class="form-label">Jabatan</label>
                                    </div>
                                </div>-->

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
                                        <input type="text" class="form-control" name="tbiaya" required>
                                        <label class="form-label">Tingkat Biaya Perjalanan Dinas</label>
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
                                        <input type="text" class="form-control" name="tempatt" />
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
                                            <input type="text" class="form-control" name="pengikutn" placeholder="Nama">
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="tanggal1" name="pengikutt" placeholder="Tanggal Lahir">
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="pengikutk" placeholder="Keterangan">
                                        </div>
                                    </div>
                                </div>
                            </div>
                              <!--  <div class="col-md-3">
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
                            </div>-->

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
								<td><input type="submit" value="Simpan Data"  class="btn btn-primary waves-effect"/>&nbsp &nbsp &nbsp<a href="spd.php" class="btn btn-warning waves-effect">Kembali</a></td>

                              
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