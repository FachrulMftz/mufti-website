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
    div.back{
        position:absolute;
        background-image: url(./pohon_2-removebg-preview.png);
        width: 50%;
        height: 50%;
        left: 50%;
    }
    div.back .back2{ 
        position:absolute;
        background-repeat: no-repeat;
        width: 80%;
        height: auto;
        right: 135%;
        top: 1%;
    }
    div.back .back3{ 
        position:absolute;
        background-repeat: no-repeat;
        width: 80%;
        height: 150%;
        right: 75%;
        top: 1%;
    }
    
</style>
<body>
    <div class="back">
    <img src="./pohon_2-removebg-preview.png" class="foto">
        <img src="./pohon_2-removebg-preview.png" class="back2">
        <img src="./pohon_2-removebg-preview.png" class="back3">
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
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
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
                            <button class="btn btn-success" name="btn-send" style="font-family: 
                            'santuy'; text-decoration: none;"> Kembali </button>
                            <!--Jadi class dan nama itu tidak usah diganti karena class itu sudah ditampung di css online (bostrap)-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>