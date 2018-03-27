<?php
session_start();
if (isset($_SESSION["GAGAL"])) {
    if ($_SESSION["GAGAL"] >= 3) {
        echo '<h1>ANDA DIBLOKIR</h1>';
        exit();
    }
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>HIDA</title>
        <link rel="icon" href="asset/images/favicon.ico">
        <link rel="stylesheet"href="asset/css/bootstrap.css">
        <link rel="stylesheet"href="asset/css/floating-labels.css">
        <style>
            body{background-image: url("c1.jpg")}
        </style>
        <script>
            /*
             function hallo(){
             var email=document.getElementById("inEmail").value;
             alert("SELAMAT DATANG: "+email);
             }
             */
            window.setTimeout(function () {
                $(".alert").fadeTo(500, 0).slideUp(500, function () {
                    $(this).remove();
                });
            }, 3000);
//           function showModalKu(){
//               $(document) .ready(function (){
//                   $('#ModalKu').modal('show')
//               });

        </script>
    </head>
    <body>
        <form id="frm01" name="frm01" method="POST" action="login.php" class="form-signin">
            <div class="text-center mb-4">
                <img class="mb-4" width="72" height="72" src="asset/images/gembok1.png" >
                <h1>Selamat Datang</h1>
            </div>
            <?php
            if (isset($_SESSION["GAGAL"])) {
                if ($_SESSION["GAGAL"] < 3) {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Anda GAGAL login yang ke-' . $_SESSION["GAGAL"] . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                   <span aria-hiden="true">&times;</span>
               </button>
            </div>';
                }
            }
            ?> 
            <div class="form-label-group">
                <input name="inEmail" class="form-control" type="email" id="inEmail" placeholder="Email Address" autofocus="yes" autocomplete="no" required="yes">
                <label for="inEmail">Email Address</label>
            </div>
            <div class="form-label-group">
                <input name="inPassword" class="form-control" type="password" id="inPassword" placeholder="Password" required="yes">
                <label for="inPassword">Password</label>
            </div>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox">Remember me
                </label>
            </div>
            <!--            <button  type="submit" class=" btn btn-lg btn-primary btn-block">Sign In</button>-->
            <button type:="submit" class=" btn btn-lg btn-success btn-block" data-toggle="modal" data-target="#ModalKu">Sign In</button>

            <!--            <button onclick="showModalKu();" type="button" class=" btn btn-lg btn-danger btn-block">Show Modal Java Script</button> -->
        </form>
        <div class="modal fade" id="ModalKu" tabindex="-1" role="dialog" aria-labelledby="DialogModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel01">
                            Belum Lengkap
                        </h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="close">
                            &times;
                        </button>
                    </div>
                    <div class="modal-body">
                        <p> Silahkan Isi Untuk Mengakses Halaman Web</p>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">
                            tutup
                        </button> 
                    </div>
                </div>
            </div>  
        </div>
        <script src="asset/js/jquery.min.js"></script>
        <script src="asset/js/popper.min.js"></script>
        <script src="asset/js/bootstrap.min.js"></script>
    </body>
</html>
