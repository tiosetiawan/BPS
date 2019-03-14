<?php 
include '../tampilan/atasseksi.php';
?>

   
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Halaman Utama</h2>
            </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">email</i>
                        </div>
                        <div class="content">
                            <div class="text">Data Perjalanan Dinas</div>
                            <h4> <?php
                        $username=$_SESSION['username'];    
                        $sql = "SELECT * from spd ";
                        $query = mysql_query($sql);
                        $count = mysql_num_rows($query);
                        echo " $count <br/>";
                        ?> </h4>
                        <br>
                            <div class="number count-to" data-from="0" data-to="" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">Data Surat Tugas</div>
                            <h4><?php
                           
                            $sql = "SELECT komitmen from  uploadst where  komitmen in ('Lely Oktavianti, SST')  ";
                            $query = mysql_query($sql);
                            $count = mysql_num_rows($query);
                            echo " $count <br/>";
                        ?> </h4>
                        <br>
                            <div class="number count-to" data-from="0" data-to="" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>

 <link rel="stylesheet" href="assets/css/bootstrap.css">          
<script src="assets/js/jquery-1.10.1.min.js"></script>
    <script src="assets/js/highcharts.js"></script>
<script>
        var chart1; 
        $(document).ready(function() {
              chart1 = new Highcharts.Chart({
                 chart: {
                    renderTo: 'mygraph',
                    type: 'column'
                 },   
                 title: {
                    text: 'Statistik Perjalanan Dinas '
                 },
                 xAxis: {
                    categories: ['Tanggal']
                 },
                 yAxis: {
                    title: {
                       text: 'Total Perjalanan Dinas'
                    }
                 },
                      series:             
                    [
                        <?php 
                        include "connection.php";
                        $sql   = "SELECT distinct tb FROM spd ";
                        $query = mysqli_query( $con, $sql )  or die(mysqli_error());
                        while( $temp = mysqli_fetch_array( $query ) )
                        {
                            $trendbrowser=$temp['tb'];                     
                            $sql_total   = "SELECT count(nama) as no from spd, pegawai where pegawai.nip=spd.nip and tb='$trendbrowser' ";        
                            $query_total = mysqli_query($con,$sql_total ) or die(mysql_error());
                            while( $data = mysqli_fetch_array( $query_total ) )
                            {
                                $total = $data['no'];                 
                            }             
                        ?>
                            {
                              name: '<?php echo $trendbrowser; ?>',
                              data: [<?php echo $total; ?>]
                            },
                            <?php 
                        }   ?>
                        ]
              });
           });  
    </script>
 <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Statistik Perjalanan Dinas
                            </h2>
<!-- fungsi yang di tampilkan dibrowser  -->
<div class="container" style="margin-top:20px">
    <div class="col-md-7">
        <div class="panel panel-primary">
            <div class="panel-heading">Grafik Pencapaian Perjalanan Dinas Pada Tahun 2018</div>
                <div class="panel-body">
                    <div id ="mygraph"></div>
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
