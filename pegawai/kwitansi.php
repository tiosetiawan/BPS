<?php 
include '../tampilan/ataspegawai.php';
?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Halaman Data Kwitansi</h2>
            </div>


            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Kwitansi
                            </h2>
                            <ul class="header-dropdown m-r--5">
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No.Surat</th>
                                            <th>Komitmen</th>
                                            <th>Pegawai</th>
                                            <th>Alat Angkutan</th>
                                            <th>Uraian</th>
                                            <th>Lama Perjalanan</th>
                                            <th>Maksud Perjalanan</th>
                                            <th>Biaya</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                     <?php
                                      $username=$_SESSION['username'];
                   			 $tampil=mysql_query("SELECT spd.nosurat, spd.komitmen,  pegawai.nama, spd.alat, anggaran.uraian, spd.lamap,spd.mp, anggaran.hargasat from pegawai, anggaran, spd where pegawai.nip=spd.nip and anggaran.kode=spd.kode and username='$username'");
                   			      while($data=mysql_fetch_array($tampil)){
                    		      	?>
                                     <tbody>
                                        <tr>
                                            <td><?php echo $data['nosurat']; ?></td>
                                            <td><?php echo $data['komitmen']; ?></td>
                                            <td><?php echo $data['nama']; ?></td>
                                             <td><?php echo $data['alat']; ?></td>
                                            <td><?php echo $data['uraian']; ?></td>
                                            <td><?php echo $data['lamap']; ?></td>
                                            <td><?php echo $data['mp']; ?></td>
                                            <td>Rp.<?php echo number_format ($data['hargasat'] * $data['lamap'],2,",",".");?></td>
                                            

                         <td><a  class="btn btn-primary waves-effect" href="../tatausaha/printk.php?hal=printk&kd=<?php echo $data['nosurat'];?>"><i class="fa fa-edit"></i>Print</a>
                        </td>
                                        </tr>
                                            <?php   
             								 }
            							  ?>
                                      </tbody>

                                </table>
                            </div>
                            <div class="button-demo">
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
