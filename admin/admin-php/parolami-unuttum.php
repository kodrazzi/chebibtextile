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
<html lang="tr">
    <head>
        
        <!-- Title -->
        <title>Chebib Textile | Responsive Admin Dashboard</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Chebib Textile Responsive Admin Dashboard" />
        <meta name="keywords" content="admin,dashboard,creative,web,development" />
        <meta name="author" content="Tarz Yazılım" />
        
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">        

        	
        <!-- Theme Styles -->
        <link href="assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
        
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body class="signin-page">
        <div class="loader-bg"></div>
        <div class="loader">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mn-content valign-wrapper">
            <main class="mn-inner container">
                <div class="valign">
                      <div class="row">
                          <div class="col s12 m6 l4 offset-l4 offset-m3">
                              <div class="card white darken-1">
                                  <div class="card-content ">
                                      <span class="card-title">Parolamı Unuttum</span>
                                       <div class="row">
                                           <form class="col s12" action="giris-kontrol.php" method="post">
                                               <div class="input-field col s12">
                                                   <input id="email" type="email" class="validate">
                                                   <label for="email">Email</label>
                                               </div>
                                                <div class="col s12 right-align m-t-sm">
                                                  <button style="width:inherit !important;" class="waves-effect waves-light btn teal" type="submit">Gönder</button>
                                                </div>
                                                <div class="col s12 center-align m-t-sm">
                                                  <a style="width:inherit !important; background-color:#acc8a7 !important; color:#fff !important; box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);"  href="index.php" class="waves-effect waves-grey btn-flat">Giriş Yap</a>
                                                </div>
                                           </form>
                                      </div>
                                      <?php if (isset($_GET['sonuc'])) { ?>
                                      <?php  if ($_GET['sonuc'] == "hatali-giris") { ?>
                                      <div class="trigger-error"></div>
                                      <div class="trigger-success"></div>
                                      <?php } ?>
                                      <?php } ?>
                                  </div>
                              </div>
                          </div>
                    </div>
                </div>
            </main>
        </div>
        
        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/js/alpha.min.js"></script>
        <script src="js/app.min.js"></script>
        <script>
          $('.trigger-error').show(function () {
            iziToast.error({
              title: 'HATA:',
              target: '.trigger-error',
              message: 'Girdiğiniz bilgi hatalı.',
              transitionIn: 'fadeInDown'
            });
          });
          $('.trigger-success').show(function () {
            iziToast.success({
              title: 'ONAY:',
              icon: 'glyphicon glyphicon-send',
              target: '.trigger-success',
              message: 'Girdiğiniz e-posta doğru.',
              transitionIn: 'fadeInDown'
            });
          });
          $('.trigger-message').show(function () {
            iziToast.show({
              id: 'haduken',
              theme: 'dark',
              icon: 'glyphicon glyphicon-send',
              title: 'Merhaba!',
              message: 'Size bir e-posta gönderdik.',
              position: 'topCenter',
              transitionIn: 'flipInX',
              transitionOut: 'flipOutX',
              progressBarColor: 'rgb(0, 255, 184)',
              image: 'img/tarz-logo-70.png',
              imageWidth: 70,
              layout: 2,
              onClose: function () {
                // console.info('onClose');
              },
              iconColor: 'rgb(0, 255, 184)'
            });
          });
          document.addEventListener('iziToast-opening', function (data) {
            // if(data.detail.id == 'haduken'){
            // console.info('EventListener iziToast-opening');
            // }
          });

          document.addEventListener('iziToast-opened', function (data) {
            // if(data.detail.id == 'haduken'){
            // console.info('EventListener iziToast-opening');
            // }
          });

          document.addEventListener('iziToast-closing', function (data) {
            // if(data.detail.id == 'haduken'){
            // console.info('EventListener iziToast-closing');
            // console.info(data.detail.closedBy);
            // }
          });

          document.addEventListener('iziToast-closed', function (data) {
            // if(data.detail.id == 'haduken'){
            console.info('EventListener iziToast-closed');
            // console.info(data.detail.closedBy);
            // }
          });
        </script>
    </body>
</html>

<!-- YORUM YAPILACAK -->
<!--   <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>Parolamı Unuttum | Ninova nvAdmin Web Uygulaması</title>
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

  <body class="hold-transition lockscreen"> -->
    <!--[if lt IE 10]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!--     <div class="lockscreen-after">
      <div class="lockscreen-wrapper">
        <div class="lockscreen-logo"><a href="index.php"><img src="img/logo-akyar-insaat-01.png" alt="akyarinsaatlogo"></a></div>
        <div class="clearfix"></div>
        <hr>
        <p class="login-box-msg">E-Posta Adresiniz</p>
        <div class="box-body">
          <form action="giris-kontrol.php" method="post">
            <div class="form-group has-feedback">
              <input class="form-control" type="e-mail" placeholder="Mevcut E-Posta adresiniz" name="eposta" required="required">
              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <button class="btn btn-primary btn-block ajax" type="submit">Kontrol Et ve Gönder</button>
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
        </div> -->
        <?php /*if (isset($_GET['sonuc'])) { ?>
        <?php  if ($_GET['sonuc'] == "hatali-giris") { ?>
        <div class="trigger-error"></div>
        <div class="trigger-success"></div>
        <?php } ?>
        <?php } */?>
    <!--   </div>
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
          message: 'Girdiğiniz bilgi hatalı.',
          transitionIn: 'fadeInDown'
        });
      });
      $('.trigger-success').show(function () {
        iziToast.success({
          title: 'ONAY:',
          icon: 'glyphicon glyphicon-send',
          target: '.trigger-success',
          message: 'Girdiğiniz e-posta doğru.',
          transitionIn: 'fadeInDown'
        });
      });
      $('.trigger-message').show(function () {
        iziToast.show({
          id: 'haduken',
          theme: 'dark',
          icon: 'glyphicon glyphicon-send',
          title: 'Merhaba!',
          message: 'Size bir e-posta gönderdik.',
          position: 'topCenter',
          transitionIn: 'flipInX',
          transitionOut: 'flipOutX',
          progressBarColor: 'rgb(0, 255, 184)',
          image: 'img/tarz-logo-70.png',
          imageWidth: 70,
          layout: 2,
          onClose: function () {
            // console.info('onClose');
          },
          iconColor: 'rgb(0, 255, 184)'
        });
      });
      document.addEventListener('iziToast-opening', function (data) {
        // if(data.detail.id == 'haduken'){
        // console.info('EventListener iziToast-opening');
        // }
      });

      document.addEventListener('iziToast-opened', function (data) {
        // if(data.detail.id == 'haduken'){
        // console.info('EventListener iziToast-opening');
        // }
      });

      document.addEventListener('iziToast-closing', function (data) {
        // if(data.detail.id == 'haduken'){
        // console.info('EventListener iziToast-closing');
        // console.info(data.detail.closedBy);
        // }
      });

      document.addEventListener('iziToast-closed', function (data) {
        // if(data.detail.id == 'haduken'){
        console.info('EventListener iziToast-closed');
        // console.info(data.detail.closedBy);
        // }
      });
    </script>
  </body>

  </html> -->