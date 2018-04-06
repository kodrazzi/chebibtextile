<?php include "header.php" ?>
<main class="mn-inner inner-active-sidebar" style="padding-right:15px; display:flex; flex-direction:column; justify-content:space-between;">
    <div class="col s12 m12 l12">
        <?php 
        if(isset($_GET['p'])){
            switch ($_GET['p']) {
                case 'slides':
                    include 'slides.php';
                    break;

                case 'add-slider':
                    include 'add-slider.php';
                    break;

                case 'edit-slider':
                    include 'edit-slider.php';
                    break;

                case 'add-referance':
                    include 'add-referance.php';
                    break;

                case 'aboutUs-menu':
                    include 'aboutUs-menu.php';
                    break;

                case 'gallery':
                    include 'gallery.php';
                    break;

                case 'gallery-photo-add':
                    include 'gallery-photo-add.php';
                    break;
          
                default:
                    include 'slides.php';
                    break;
            }
        }
        ?>
    </div>
</main>

<div class="page-footer white">
    <div class="footer-grid container" style="height:auto !important;">
        <div class="">
            <h5 style="font-size:15px;">Version 1.6.7</h5>
            <h5 style="font-size:15px;">Copyright © 2013-<?php echo date("Y");?> |
                <a style="color:#333" href="http://tarzyazilim.com.tr" target="_blank">
                    <img src="assets/images/tarz-logo-15.png" alt="tazr-logo">Tarz Yazılım</a> | Tüm hakları saklıdır.
            </h5>
        </div>
    </div>
</div>
<!-- <div class="content-wrapper">
  <section class="content-header">
    <h1>Kontrol Paneli<small>Ayarlar</small></h1>
    <ol class="breadcrumb">
      <li class="active"><a href="index.html"><i class="fa fa-dashboard"></i> Kontrol Paneli</a></li>
    </ol>
  </section>
  <section class="content">
    <div class="row" id="dash-section">
      <div class="col-lg-4 col-xs-12">
        <div class="info-box bg-facebook"><span class="info-box-icon"><i class="fa fa-facebook"></i></span>
          <div class="info-box-content"><span class="info-box-text">Facebook Sayfanız</span><span class="info-box-number"><?php  ?> </span><span class="progress-description">Beğeni</span></div>
        </div>
      </div>
      <div class="col-lg-4 col-xs-12">
        <div class="info-box bg-instagram"><span class="info-box-icon"><i class="fa fa-instagram"></i></span>
          <div class="info-box-content"><span class="info-box-text">Instagram Sayfanız</span><span class="info-box-number">1,410</span><span class="progress-description">Takipçi</span></div>
        </div>
      </div>
      <div class="col-lg-4 col-xs-12">
        <div class="info-box bg-google-plus"><span class="info-box-icon"><i class="fa fa-google-plus"></i></span>
          <div class="info-box-content"><span class="info-box-text">Google+ Sayfanız</span><span class="info-box-number">1,410</span><span class="progress-description">Takipçi</span></div>
        </div>
      </div>
    </div>
    <div class="row" id="dash-section">
      <div class="col-lg-4 col-xs-12">
        <div class="info-box bg-youtube"><span class="info-box-icon"><i class="fa fa-youtube-play"></i></span>
          <div class="info-box-content"><span class="info-box-text">YouTube Kanalınız</span><span class="info-box-number">1,410</span><span class="progress-description">Takipçi</span></div>
        </div>
      </div>
      <div class="col-lg-4 col-xs-12">
        <div class="info-box bg-twitter"><span class="info-box-icon"><i class="fa fa-twitter"></i></span>
          <div class="info-box-content"><span class="info-box-text">Twitter Hesabınız</span><span class="info-box-number">1,410</span><span class="progress-description">Takipçi</span></div>
        </div>
      </div>
      <div class="col-lg-4 col-xs-12">
        <div class="info-box bg-foursquare"><span class="info-box-icon"><i class="fa fa-foursquare"></i></span>
          <div class="info-box-content"><span class="info-box-text">Foursquare Hesabınız</span><span class="info-box-number">7.6/10</span><span class="progress-description">1.600 Puanlama</span></div>
       </div>
      </div>
    </div>
    <div class="row" id="dash-section">
      <div class="col-lg-4 col-xs-12">
        <div class="info-box bg-google-analytics"><span class="info-box-icon"><i class="fa fa-user"></i></span>
          <div class="info-box-content"><span class="info-box-text">Anlık Ziyaretçi Sayısı</span><span class="info-box-number">1,410</span><span class="progress-description">Kişi</span></div>
        </div>
      </div>
      <div class="col-lg-4 col-xs-12">
        <div class="info-box bg-google-analytics"><span class="info-box-icon"><i class="fa fa-users"></i></span>
          <div class="info-box-content"><span class="info-box-text">Toplam Ziyaretçi Sayısı</span><span class="info-box-number">1,410</span><span class="progress-description">Kişi</span></div>
        </div>
      </div>
      <div class="col-lg-4 col-xs-12">
        <div class="info-box bg-google-analytics"><span class="info-box-icon"><i class="fa fa-flash"></i></span>
          <div class="info-box-content"><span class="info-box-text">Toplam Sayfa Görüntüleme</span><span class="info-box-number">1,410</span>
            <span class="progress-description">Görüntüleme</span>
          </div>
        </div>
      </div>
    </div>
    <div class="row" id="dash-section">
      <div class="col-lg-3 col-xs-12"><a class="btn btn-app btn-block bg-gray" href="meta-favicon-logo.html"><i class="fa fa-globe"></i> Meta, Favicon ve Logo Düzenle</a></div>
      <div class="col-lg-3 col-xs-12"><a class="btn btn-app btn-block bg-gray" href="stil-ve-scriptler.html"><i class="fa fa-edit"></i> Özel Stil ve Scriptleri Düzenle</a></div>
      <div class="col-lg-3 col-xs-12"><a class="btn btn-app btn-block bg-gray" href="kurumsal-bilgiler.html"><i class="fa fa-edit"></i> Kurumsal Bilgileri Düzenle</a></div>
      <div class="col-lg-3 col-xs-12"><a class="btn btn-app btn-block bg-gray" href="kullanici-ekle.html"><i class="fa fa-user-plus"></i> Yeni Kullanıcı Ekle</a></div>
    </div>
  </section>
</div> -->

<?php  include "footer.php"  ?>