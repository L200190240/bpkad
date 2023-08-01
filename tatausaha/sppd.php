<?php 
include '../tampilan/atastata.php';
?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Halaman Surat Perintah Perjalanan Dinas</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Data Surat Perintah Perjalanan Dinas
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
                                            <th>Pejabat yang memberi perintah</th>
                                            <th>Nama Pegawai yang diperintah</th>
                                            <th>Pangkat dan Golongan</th>
                                            <th>Jabatan</th>
                                            <th>Tujuan perjalanan dinas</th>
                                            <th>Tempat berangkat</th>
                                            <th>Tempat tujuan</th>
                                            <th>Lama perjalanan dinas</th>
                                            <th>Tanggal berangkat</th>
                                            <th>Tanggal kembali</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                      <?php
require_once('koneksi.php'); //pengambilan data dari db
$query1="select * from sppd, pegawai where pegawai.nip=sppd.nip ";

if(isset($_POST['qcari'])){
    $qcari=$_POST['qcari'];
    $query1="SELECT * FROM  sppd, pegawai where sppd.nip=pegawai.nip
    and nama like '%$qcari%'
    or tglb like '%$qcari%'  ";
}

$result=mysqli_query($conn, $query1) or die(mysqli_error());
$no=1; //penomoran 
while($rows=mysqli_fetch_object($result)){
            ?>
            <tr>
                <td><?php echo $no
                ?></td>
                <td><?php       echo $rows -> nosurat;?></td>
                <td><?php       echo $rows -> nip;?></td>
                <td><?php       echo $rows -> namap;?></td>
                <td><?php       echo $rows -> golongan;?></td>
                <td><?php       echo $rows -> jabatan;?></td>
                <td><?php       echo $rows -> tujuan;?></td>
                <td><?php       echo $rows -> angkutan;?></td>
                <td><?php       echo $rows -> tempatb;?></td>
                <td><?php       echo $rows -> tempatt;?></td>
                <td><?php       echo $rows -> tglb;?></td>
                <td><?php       echo $rows -> tglk;?></td>
                <td>
                    <a href="kofimasi.php"><button class="btn btn-primary waves-effect"><i class="material-icons">done</i></button></a>&nbsp
                    <a href="revisi.php"><button class="btn btn-primary waves-effect"><i class="material-icons">edit</i></button></a>&nbsp
                    <a href="print_sppd.php"><button class="btn btn-primary waves-effect"><i class="material-icons">description</i></button></a>
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
