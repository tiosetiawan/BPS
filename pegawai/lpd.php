<?php 
include '../tampilan/ataspegawai.php';
?>

 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Halaman Laporan Perjalanan Dinas</h2>
            </div>

    <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Input Laporan Perjalanan Dinas</h2>
                            <ul class="header-dropdown m-r--5">
                            </ul>
                        </div>
                           <?php
                            $username=$_SESSION['username'];
                    $query = mysql_query("SELECT * FROM pegawai WHERE username='$username'");
                    $data  = mysql_fetch_array($query);
                        ?>
                        <div class="body">
                            <form id="form_validation" action="tambahl.php" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nip" value="<?php echo $data['nip'];?> "  readonly>
                                        <label class="form-label">NIP</label>
                                    </div>
                                </div>
                               <div class="form-group form-float">
                                    <div class="form-line">
                                        <select class="form-control show-tick" name="nosurat">
                                        
                                        <option >Pilih No. surat</option>
                                        <?php
                                          include "../koneksi.php";
                                         $query = "select pegawai.username,  spd.nosurat from pegawai, spd WHERE pegawai.nip=spd.nip and username='$username' ";
                                         $hasil = mysql_query($query);
                                         while ($qtabel = mysql_fetch_assoc($hasil))
                                             {
                                         echo '<option  value="'.$qtabel['nosurat'].'">'.$qtabel['nosurat'].'  </option>';                
                                          }
                                         ?>

                                     </select>

                                </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="tempatt" required>
                                        <label class="form-label">Tujuan Kab/Kota</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="tanggalb" required>
                                        <label class="form-label">Tanggal Tugas</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="tanggalk" required>
                                        <label class="form-label">Sampai Dengan</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="perihal" required>
                                        <label class="form-label">Perihal</label>
                                    </div>
                                </div>
                                 <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea class="form-control" name="laporan" required></textarea> 
                                        <label class="form-label">Laporan Kegiatan</label>
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


  <?php 
include '../tampilan/footer.php';
?>