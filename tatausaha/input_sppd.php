<?php 
include '../tampilan/atastata.php';
?>

 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Halaman Input Surat Perintah Perjalanan Dinas</h2>
            </div>

    <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Input Surat Perintah Perjalanan Dinas</h2>
                            <ul class="header-dropdown m-r--5">
                            </ul>
                        </div>
                        <div class="body">
                            <form id="form_validation" action="tambah_sppd.php" method="POST">
                                   <div class="form-group form-float">
                                    <div class="form-line">
                                      <select  name="nip" class="form-control show-tick" onchange="changeValue(this.value)">
                                        <option>Pejabat yang memberi perintah</option>
                                         <?php 
                                          $result = mysqli_query($conn, "select * from pegawai where hak_akses='pimpinan'");    
                                          while ($row = mysqli_fetch_array($result)) {
                                            echo '<option value="' . $row['nip'] . '">' . $row['nip'] . ' - '.$row['nama'].'</option>';   
                                         }      
                                         ?>    
                                      </select>
                                     </div>
                                    </div>
                                    <div class="form-group form-float">
                                    <div class="form-line">
                                      <select  name="namap" class="form-control show-tick" onchange="changeValue(this.value)">
                                        <option>Nama pegawai yang diperintah</option>
                                         <?php 
                                          $result = mysqli_query($conn, "select * from pegawai where hak_akses!='pimpinan'");    
                                          while ($row = mysqli_fetch_array($result)) {
                                            echo '<option value="' . $row['nama'] . '">'.$row['nama'].'</option>';
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
                                        <option>Jabatan</option>
                                        <option>Luar Kota</option>
                                      </select>
                                    </div>                                
                                </div>
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea type="text" class="form-control" name="tujuan" required></textarea> 
                                        <label class="form-label">Tujuan perjalanan dinas</label>
                                    </div>
                                  </div>
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="angkutan" required>
                                        <label class="form-label">Alat Angkut</label>
                                    </div>
                                  </div>
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="tempatb" required>
                                        <label class="form-label">Tempat berangkat</label>
                                    </div>
                                  </div>
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="tempatt" required>
                                        <label class="form-label">Tempat tujuan</label>
                                    </div>
                                  </div>
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                      Tanggal berangkat
                                        <input type="date" class="form-control" name="tglb" placeholder="Tanggal berangkat" required>
                                    </div>
                                  </div>
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                      Tanggal kembali
                                        <input type="date" class="form-control" name="tglk" placeholder="Tanggal kembali" required>
                                    </div> 

                                <br></br>
                <td><input type="submit" value="Simpan Data"  class="btn btn-primary waves-effect"/>&nbsp &nbsp &nbsp<a href="sppd.php" class="btn btn-warning waves-effect">Kembali</a></td>       
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