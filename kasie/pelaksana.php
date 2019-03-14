<?php 
include '../tampilan/atasseksi.php';
?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Halaman Data Pelaksana Perjalanan Dinas</h2>
            </div>


            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Pelaksana Perjalanan Dinas
                            </h2>
                            <br>
                              <form method="post" target="_self"> 
Cari Data :&nbsp;
<br>
<input name='qcari' class="form-control" type="text" placeholder='Cari Data Berdasarkan Nama Komitmen Anda'/>
<br>
<input type="submit" class="btn btn-primary waves-effect" value="Cari " /> <a href='pelaksana.php' class='btn btn-sm btn-success' > All Data</a>
</form>
                            <ul class="header-dropdown m-r--5">
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIP</th>
                                            <th>No.Surat</th>
                                            <th>Nama Komitmen</th>
                                            <th>Pegawai</th>
                                            <th>Tanggal Berangkat</th>
                                            <th>Tanggal Kembali</th>
                                            <th>Uraian</th>
                                            <th>Maksud Perjalanan</th>
                                            <th>Biaya</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                 

                        <?php
require_once('../config/koneksi.php');
$query1="select spd.nosurat, spd.komitmen, spd.nip,spd.lamap,spd.namakomitmen, pegawai.nama, spd.tb, spd.tk, anggaran.uraian, spd.mp ,anggaran.hargasat from pegawai, anggaran, spd where pegawai.nip=spd.nip and anggaran.kode=spd.kode ";


if(isset($_POST['qcari'])){
    $qcari=$_POST['qcari'];
    $query1="SELECT spd.nosurat, spd.komitmen, spd.nip,spd.lamap,spd.namakomitmen, pegawai.nama, spd.tb, spd.tk, anggaran.uraian, spd.mp ,anggaran.hargasat from pegawai, anggaran, spd where pegawai.nip=spd.nip and anggaran.kode=spd.kode
    and namakomitmen like '%$qcari%'
      ";
}

$result=mysql_query($query1) or die(mysql_error());
$no=1; //penomoran 
while($rows=mysql_fetch_object($result)){
            ?>
            <tr>
                <td><?php echo $no
                ?></td>
                <td><?php       echo $rows -> nosurat;?></td>
                <td><?php       echo $rows -> nip;?></td>
                <td><?php       echo $rows -> namakomitmen;?></td>
                <td><?php       echo $rows -> nama;?></td>
                <td><?php       echo $rows -> tb;?></td>
                <td><?php       echo $rows -> tk;?></td>
                <td><?php       echo $rows -> uraian;?></td>
                <td><?php       echo $rows -> mp;?></td>
                 <td>Rp.<?php echo number_format ($rows -> hargasat * $rows -> lamap,2,",",".");?></td> 
                   <td><a  class="btn btn-primary waves-effect" href="pencapaian.php?hal=pencapaian&kd=<?php echo $rows -> nip;?>"><i class="fa fa-edit"></i>Pencapaian</a>
            </tr>
            <?php
$no++;
}?>
                                     
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
