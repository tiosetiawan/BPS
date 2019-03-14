<?php 
include '../tampilan/atastata.php';
?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Halaman Data Anggaran</h2>
            </div>

 <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Anggaran
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Kode Anggaran</th>
                                            <th>Uraian</th>
                                            <th>Volume</th>
                                            <th>Satuan</th>
                                            <th>Harga Satuan</th>
                                            <th>Jumlah</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                      <?php
                                     $tampil=mysql_query("SELECT * from anggaran");
                                     while($data=mysql_fetch_array($tampil)){
                                     ?>
                                     <tbody>
                                        <tr>
                                            <td><?php echo $data['kode']; ?></td>
                                            <td><?php echo $data['uraian']; ?></td>
                                            <td><?php echo $data['volume'] ;?></td>
                                            <td><?php echo $data['satuan']; ?></td>
                                    <td>Rp.<?php echo number_format ($data['hargasat'],2,",",".");?></td>
                                    <td>Rp.<?php echo number_format ($data['jumlah']  ,2,",",".");?></td>
                                           
                        <td><a  class="btn btn-primary waves-effect" href="edita.php?hal=edit&kd=<?php echo $data['kode'];?>"><i class="fa fa-edit"></i> Edit</a>

                        <a class="btn btn-danger waves-effect" href="hapusa.php?hal=hapus&kd=<?php echo $data['kode'];?>"><i class="fa fa-wrench"></i> Hapus</a></td>
                                        </tr>
                                            <?php   
                                             }
                                          ?>
                                      </tbody>
                                </table>
                            </div>
                            <div class="button-demo">
                        <a href="inputa.php" type="button" class="btn btn-info waves-effect">Input Data Anggaran</a>   
                      <a href="index.php" type="button" class="btn btn-warning waves-effect">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Kuota Anggaran Yang Telah Terpakai
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Kode Anggaran</th>
                                            <th>Uraian</th>
                                            <th>Volume</th>
                                            <th>Satuan</th>
                                            <th>Harga Satuan</th>
                                            <th>Jumlah</th>
                                           
                                           
                                        </tr>
                                    </thead>
                                      <?php
                                     $tampil=mysql_query("SELECT anggaran.kode, anggaran.uraian, anggaran.volume, SUM(spd.lamap) AS hari, spd.lamap, anggaran.satuan, anggaran.hargasat, anggaran.jumlah from anggaran, spd where spd.kode=anggaran.kode GROUP BY anggaran.kode, spd.kode");
                                     while($data=mysql_fetch_array($tampil)){
                                     ?>
                                     <tbody>
                                        <tr>
                                            <td><?php echo $data['kode']; ?></td>
                                            <td><?php echo $data['uraian']; ?></td>
                                            <td><?php echo ($data['volume'] - $data['hari']);?></td>
                                            <td><?php echo $data['satuan']; ?></td>
                                    <td>Rp.<?php echo number_format ($data['hargasat'],2,",",".");?></td>
                                    <td>Rp.<?php echo number_format ($data['jumlah'] - $data['hargasat'] * $data['hari']  ,2,",",".");?></td>
                                           
                       
                                        </tr>
                                            <?php   
                                             }
                                          ?>
                                      </tbody>
                                </table>
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
