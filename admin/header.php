<?php 


  ob_start();


  session_start();


  if($_SESSION["login"] == false)


  {


      header("Location:index.php");


  }


?>


<!DOCTYPE html>


<html lang="tr">





<head>





  <!-- Title -->


  <title>Chebib Tekstil | Admin Dashboard</title>





  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />


  <meta charset="UTF-8">


  <meta http-equiv="X-UA-Compatible" content="IE=edge">


  <meta name="description" content="Kodrazzi Responsive Admin Template" />


  <meta name="keywords" content="admin,dashboard,creative,web,development" />


  <meta name="author" content="Kodrazzi" />





  <!-- Styles -->


  <link type="text/css" rel="stylesheet" href="assets/plugins/materialize/css/materialize.min.css" />


  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


  <link href="./../assets/plugins/metrojs/MetroJs.min.css" rel="stylesheet">


  <link href="./../assets/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet">








  <!-- Theme Styles -->


  <link href="assets/css/alpha.min.css" rel="stylesheet" type="text/css" />


  <link href="assets/css/custom.css" rel="stylesheet" type="text/css" />





  <!-- Icons -->


  <link rel="icon" type="image/png" href="img/favicon/favicon.png" sizes="32x32">





  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->


  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->


  <!--[if lt IE 9]>


        <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>


        <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


        <![endif]-->





  <!--    </head>


<!DOCTYPE html>


<html lang="en">


<head>


  <title>Kontrol Paneli | AKYAR Web Uygulaması</title>


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
  <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&amp;subset=latin-ext" rel="stylesheet"> -->
  <?php 
  include "./config/config.php";
/*  $baglan=$db->query("SELECT * FROM ozelScriptler", PDO::FETCH_ASSOC);
  if ( $baglan->rowCount()) {

    foreach( $baglan as $row) {
      echo $row['headScripti'];
    }
  $db=null;
}
  */
  ?>


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->


  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->


  <!--[if lt IE 9]>


        <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>


        <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


        <![endif]-->





</head>





<body>


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


      <div class="spinner-layer spinner-teal lighten-1">


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


  <div class="mn-content fixed-sidebar">


    <!-- HEADER -->


    <header class="mn-header navbar-fixed">


      <nav class="cyan darken-1">


        <div class="nav-wrapper row">


          <section class="material-design-hamburger navigation-toggle">
            <a href="javascript:void(0)" data-activates="slide-out" class="button-collapse show-on-large material-design-hamburger__icon">
              <span class="material-design-hamburger__layer"></span>
            </a>
          </section>
          <div class="header-title col s3 m3">
            <span class="chapter-title" style="height:auto !important;">
              <?php echo $_SESSION["user_name"]; ?>
            </span>
          </div>
          <div class="header-title col s3 m3">
            <span class="chapter-title">
              CHEBİB TEKSİL ADMİN SAYFASI
            </span>
          </div>
        </div>
      </nav>
    </header>
    <!-- OLD HEADER -->
    <!-- </head>
