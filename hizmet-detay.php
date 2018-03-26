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
                  <a href="index.php">Anasayfa</a>
                </li>
                <li>
                  <!-- class="home" -->
                  <a href="hakkimizda.php">Hakkımızda</a>
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
              <h3 class="title">Ürün Geliştirme</h3>
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
                  <h4 class="title">Ürünlerin Planlanması</h4>
                  <p>Müşterilerin istekleri doğrultusunda alanlarında uzman kadrolarımızla, en yeni trenlere uygun şekilde ürünlerimiz planlanmakta ve tasarlanmaktadır. Bunu sağlamak için, siz müşterilerimizin ihtiyaçlarını tespit ederek ve bu ihtiyaçları karşılayacak ürünler üretmekteyiz. Ürün planlama, yeni ürünlerin seçimi, varolan ürünleri günümüz ihtaçlarını karşılar hale getirmek ve yeni trendlere uygun değişiklikler yapmayı kapsamaktadır. </p>
                </div>
              </div>
              <div class="content-post v2">
                <div class="title-post">
                  <h4 class="title">Ürün Yelpazesi</h4>
                  <p>Firmamız, siz müşterilerimizin farklı ihtiyaçlarını karşılayan, farklı büyüklüklerde, farklı stil ve renklerde, geniş ürün çeşitliliğini sizlere sunmaktadır.</p>
                </div>
              </div>
              <div class="content-post v3">
                <div class="title-post">
                  <h4 class="title">Ürün Tasarımı</h4>
                  <p>Chebib Textile olarak, tasarım konusunda uzman kadromuzla hazıladığımız ürünler en başarılı şekilde siz müşterilerimizin isteklerini ve ihtiyaçlarını karşılamaktadır.</p>
                </div>
                <div class="list-post">
                  <h4 class="title">Siz Müşterilerimiz için:</h4>
                </div>
                <div class="list-post">
                  <h4 class="title">Fonksiyonel</h4>
                </div>
                <div class="list-post">
                  <h4 class="title">Çekici</h4>
                </div>
                <div class="list-post">
                  <h4 class="title">Kullanımı Kolay ürünler tasarlıyoruz...</h4>
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