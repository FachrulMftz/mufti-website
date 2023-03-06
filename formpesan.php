<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <title></title>
</head>
<style>
    div.background{
        position: absolute;
        background: url(./uwitklopo.png);
        background-repeat: no-repeat;
        width: 35%;
        height: 100%;
        margin-bottom: 70%;
        -webkit-transform: rotate(180deg);
    }
    div.background2{
        position: absolute;
        background: url(./uwitklopo.png);
        background-repeat: no-repeat;
        width: 35%;
        height: 100%;
        top: 13%;
        left: 58.5%;
        -webkit-transform: rotate(90deg);
    }
</style>
<body>
    <div class="background">
    </div>
    <div class="background2">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h2 class="text-center py-2">Ketikan Pesan / Doa Restu</h2>
                        <br>
                        <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Mohon Isikan Form Yang Kosong ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Pesan Sudah Terkirim, Terima Kasih ;) ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        ?>
                    </div>
                    <div class="card-body">
                        <form action="process.php" method="post">
                            <input type="text" name="UName" placeholder="Nama Tamu" class="form-control mb-2">
                            <input type="email" name="Email" placeholder="Email" class="form-control mb-2">
                            <input type="text" name="Subject" placeholder="Alamat Rumah" class="form-control mb-2">
                            <textarea name="msg" class="form-control mb-2" placeholder="Tulisankan Pesan"></textarea>
                            <button class="btn btn-success" name="btn-send" style="font-family: 'santuy'; text-decoration: none;"> Kirimkan </button>
                            <!--Jadi class dan nama itu tidak usah diganti karena class itu sudah ditampung di css online (bostrap)-->
                        </form>
                        <form action="5.html" link="5.html">
                            <button class="btn btn-success" name="btn-send" style="font-family: 
                            'santuy'; text-decoration: none; margin-left:90px; margin-top:-65px;"> Kembali </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>