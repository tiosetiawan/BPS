<?php 
include '../tampilan/atastata.php';
?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Halaman Data Surat tugas</h2>
            </div>


            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Data Surat Tugas 
                            </h2>
                            <ul class="header-dropdown m-r--5">
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No. Surat</th>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>File Surat</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                      <?php
                                     $tampil=mysql_query("SELECT uploadst.nosurat, uploadst.nip, pegawai.nama, uploadst.nama_file from uploadst, pegawai where pegawai.nip=uploadst.nip");
                                     while($data=mysql_fetch_array($tampil)){
                                     ?>
                                     <tbody>
                                        <tr>
                                            <td><?php echo $data['nosurat']; ?></td>
                                            <td><?php echo $data['nip']; ?></td>
                                            <td><?php echo $data['nama']; ?></td>
                                            <td><?php echo $data['nama_file']; ?></td>

                                        
                                           
                        <td>
                        <a class="btn btn-primary waves-effect" href="downloadst.php?file=\<?php echo $data['nama_file'];?>"><i class="fa fa-wrench"></i> Download</a>
                          <a class="btn btn-danger waves-effect" href="hapust.php?hal=hapus&kd=<?php echo $data['nosurat'];?>"><i class="fa fa-wrench"></i> Hapus</a></td>
                        </td>
                                        </tr>
                                            <?php   
                                             }
                                          ?>
                                      </tbody>
                                </table>
                            </div>
                            <div class="button-demo">
                        <a href="inputst.php" type="button" class="btn btn-info waves-effect">Upload Surat Tugas</a>   
                      <a href="index.php" type="button" class="btn btn-warning waves-effect">Kembali</a>
                            </div>
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
