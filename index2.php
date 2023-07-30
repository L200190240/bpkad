<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPPD | BPKAD KABUPATEN PATI</title>
    <link rel="icon" href="logo3.ico" type="image/x-icon">
    <!-- di bawah ini source google font -->
    <style>@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@800&family=Roboto:wght@100&display=swap');</style>
    <!-- di bawah ini source bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- di bawah ini source style2.css -->
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>

    <?php 
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
            echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
        }
    }
    ?>

    <div class="header">
        <div class="row">
            <div class="col-md-4">
                <div class="logo"><img src="logo.png" style="width: 125px; height: 80px">BPKAD PATI</div>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-5">
                <div class="boxlogin">
                    <form  action="log.php" class="form-inline" role="form" method="post">
                        <div class="form-group">
                            <label class="sr-only">Username</label>
                            <input type="text" name="username"  class="form-control" placeholder="Username .." required="required">
                        </div>
                        <div class="form-group">
                            <label class="sr-only">Passsword</label>
                            <input type="password" name="password" class="form-control" placeholder="Password .." required="required">
                        </div>
                        <button type="submit" class="btn btn-default" style="color: black;"><b> Log in </b></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="hero">
        <div class="row">
            <div class="col-md-3">
                <h3></h3>
                <div class="texthero">
                    
                </div>
            </div>
            <div class="col-md-6">
                <div class="formhero">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h1>Sign Up</h1>
                            <form role="form">
                                <div class="form-group">
                                    <label for="exampleInputusername"><h4>Username</h4></label>
                                    <input type="text" class="form-control" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputnip"><h4>NIP</h4></label>
                                    <input type="nip" name="nip" class="form-control" placeholder="NIP">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputnip"><h4>Ulangi NIP</h4></label>
                                    <input type="nip" class="form-control" placeholder="NIP">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputjabatan"><h4>Jabatan</h4></label>
                                    <input type="level" name="level"  class="form-control" placeholder="Jabatan">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputjenis_bidang"><h4>Jenis Bidang</h4></label>
                                    <input type="jenis_bidang" name="jenis_bidang" class="form-control" placeholder="jenis_bidang">
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="submit"  class="btn btn-primary btn-lg">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
