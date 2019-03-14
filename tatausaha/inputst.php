<?php 
include '../tampilan/atastata.php';
?>

 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Halaman Upload Surat Tugas </h2>
            </div>

    <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Upload Data Surat Tugas</h2>
                            <ul class="header-dropdown m-r--5">
                            </ul>
                        </div>
                        <div class="body">
                            <form id="form_validation" enctype="multipart/form-data" action="hasil_upload.php" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control"  name="nosurat" value=" /SPD/2018" required>
                                        <label class="form-label">No. Surat Tugas</label>
                                    </div>

                                </div>
                                Data Pelaksanan
                               <div class="form-group form-float">
                                    <div class="form-line">
                                        <select id="id" name="nip" class="form-control show-tick" onchange="changeValue(this.value)">
                                        <option >NIP Pegawai</option>
                                         <?php 
                                          $result = mysql_query("select * from pegawai");    
                                        $jsArray = "var dtPgw = new Array();\n";        
                                     while ($row = mysql_fetch_array($result)) {    
                      echo '<option value="' . $row['nip'] . '">' . $row['nip'] . ' - '.$row['nama'].'</option>';    
                    $jsArray .= "dtPgw['" . $row['nip'] . "'] = {nama:'" . addslashes($row['nama']) . "', gol:'".addslashes($row['golongan'])."', jab:'".addslashes($row['jabatan'])."'};\n";    
                     }      
                     ?>    
                                     </select>
                                 </div>
                             </div>
                              
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        File Upload
                                        <input type="file" class="form-control" name="fupload" >
                       
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea type="text" class="form-control" name="deskripsi" required></textarea>
                                        <label class="form-label">Deskripsi</label>
                                    </div>
                                </div>
                                
                                <br></br>
								<td><input type="submit" value=Upload  class="btn btn-primary waves-effect"/>&nbsp &nbsp &nbsp<a href="ust.php" class="btn btn-warning waves-effect">Kembali</a></td>

                              
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