<body class="hold-transition skin-blue sidebar-mini fixed"> -->
    <!--[if lt IE 10]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
    <!--   <div class="wrapper">
    <header class="main-header"><a class="logo" href="main.php"><span class="logo-mini"><b>NV</b>A</span><span class="logo-lg"><b>Ninova</b>Admin</span></a>
      <nav class="navbar navbar-static-top"><a class="sidebar-toggle" href="#" data-toggle="push-menu" role="button"><span class="sr-only">Toggle navigation</span></a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu"><a class="dropdown-toggle" href="#" data-toggle="dropdown"><img class="user-image" src="img/<?php echo $_SESSION['profil_foto'] ?>" alt="<?php echo $_SESSION["user"]; ?>"><span class="hidden-xs"><?php echo $_SESSION["user"]; ?></span></a>
              <ul class="dropdown-menu">
                <li class="user-header"><img class="img-circle" src="img/<?php /* echo $_SESSION['profil_foto'] ?>" alt="bahadirakca">
                  <p>
                    <?php echo $_SESSION["user"]; ?> - AKYAR İnşaat<small>Üyelik Tarihi <?php echo $_SESSION['kayit_tarihi'] */?></small></p>
                </li>
                <li class="user-footer" style="text-align:center;">
                  <div class="pull-left"><a class="btn btn-default btn-flat" href="profilim.php">Profilim</a></div>
                  <div class="pull-right"><a class="btn btn-default btn-flat" href="index.php">Çıkış Yap</a></div>
                  <div><a class="btn btn-default btn-flat" href="oturum-kilidi.php">Kilitle</a></div>
                </li>
              </ul>
            </li>
            <li><a href="main.php" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Siteyi Görüntüle"><i class="fa fa-external-link"></i></a></li>
            <li><a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a></li>
          </ul>
        </div>
      </nav>
    </header> -->
    <!-- OLD HEADER END -->
    <!-- ASIDE NAV -->
    <aside id="slide-out" class="side-nav white fixed">
      <div class="side-nav-wrapper">
        <div class="sidebar-profile">
          <div class="sidebar-profile-image">
            <img src="<?php if($_SESSION['profil_foto']) {echo"img/"+ $_SESSION['profil_foto'];}else{echo "assets/images/profile-image.png";} ?>" class="circle" alt="">


          </div>


          <div class="sidebar-profile-info">


            <a href="javascript:void(0);" class="account-settings-link">


              <p><?php echo ($_SESSION["user_name"] . " " . $_SESSION["user_surname"]); ?></p>


              <span><?php echo $_SESSION["email"]; ?>


                <i class="material-icons right">arrow_drop_down</i>


              </span>


            </a>


          </div>


        </div>


        <div class="sidebar-account-settings">


          <ul>


            <li class="no-padding">


              <a class="waves-effect waves-grey">


                <i class="material-icons">person</i>Profil</a>
            </li>
            <li class="no-padding">


              <a class="waves-effect waves-grey">


                <i class="material-icons">mail_outline</i>Inbox</a>
            </li>
            <li class="no-padding">
              <a class="waves-effect waves-grey">
                <i class="material-icons">star_border</i>Starred
                <span class="new badge">18</span>
              </a>
            </li>
            <li class="no-padding">
              <a class="waves-effect waves-grey">
                <i class="material-icons">done</i>Sent Mail</a>
            </li>
            <li class="no-padding">
              <a class="waves-effect waves-grey">
                <i class="material-icons">history</i>History
                <span class="new grey lighten-1 badge">3 new</span>
              </a>
            </li>
            <li class="divider"></li>
            <li class="no-padding">
              <a class="waves-effect waves-grey">
                <i class="material-icons">exit_to_app</i>Sign Out</a>
            </li>
          </ul>
        </div>
        <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
          <li class="no-padding active">
            <a class="waves-effect waves-grey active" href="main.php?p=add-slider">
              <i class="material-icons">settings_input_svideo</i>Slider Resim Ekleme</a>
          </li>
          <li class="no-padding">
            <a class="waves-effect waves-grey" href="main.php?p=add-referance">
              <i class="material-icons">apps</i>Referans Ekleme
            </a>
          </li>
          <li class="no-padding">
            <a class="collapsible-header waves-effect waves-grey" >
              <i class="material-icons">code</i>Hakkımızda
              <i class="nav-drop-icon material-icons">keyboard_arrow_right</i>
            </a>
            <div class="collapsible-body">
              <ul>
                <li>
                  <a href="main.php?p=aboutUs-menu">Menü Düzenleme</a>
                </li>
