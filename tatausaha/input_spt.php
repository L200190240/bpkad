<?php 
include '../tampilan/atastata.php';
?>

 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Halaman Input Surat Perintah Tugas</h2>
            </div>

    <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Input Surat Perintah Tugas</h2>
                            <ul class="header-dropdown m-r--5">
                            </ul>
                        </div>
                        <div class="body">
                            <form id="form_validation" action="tambah_spt.php" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      No.Surat
                                      <input type="text" class="form-control" name="nosurat"  id="username" placeholder="SPD/Tahun/">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea type="text" class="form-control" name="dasar" required></textarea> 
                                        <label class="form-label">Dasar</label>
                                    </div>
                                </div>
                                   <div class="form-group form-float">
                                    <div class="form-line">
                                      <select  name="nip" class="form-control show-tick" onchange="changeValue(this.value)">
                                        <option >Pegawai yang Diberi Perintah</option>
                                         <?php 
                                          $result = mysqli_query($conn, "select * from pegawai");    
                                          while ($row = mysqli_fetch_array($result)) {
                                            echo '<option value="' . $row['nip'] . '">' . $row['nip'] . ' - '.$row['nama'].'</option>';
                                         }      
                                         ?>    
                                      </select>
                                     </div>
                                    </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <select class="form-control show-tick" name="golongan" value="Golongan" required>
                                        <option> Pangkat dan Golongan</option>
                                        <option>Juru Muda           (I / a)</option>
                                        <option>Juru Muda Tingkat I (I / b)</option>
                                        <option>Juru                (I / c)</option>
                                        <option>Juru Tingkat I      (I / d)</option>
                                        <option>-----------------</option>
                                        <option>Pengatur Muda           (II / a)</option>
                                        <option>Pengatur Muda Tingkat I (II / b)</option>
                                        <option>Pengatur                (II / c)</option>
                                        <option>Pengatur Tingkat I      (II / d)</option>
                                        <option>-----------------</option>
                                        <option>Penata Muda             (III / a)</option>
                                        <option>Penata Muda Tingkat I   (III / b)</option>
                                        <option>Penata                  (III / c)</option>
                                        <option>Penata Tingkat I        (III / d)</option>
                                        <option>-----------------</option>
                                        <option>Pembina                 (IV / a)</option>
                                        <option>Pembina Tingkat I       (IV / b)</option>
                                        <option>Pembina Muda            (IV / c)</option>
                                        <option>Pembina Madya           (IV / d)</option>
                                        <option>Pembina Utama           (IV / e)</option>
                                      </select>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <select class="form-control show-tick" name="jabatan" value="Jabatan" required>
                                        <option value="dalam">Jabatan</option>
                                        <option value="luar">Luar Kota</option>
                                      </select>
                                    </div>                                
                                </div>
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea type="text" class="form-control" name="tujuan" required></textarea> 
                                        <label class="form-label">Tujuan</label>
                                    </div>
                                </div>

                                <br></br>
								<td><input type="submit" value="Simpan Data"  class="btn btn-primary waves-effect"/>&nbsp &nbsp &nbsp<a href="spt.php" class="btn btn-warning waves-effect">Kembali</a></td>       
                            </form>
                        </div>
                    </div>
                </div>
            </div>


       </div>
        </div>
    </section>

   <script type="text/javascript">    
    <?php echo $jsArray; ?>  
    function changeValue(nip){  
    document.getElementById('nm').value = dtPgw[nip].nama;  
    document.getElementById('gol').value = dtPgw[nip].gol;
    document.getElementById('jab').value = dtPgw[nip].jab;    
    };  
    </script> 
  <?php 
include '../tampilan/footer.php';
?>