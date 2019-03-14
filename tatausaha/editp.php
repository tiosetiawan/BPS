<?php
include '../tampilan/atastata.php';
?>

 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Halaman Edit Data Pegawai</h2>
            </div>

    <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Edit Data Pegawai</h2>
                            <ul class="header-dropdown m-r--5">
                            </ul>
                        </div>
                          <?php
                    $query = mysql_query("SELECT * FROM pegawai WHERE nip='$_GET[kd]'");
                    $data  = mysql_fetch_array($query);
                        ?>
                        <div class="body">
                            <form id="form_validation" action="updatep.php" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nip" value="<?php echo $data['nip'];?>" required>
                                        <label class="form-label" >Nip</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'];?>" required>
                                        <label class="form-label">Nama</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="jk" value="<?php echo $data['jk'];?>" required>
                                        <label class="form-label">Jenis Kelamin</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="ttl" value="<?php echo $data['ttl'];?>" required>
                                        <label class="form-label">Tempat/Tanggal Lahir</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="golongan" value="<?php echo $data['golongan'];?>" required>
                                        <label class="form-label">Golongan</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="jabatan" value="<?php echo $data['jabatan'];?>" required>
                                        <label class="form-label">Jabatan</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="pd" value="<?php echo $data['pd'];?>" required>
                                        <label class="form-label">Pendidikan Terakhir</label>
                                    </div>
                                </div>
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="username" value="<?php echo $data['username'];?>" required>
                                        <label class="form-label">Username</label>
                                    </div>
                                </div>
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="password" value="<?php echo $data['password'];?>" required>
                                        <label class="form-label">Password</label>
                                    </div>
                                </div>
                                   <div class="form-group form-float">
                                    <div class="form-line">
                                        <select class="form-control show-tick"  name="hak_akses">
                                        <option value="<?php echo $data['hak_akses'];?>"> <?php echo $data['hak_akses'];?></option>
                                        <option value="tatausaha">tatausaha </option>
                                        <option value="pimpinan">pimpinan </option>
                                        <option value="kasie">kasie </option>
                                        <option value="pegawai">pegawai </option>

                                     </select>

                                </div>
                                </div>


                                <br></br>
								<td><input type="submit" value="Simpan Data"  class="btn btn-primary waves-effect"/>&nbsp &nbsp &nbsp<a href="pegawai.php" class="btn btn-warning waves-effect">Kembali</a></td>


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
