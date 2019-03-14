<?php 
include '../tampilan/atastata.php';
?>

 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Halaman Edit Data Anggaran</h2>
            </div>

    <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Edit Data Anggaran</h2>
                            <ul class="header-dropdown m-r--5">
                            </ul>
                        </div>
                          <?php
                    $query = mysql_query("SELECT * FROM anggaran WHERE kode='$_GET[kd]'");
                    $data  = mysql_fetch_array($query);
                        ?>
                        <div class="body">
                            <form id="form_validation" action="updatea.php" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="kode"value="<?php echo $data['kode'];?>" required>
                                        <label class="form-label" >Kode</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="uraian" value="<?php echo $data['uraian'];?>" required>
                                        <label class="form-label">Uraian</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="volume" value="<?php echo $data['volume'];?>" required>
                                        <label class="form-label">Volume</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="satuan" value="<?php echo $data['satuan'];?>" required>
                                        <label class="form-label">Satuan</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="hargasat" value="<?php echo $data['hargasat'];?>" required>
                                        <label class="form-label">Harga Satuan</label>
                                    </div>
                                </div>
                                 <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="jumlah" value="<?php echo $data['jumlah'];?>" required>
                                        <label class="form-label">Jumlah</label>
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