<!--                 <li>
                  <a href="main.php?p=aboutUs-content">İçerik Düzenleme</a>
                </li> -->
              </ul>
            </div>
          </li>
          <li class="no-padding">
            <a class="waves-effect waves-grey">
              <i class="material-icons">add_box</i>Ürün Ekleme
            </a>
            </li>
            <li class="no-padding">
              <a class="collapsible-header waves-effect waves-grey">
                <i class="material-icons">settings</i>Ayarlar
                <i class="nav-drop-icon material-icons">keyboard_arrow_right</i>
              </a>
              <div class="collapsible-body">
                <ul>
                  <li>
                    <a href="layout-blank.html">re-Captcha</a>
                  </li>
                  <li>
                </ul>
              </div>
            </li>
            <li class="no-padding">


              <a class="collapsible-header waves-effect waves-grey">


                <i class="material-icons">tag_faces</i>Diğer Sayfalar


                <i class="nav-drop-icon material-icons">keyboard_arrow_right</i>


              </a>


              <div class="collapsible-body">


                <ul>


                  <li>


                    <a href="404.html">404 Page</a>


                  </li>


                  <li>


                    <a href="500.html">500 Page</a>


                  </li>


                  <li>


                    <a href="invoice.html">Invoice</a>


                  </li>


                  <li>


                    <a href="faq.html">FAQ</a>


                  </li>


                  <li>


                    <a href="sign-in.html">Sign In</a>


                  </li>


                  <li>


                    <a href="sign-up.html">Sign Up</a>


                  </li>


                  <li>


                    <a href="lock-screen.html">Lock Screen</a>


                  </li>


                  <li>


                    <a href="pattern-lock-screen.html">Pattern Lock Screen</a>


                  </li>


                  <li>


                    <a href="forgot.html">Forgot Password</a>


                  </li>


                  <li>


                    <a href="pricing-tables.html">Pricing Tables</a>


                  </li>


                  <li>


                    <a href="contact.html">Contact</a>


                  </li>


                  <li>


                    <a href="gallery.html">Gallery</a>


                  </li>


                  <li>


                    <a href="timeline.html">Timeline</a>


                  </li>


                  <li>


                    <a href="calendar.html">Calendar</a>


                  </li>


                  <li>


                    <a href="coming-soon.html">Coming Soon</a>


                  </li>


                </ul>


              </div>


            </li>


        </ul>


        <div style="display:flex; align-items:center; justify-content:center;" class="footer">


          <p class="copyright">


            <a href="http://www.tarzyazilim.com.tr/"></a>Tarz Yazılım 2018 ©</a>


          </p>


        </div>


      </div>


    </aside>


    <!-- ASIDE END-->





    <!-- OLD ASIDE -->


    <!-- <aside class="main-sidebar">


      <section class="sidebar">


        <div class="user-panel">


          <div class="pull-left image"><img class="img-circle" src="img/<?php echo $_SESSION['profil_foto'] ?>" alt="bahadirakca"></div>


          <div class="pull-left info">


            <p>


              <?php echo $_SESSION["user"]; ?>


            </p><a href="profilim.php"><i class="fa fa-circle text-success"></i><span>Aktif</span></a>


          </div>


        </div>


        <form class="sidebar-form" action="#" method="get">


          <div class="input-group">


            <input class="form-control" type="text" name="searchform" placeholder="Arama yap..."><span class="input-group-btn">


                <button class="btn btn-flat" id="search-btn" type="submit" name="search"><i class="fa fa-search"></i></button></span>


          </div>


        </form>


        <ul class="sidebar-menu" data-widget="tree">


          <li class="header">MENÜLER</li>


          <li class="active"><a href="main.php"><i class="fa fa-dashboard"></i><span>Kontrol Paneli</span></a></li>


          <li><a href="meta-favicon-logo.php"><i class="fa fa-globe"></i><span>Başlık, Favicon ve Logo</span></a></li>


          <li><a href="stil-ve-scriptler.php"><i class="fa fa-code"></i><span>Özel Stil ve Scriptler</span></a></li>


          <li class="treeview"><a href="#"><i class="fa fa-group"></i><span>Kurumsal Bilgiler</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>


            <ul class="treeview-menu">


              <li><a href="kurumsal-bilgiler.php"><i class="fa fa-circle-o"></i><span>Kurumsal Bilgiler</span></a></li>


              <li><a href="kurumsal-bilgiler-hakkimizda.php"><i class="fa fa-circle-o"></i><span>Hakkımızda</span></a></li>


              <li><a href="kurumsal-bilgiler-vizyonumuz.php"><i class="fa fa-circle-o"></i><span>Vizyonumuz</span></a></li>


              <li><a href="kurumsal-bilgiler-misyonumuz.php"><i class="fa fa-circle-o"></i><span>Misyonumuz</span></a></li>


            </ul>


          </li>


          <li><a href="slider.php"><i class="fa fa-play"></i><span>Slider</span></a></li>


          <li><a href="hizmetlerimiz.php"><i class="fa fa-th"></i><span>Hizmetlerimiz</span></a></li>


          <li><a href="musteri-iletileri.php"><i class="fa fa-commenting-o"></i><span>Müşteri İletileri</span></a></li>


          <li><a href="galeri.php"><i class="fa fa-file-image-o"></i><span>Galeri</span></a></li>


          <li class="treeview"><a href="#"><i class="fa fa-user"></i><span>Kullanıcı Yönetimi</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>


            <ul class="treeview-menu">


              <li><a href="kullanici-yonetimi.php"><i class="fa fa-circle-o"></i><span>Kullanıcılar</span></a></li>


              <li><a href="kullanici-ekle.php"><i class="fa fa-circle-o"></i><span>Yeni Kullanıcı Ekle</span></a></li>


              <li><a href="profilim.php"><i class="fa fa-circle-o"></i><span>Profilim</span></a></li>


            </ul>


          </li>


        </ul>


      </section>


    </aside> -->