<?php require_once('./config/config.php'); ?>
<!-- Header Top -->
<div class="header-inner-pages">
  <div class="top">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="flat-information">
            <li class="phone">
              <a href="tel:05347717976" title="Phone number">
                <?php echo $lang['phone']; ?>: +90 534 771 79 76
              </a>
            </li>
            <li class="email">
              <a href="iletisim.php#respond" title="Email address">
                <?php echo $lang['email']; ?>: info@chebibtekstil.com
              </a>
            </li>
          </ul>
          <div class="style-box text-right">
            <ul class="flat-socials v1">
              <li class="facebook">
                <a href="#">
                  <i class="fa fa-facebook-f"></i>
                </a>
              </li>
              <li class="instagram">
                <a href="#">
                  <i class="fa fa-instagram"></i>
                </a>
              </li>
              <li class="linkedIn">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- col-md-12 -->
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
</div>
<!-- Header Top -->
<!-- Header Bottom -->
<header id="header" class="header style-color clearfix">
  <div class="container">
    <div class="header-wrap clearfix">
      <div id="logo" class="logo">
        <a href="index.php" rel="home">
          <img src="./assets/img/logo.png" alt="image" width="155" height="55">
        </a>
      </div>
      <!-- /.logo -->
      <div class="nav-wrap">
        <div class="btn-menu">
          <span></span>
        </div>
        <!-- //mobile menu button -->
        <nav id="mainnav" class="mainnav">
          <ul class="menu">
            <li class="home">
              <a href="index.php"><?php echo $lang['home-page']; ?></a>
            </li>
            <li class="menu-link">
              <a href="hakkimizda.php"><?php echo $lang['aboutUs-page']; ?></a>
            </li>
            <li class="menu-link">
              <a href="hizmet-detay.php"><?php echo $lang['ourServices-page']; ?></a>
            </li>
            <li class="menu-link">
              <a href="iletisim.php"><?php echo $lang['contact-page']; ?></a>
            </li>
            <li class="menu-link">
              <a href="index.php?lang=en"><img class="menu-link_flag" src="./../assets/img/lang/en.png" alt="lang-en"></a>
            </li>
            <li class="menu-link">
              <a href="index.php?lang=tr"><img class="menu-link_flag" src="./../assets/img/lang/tr.png" alt="lang-tr"></a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>
<!-- Header Bottom -->