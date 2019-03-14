<?php 
include '../tampilan/ataspimpin.php';
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
                            <br>
                            <form method="post" target="_self"> 
Cari Data :&nbsp;<input name='qcari' class="form-control" type="text" placeholder='Cari Data Berdasarkan Nama '/>
<br>
<input type="submit" class="btn btn-primary waves-effect" value="Cari " /> <a href='ust.php' class='btn btn-sm btn-success' > All Data</a>
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
                                            <th>No. Surat</th>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                             <th>Komitmen</th>
                                            <th>File Surat</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                   
 <?php
require_once('koneksi.php');
$query1="select * from uploadst, pegawai where pegawai.nip=uploadst.nip";


if(isset($_POST['qcari'])){
    $qcari=$_POST['qcari'];
    $query1="SELECT * from uploadst, pegawai where pegawai.nip=uploadst.nip
    and nama like '%$qcari%'
    or nosurat like '%$qcari%'  ";
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
                <td><?php       echo $rows -> nama;?></td>
                <td><?php       echo $rows -> komitmen;?></td>
                <td><?php       echo $rows -> nama_file;?></td>
                <td>
          
                                        
                                           
                        <td>
                        <a class="btn btn-primary waves-effect" href="../tatausaha/downloadst.php?file=\<?php echo $data['nama_file'];?>"><i class="fa fa-wrench"></i> Download</a>
                         
                        </td>
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
