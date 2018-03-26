<?php require_once('./config/config.php'); ?>

<!DOCTYPE html>
<html lang="tr">

<head>
  <!-- Title -->
  <title><?php echo $lang['pageOurServices'] . " | " . $lang['title']; ?></title>
  <!-- Meta -->
  <?php require_once('./components/meta.php'); ?>
  <!-- Stylesheet -->
  <?php require_once('./components/styles.php'); ?>
</head>

<body class="header-sticky">
  <!-- Preloader -->
  <?php require_once('./components/preloader.php'); ?>
  <!-- Header -->
  <?php require_once('./components/header.php'); ?>
  <!-- Wrap Slider -->
  <div class="wrap-slider">
    <!-- Page title -->
    <div class="page-title">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="breadcrumbs">
              <ul>
                <li class="home">
                  <a href="index.php"><?php echo $lang['pageHome']; ?></a>
                </li>
                <li>
                  <!-- class="home" -->
                  <a href="hizmet-detay.php"><?php echo $lang['pageOurServices']; ?></a>
                </li>
                <!-- <li>Case</li> -->
              </ul>
            </div>
          </div>
          <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /page-title -->
  </div>
  <!-- Wrap Slider -->
  <!-- Blog posts -->
  <section class="main-content bg-sidebar sidebar-left">
    <div class="container">
      <div class="case-single v1">
        <div class="row">
          <div class="col-md-12">
            <div class="title-section style1">
              <h3 class="title"><?php echo $lang['ourServices-title']; ?></h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="thumb-left">
              <div class="img-style1">
                <img src="./assets/img/portfolio/single/1.png" alt="image">
              </div>
              <div class="img-style2">
                <img src="./assets/img/portfolio/single/2.png" alt="image">
                <img src="./assets/img/portfolio/single/3.png" alt="image">
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
          <div class="col-md-6">
            <div class="post-case-single v1">
              <div class="content-post v1">
                <div class="title-post">
                  <h4 class="title"><?php echo $lang['ourServices-subtitle-1']; ?></h4>
                  <p><?php echo $lang['ourServices-subtitle-1-text']; ?></p>
                </div>
              </div>
              <div class="content-post v2">
                <div class="title-post">
                  <h4 class="title"><?php echo $lang['ourServices-subtitle-2']; ?></h4>
                  <p><?php echo $lang['ourServices-subtitle-2-text']; ?></p>
                </div>
              </div>
              <div class="content-post v3">
                <div class="title-post">
                  <h4 class="title"><?php echo $lang['ourServices-subtitle-3']; ?></h4>
                  <p><?php echo $lang['ourServices-subtitle-3-text']; ?></p>
                </div>
                <div class="list-post">
                  <h4 class="title"><?php echo $lang['ourServices-subtitle-4']; ?></h4>
                </div>
                <div class="list-post">
                  <h4 class="title"><?php echo $lang['ourServices-subtitle-4-list-1']; ?></h4>
                </div>
                <div class="list-post">
                  <h4 class="title"><?php echo $lang['ourServices-subtitle-4-list-2']; ?></h4>
                </div>
                <div class="list-post">
                  <h4 class="title"><?php echo $lang['ourServices-subtitle-4-list-3']; ?></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div>
    </div>
    <!-- /.container -->
  </section>
  <!-- Footer Section -->
  <?php require_once('./components/footer.php'); ?>
  <!-- Javascript -->
  <?php require_once('./components/scripts.php'); ?>
</body>

</html>