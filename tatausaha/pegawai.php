<?php 
include '../tampilan/atastata.php';
?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Halaman Data Pegawai</h2>
            </div>


            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Pegawai
                            </h2>
                            <ul class="header-dropdown m-r--5">
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat/Tanggal Lahir</th>
                                            <th>Golongan</th>
                                            <th>Jabatan</th>
                                            <th>Pendidikan Terakhir</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                     <?php
                   			 $tampil=mysql_query("SELECT * from pegawai order by nip desc");
                   			 while($data=mysql_fetch_array($tampil)){
                    			?>
                                     <tbody>
                                        <tr>
                                            <td><?php echo $data['nip']; ?></td>
                                            <td><?php echo $data['nama']; ?></td>
                                            <td><?php echo $data['jk']; ?></td>
                                            <td><?php echo $data['ttl']; ?></td>
                                            <td><?php echo $data['golongan']; ?></td>
                                            <td><?php echo $data['jabatan']; ?></td>
                                            <td><?php echo $data['pd']; ?></td>
                        <td><a  class="btn btn-primary waves-effect" href="editp.php?hal=edit&kd=<?php echo $data['nip'];?>"><i class="fa fa-edit"></i> Edit</a>

                        <a class="btn btn-danger waves-effect" href="hapusp.php?hal=hapus&kd=<?php echo $data['nip'];?>"><i class="fa fa-wrench"></i> Hapus</a></td>
                                        </tr>
                                            <?php   
             								 }
            							  ?>
                                      </tbody>

                                </table>
                            </div>
                            <div class="button-demo">
                      <a href="inputp.php" type="button" class="btn btn-info waves-effect">Input Data Pegawai</a>   
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
