<?php
  session_start();
  ob_start();
  session_destroy();
  ob_end_flush();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Chebib Textile Yönetim Paneli</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta charset="UTF-8">
  <meta name="description" content="Responsive Admin Dashboard Template" />
  <meta name="keywords" content="admin,dashboard" />
  <meta name="author" content="Steelcoders" />
  <!-- Styles -->
  <link type="text/css" rel="stylesheet" href="assets/plugins/materialize/css/materialize.min.css" />
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">
  <!-- Theme Styles -->
  <link href="assets/css/alpha.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/custom.css" rel="stylesheet" type="text/css" />
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
        </div>
        <div class="gap-patch">
          <div class="circle"></div>
        </div>
        <div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>
      <div class="spinner-layer spinner-red">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div>
        <div class="gap-patch">
          <div class="circle"></div>
        </div>
        <div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>
      <div class="spinner-layer spinner-yellow">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div>
        <div class="gap-patch">
          <div class="circle"></div>
        </div>
        <div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>
      <div class="spinner-layer spinner-green">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div>
        <div class="gap-patch">
          <div class="circle"></div>
        </div>
        <div class="circle-clipper right">
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
                <span class="card-title">Yönetim Paneli</span>
                <div class="row">
                  <form class="col s12" action="giris-kontrol.php" method="post">
                    <div class="input-field col s12">
                      <input id="kadi" type="text" class="validate" name="kadi" required="required">
                      <label for="email">Kullanıcı Adı</label>
                    </div>
                    <div class="input-field col s12">
                      <input id="parola" type="password" class="validate" name="sifre" required="required">
                      <label for="password">Parola</label>
                    </div>
                    <div class="col s12 right-align m-t-sm">
                      <button class="waves-effect waves-light btn teal" type="submit">Giriş Yap</button>
                    </div>
                  </form>
                </div>
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
</body>
</html>