<?php 
include '../tampilan/ataspimpin.php';
?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Halaman Data Surat Perintah Tugas</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Data Surat Perintah Tugas
                            </h2>
                            <br>
                            <form method="post" target="_self"> 
Cari Data :&nbsp;<input name='qcari' class="form-control" type="text" placeholder='Cari Data Berdasarkan Nama '/>
<br>
<input type="submit" class="btn btn-primary waves-effect" value="Cari " /> <a href='lpd.php' class='btn btn-sm btn-success' > All Data</a>
</form>
                            <ul class="header-dropdown m-r--5">
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr><th>No</th> 
                                            <th>No.Surat</th>
                                            <th>Dasar</th>
                                            <th>Nama Pegawai yang Diperintah</th>
                                            <th>Golongan</th>
                                            <th>Jabatan</th>
                                            <th>Tujuan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                      <?php
require_once('koneksi.php');
$query1="select * from spt, pegawai where pegawai.nip=spt.nip ";

if(isset($_POST['qcari'])){
    $qcari=$_POST['qcari'];
    $query1="SELECT * FROM  spt, pegawai where spt.nip=pegawai.nip
    and nama like '%$qcari%'
    or tanggalb like '%$qcari%'  ";
}

$result=mysqli_query($conn, $query1) or die(mysqli_error());
$no=1; //penomoran 
while($rows=mysqli_fetch_object($result)){
            ?>
            <tr>
                <td><?php echo $no
                ?></td>
                <td><?php       echo $rows -> nosurat;?></td>
                <td><?php       echo $rows -> dasar;?></td>
                <td><?php       echo $rows -> nama;?></td>
                <td><?php       echo $rows -> golongan;?></td>
                <td><?php       echo $rows -> jabatan;?></td>
                <td><?php       echo $rows -> tujuan;?></td>
                <td><!-- 
                    <?php 
                    if($rows -> status == 'Telah Dikonfirmasi'){
                        echo "<p class='btn btn-success waves-effect'>Sudah Terkonfirmasi</p>";
                    } else {
                        echo '<a href="konfimasi.php?id='.$rows->id.'" type="button" class="btn btn-primary waves-effect">Konfirmasi</a>';
                     } ?> -->
                    <a href="kofimasi.php"><button class="btn btn-primary waves-effect"><i class="material-icons">done</i></button></a>&nbsp
                    <a href="revisi.php"><button class="btn btn-primary waves-effect"><i class="material-icons">edit</i></button></a>&nbsp
                    <a href="print_sppd.php"><button class="btn btn-primary waves-effect"><i class="material-icons">visibility</i></button></a>
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
