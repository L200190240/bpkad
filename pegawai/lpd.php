<?php 
include '../tampilan/ataspegawai.php';
?>

 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Halaman Input Laporan Perjalanan Dinas</h2>
            </div>

    <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Input Laporan Perjalanan Dinas</h2>
                            <ul class="header-dropdown m-r--5">
                            </ul>
                        </div>
                           <?php
                            $username=$_SESSION['username'];
                            $query = mysqli_query($conn, "SELECT * FROM pegawai WHERE username='$username'");
                            $data  = mysqli_fetch_array($query);
                           ?>
                        <div class="body">
                            <form id="form_validation" action="tambahl.php" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <select  name="nip" class="form-control show-tick" onchange="changeValue(this.value)">
                                        <option >Pegawai yang diperintah</option>
                                         <?php 
                                          $result = mysqli_query($conn, "select * from pegawai");    
                                          while ($row = mysqli_fetch_array($result)) {
                                            echo '<option value="' . $row['nip'] . '">'.$row['nip'].' -'.$row['nama'].'</option>';
                                         }      
                                         ?>    
                                      </select>
                                     </div>
                                    </div>
                                    <div class="form-group form-float">
                                    <div class="form-line">
                                      No.Surat
                                      <input type="text" class="form-control" name="nosurat"  id="username" placeholder="SPD/Tahun/">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <select class="form-control show-tick" name="pilihan_kota" id="pilihan_" value="dalam" required>
                                        <option>---pilih jenis perjalanan---</option>
                                        <option>Dalam Kota</option>
                                        <option>Luar Kota</option>
                                        </select>
                                </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="tempatt" required>
                                        <label class="form-label">Tujuan Kab/Kota</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        Tanggal Tugas
                                        <input type="date" class="form-control" name="tanggalb" required>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        Sampai Dengan
                                        <input type="date" class="form-control" name="tanggalk" required>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="perihal" required>
                                        <label class="form-label">Perihal</label>
                                    </div>
                                </div>
                                 <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea class="form-control" name="laporan" required></textarea> 
                                        <label class="form-label">Laporan Kegiatan</label>
                                    </div>
                                </div>
                                   
                                
                                <br></br>
                <td><input type="submit" value="Simpan Data"  class="btn btn-primary waves-effect"/>&nbsp &nbsp &nbsp
                    <a href="index.php" class="btn btn-warning waves-effect">Kembali</a>
                </td>  
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