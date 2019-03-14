<?php 
include '../tampilan/atasseksi.php';
?>
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
                    categories: ['Nama Pegawai']
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
                        $sql   = "SELECT distinct nama FROM spd, pegawai where pegawai.nip=spd.nip and spd.nip='$_GET[kd]'";
                        $query = mysqli_query( $con, $sql )  or die(mysqli_error());
                        while( $temp = mysqli_fetch_array( $query ) )
                        {
                            $trendbrowser=$temp['nama'];                     
                            $sql_total   = "SELECT count(nosurat) as no from spd, pegawai where pegawai.nip=spd.nip and nama='$trendbrowser' and spd.nip='$_GET[kd]'";        
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
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Halaman Data Statistik Perjalanan Dinas</h2>
            </div>


            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Statistik Perjalanan Dinas
                            </h2>
                           
                            

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
