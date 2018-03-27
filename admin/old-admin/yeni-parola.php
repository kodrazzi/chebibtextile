<?php
/*
session_start();
ob_start();
          session_destroy();
if ($_SESSION["login"] == false) {
    header("Location:index.php");
}
header("Refresh: 300; url=index.php");
ob_end_flush();
*/
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>Yeni Parolanızı Oluşturun | Ninova nvAdmin Web Uygulaması</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Ninova nvAdmin Web Uygulaması">
    <meta name="keywords" content="creative, web, development">
    <meta name="author" content="yupagem">
    <link rel="icon" type="image/png" href="img/logo-akyar-insaat-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="img/logo-akyar-insaat-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" type="image/png" href="img/logo-akyar-insaat-180x180.png" sizes="180x180">
    <link rel="stylesheet" href="vendor/animate.css/animate.min.css">
    <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/jasny-bootstrap/dist/css/jasny-bootstrap.min.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="vendor/izitoast/dist/css/iziToast.min.css">
    <link rel="stylesheet" href="vendor/PACE/themes/white/pace-theme-flash.css">
    <link rel="stylesheet" href="vendor/morris.js/morris.css">
    <link rel="stylesheet" href="plugin/jquery-jvectormap-2.0.3/jquery-jvectormap-2.0.3.css">
    <link rel="stylesheet" href="vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="vendor/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="vendor/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="vendor/iCheck/skins/square/blue.css">
    <link rel="stylesheet" href="vendor/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/app.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&amp;subset=latin-ext" rel="stylesheet">
  </head>

  <body class="hold-transition lockscreen">
    <!--[if lt IE 10]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
    <div class="lockscreen-after">
      <div class="lockscreen-wrapper">
        <div class="lockscreen-logo"><a href="index.php"><img src="img/logo-akyar-insaat-01.png" alt="akyarinsaatlogo"></a></div>
        <div class="clearfix"></div>
        <hr>
        <p class="login-box-msg">Yeni Parola Oluşturun</p>
        <div class="box-body">
          <form action="giris-kontrol.php" method="post">
            <div class="form-group has-feedback">
              <input class="form-control" type="password" placeholder="Yeni Parola" name="newpassword" required="required">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input class="form-control" type="password" placeholder="Yeni Parola Tekrar" name="renewpassword" required="required">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <button class="btn btn-primary btn-block ajax" type="submit">Kontrol Et ve Oluştur</button>
              </div>
            </div>
          </form>
        </div>
        <div class="text-center"><a href="index.php">Ya da farklı bir kullanıcı olarak oturum aç</a></div>
        <div class="clearfix"></div>
        <hr>
        <div class="lockscreen-footer text-center">
          <h5><a style="color: #333;" href="http://tarzyazilim.com.tr" target="_blank">Tarz <img src="img/tarz-logo-15.png" alt="tarz-logo"> Yazılım</a></h5>
          <h6>Copyright © 2013-2017</h6>
          <h6>Tüm hakları saklıdır.</h6>
        </div>
        <?php if (isset($_GET['sonuc'])) { ?>
        <?php  if ($_GET['sonuc'] == "hatali-giris") { ?>
        <hr>
        <div class="trigger-success"></div>
        <?php } ?>
        <?php } ?>
      </div>
    </div>
    <script src="vendor/jquery/dist/jquery.min.js"></script>
    <script src="vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="vendor/izitoast/dist/js/iziToast.min.js"></script>
    <script src="vendor/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
    <script src="vendor/moment/min/moment.min.js"></script>
    <script src="vendor/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js"></script>
    <script src="vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="vendor/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.all.min.js"></script>
    <script src="vendor/fastclick/lib/fastclick.js"></script>
    <script src="vendor/PACE/pace.min.js"></script>
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morris.js/morris.min.js"></script>
    <script src="vendor/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <script src="plugin/jquery-jvectormap-2.0.3/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="plugin/jquery-jvectormap-2.0.3/jquery-jvectormap-world-mill.js"></script>
    <script src="vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="vendor/jquery-knob/dist/jquery.knob.min.js"></script>
    <script src="vendor/iCheck/icheck.min.js"></script>
    <script src="vendor/datatables.net/js/jquery.dataTables.js"></script>
    <script src="vendor/datatables.net-bs/js/dataTables.bootstrap.js"></script>
    <script src="plugin/ckeditor/ckeditor.js"></script>
    <script src="js/app.min.js"></script>
    <script>
      $('.trigger-error').show(function () {
        iziToast.error({
          title: 'HATA:',
          target: '.trigger-error',
          message: 'Girdiğiniz bilgiler eşleşmedi',
          transitionIn: 'fadeInDown'
        });
      });
      $().ready(function () {
        iziToast.show({
          title: 'Merhaba!',
          icon: 'fa fa-commenting',
          message: 'Şimdi bu ekranda yeni parolanı oluşturabilirsin.',
          position: 'topCenter',
          image: 'img/tarz-logo-54.png',
          imageWidth: 54,
          balloon: true,
          buttons: [
            ['<button>Tamam</button>', function (instance, toast) {
              iziToast.show({
                theme: 'dark',
                icon: 'fa fa-check',
                image: 'img/tarz-logo-54.png',
                title: 'Bugün',
                message: 'Bol Şans!',
                position: 'bottomCenter',
              });
            }],
          ]
        });
      });
    </script>
  </body>

  </html>