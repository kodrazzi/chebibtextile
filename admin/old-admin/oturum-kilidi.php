<?php
session_start();
ob_start();
          session_destroy();
if ($_SESSION["login"] == false) {
    header("Location:index.php");
}
header("Refresh: 300; url=index.php");
ob_end_flush();
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Oturum Kilitli | Ninova nvAdmin Web Uygulaması</title>
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
        <div class="lockscreen-name">
          <?php echo $_SESSION['user']; ?>
        </div>
        <div class="lockscreen-item">
          <div class="lockscreen-image"><img src="img/<?php echo $_SESSION['profil_foto']; ?>" alt="<?php echo $_SESSION['user']; ?>"></div>
          <form class="lockscreen-credentials" action="giris-kontrol.php" method="post">
            <div class="input-group">
              <input class="form-control" type="password" placeholder="Parola" name="sifre-kilit" required="required">
              <input class="hidden" type="text" name="id" value="<?php echo $_SESSION['id']; ?>">
              <div class="input-group-btn">
                <button class="btn" type="submit"><i class="fa fa-arrow-right text-muted"></i></button>
              </div>
            </div>
          </form>
        </div>
        <div class="help-block text-center">Oturum kilidini açmak için lütfen parolanızı girin.</div>
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
        <div class="trigger-error"></div>
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
          message: 'Girdiğiniz bilgiler hatalı.',
          transitionIn: 'fadeInDown'
        });
      });
    </script>
  </body>
  </html>