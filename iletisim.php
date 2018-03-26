<?php require_once('./config/config.php'); ?>

<!DOCTYPE html>
<html lang="tr">

<head>
  <!-- Title -->
  <title><?php echo $lang['pageContact'] . " | " . $lang['title']; ?></title>
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
  <section class="flat-row contact-page pad-top-134">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="contact-content">
            <div class="contact-address">
              <div class="details">
                <h5>Adresimiz </h5>
                <p>Erkenez Mah. Ramazan YildirimCad 28/A</p>
                <p>Dulkadiroglu / Kahramanmaras / Turkey</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-content">
            <div class="contact-phone">
              <div class="details">
                <h5>Her Zaman Ulaşabilirsiniz</h5>
                <p>Telefon: (+90) 344 236 66 72 </p>
                <p>Mobile: (+90) 534 771 79 76 </p>
                <p>Fax: (+90) 344 236 66 73</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-content">
            <div class="contact-email">
              <div class="details">
                <h5>Bize Yazın</h5>
                <p>info@chebibtekstil.com</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="flat-spacer d74px"></div>
      </div>
      <div id="respond" class="comment-respond contact style2">
        <div class="title-section style1">
          <h3 class="title">Bize Mesaj Bırakın</h3>
        </div>
        <form id="contactform" class="flat-contact-form style2 bg-dark height-small" method="post" action="./components/contact/contact-process.php">
          <div class="field clearfix">
            <div class="wrap-type-input">
              <div class="input-wrap name">
                <input type="text" value="" tabindex="1" placeholder="Adınız" name="name" id="name" required>
              </div>
              <div class="input-wrap email">
                <input type="email" value="" tabindex="2" placeholder="Email" name="email" id="email" required>
              </div>
              <div class="input-wrap last Subject">
                <input type="text" value="" placeholder="Konu" name="subject" id="subject">
              </div>
            </div>
            <div class="textarea-wrap">
              <textarea class="type-input" tabindex="3" placeholder="Mesajınızı Buraya Yazabilirsiniz" name="message" id="message-contact" required></textarea>
            </div>
          </div>
          <div style="margin-bottom:20px;" class="g-recaptcha" data-sitekey="6Lda000UAAAAAJ_qFmfZvS5IuagI4PNE2NmIXl1V"></div>
          <div class="submit-wrap">
            <button id="map" class="flat-button bg-orange">Mesajınızı Gönderin</button>
          </div>
        </form>
        <!-- /.comment-form -->
      </div>
      <!-- /#respond -->
    </div>
    <!-- /.container -->
  </section>
  <!-- Map -->
  <section class="row-map">
    <div class="container-fluid">
      <div class="row">
        <div id="flat-map" style="width: 100%; height: 450px; "></div>
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