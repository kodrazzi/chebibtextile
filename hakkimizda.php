<?php require_once('./config/config.php'); ?>

<!DOCTYPE html>
<html lang="tr">

<head>
  <!-- Title -->
  <title><?php echo $lang['pageAboutUs'] . " | " . $lang['title']; ?></title>
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

  <section class="main-content bg-sidebar sidebar-left">
    <div class="container">
      <div class="flat-overview">
        <div class="row">
          <div id="tanitim" class="col-md-12">
            <div class="title-section style1">
              <h3 class="title" style="text-align:center;">Şirketimiz Hakkında</h3>
            </div>
          </div>
          <div class="wrap-main-post">
            <div class="col-md-3">
              <div class="sidebar">
                <div class="widget widget-categories team">
                  <ul class="categories">
                    <li>
                      <a href="#tanitim">Tanıtım</a>
                    </li>
                    <li>
                      <a href="#textile">Chebib Textile</a>
                    </li>
                    <li>
                      <a href="#printing">Chebib Printing</a>
                    </li>
                    <li>
                      <a href="#real-estate">Chebib Real-Estate</a>
                    </li>
                    <li>
                      <a href="#goals">Hedeflerimiz</a>
                    </li>
                    <li>
                      <a href="#photos">Foto Galeri</a>
                    </li>
                    <!-- 
                                            <li>
                                                <a href="#">Our Partners</a>
                                            </li>
                                            <li>
                                                <a href="#">FAQ</a>
                                            </li> -->
                  </ul>
                </div>
                <!-- /widget-archives -->
                <!--                                     <div class="widget widget-need">
                                        <div class="title-link v5">
                                            <h5 class="widget-title">Need our help?</h5>
                                        </div>
                                        <p>Donec at cursus sem. Duis condimentum posuere purus.</p>
                                        <p class="form-submit">
                                            <input name="submit" type="submit" id="submit" class="submit" value="Contact Us">
                                        </p>
                                    </div> -->
                <!-- /widget-archives -->
                <!--                                  <div class="widget widget-brochures">
                                        <div class="title-link v6">
                                            <h5 class="widget-title">Our Brochures</h5>
                                        </div>
                                        <p>View our 2016 financial prospectus bro-chure for an easy to read guide on all of the services offered.</p>
                                        <ul class="dowload">
                                            <li class="dl-word">
                                                <a href="#">Brochures.doc</a>
                                            </li>
                                            <li class="dl-pdf">
                                                <a href="#">Brochures.pdf</a>
                                            </li>
                                        </ul>
                                    </div> -->
                <!-- /widget-archives -->
                <!--                                     <div class="widget widget-testimonials">
                                        <div class="text">
                                            <p>Consulting WP really helped us achieve our financial goals. The slick presentation along with fan tastic readability ensures that our financial standing is stable.</p>
                                            <span class="v1"></span>
                                            <span class="v2"></span>
                                            <span class="v3"></span>
                                        </div>
                                        <div class="avata">
                                            <div class="thumb">
                                                <img src="./assets/img/member/4.jpg" alt="image">
                                            </div>
                                            <div class="post">
                                                <h4 class="title">
                                                    <a href="#">Kevin Johnston</a>
                                                </h4>
                                                <p>Ceo & Founder</p>
                                            </div>
                                        </div>
                                    </div> -->
              </div>
              <!-- /sidebar -->
            </div>
            <!-- /col-md-3 -->
            <div class="col-md-9">
              <div class="post-overview">
                <!--                                     <div class="thumb">
                                        <img src="./assets/img/overview/1.jpg" alt="image">
                                    </div> -->
                <div class="content">
                  <!-- <h4 class="title">We are help you to grow your business</h4> -->
                  <p>Sevgili Müşterilerimiz,</p>
                  <p>Chebib tekstil 1945 yılından bu yana tekstil sektöründe üretim yapmakta olup, tekstil alanında tecrübeli güvenilir ve köklü bir firmadır.</p>
                  <p>Chebib Ailesi, Asya, Afrika ve Orta Doğu'da bulunan farklı iş zincirlerinden oluşan bir grup şirketidir.</p>
                  <p>Temel olarak, firmamız Chebib Ailesi oğulları tarafından bir Genel Müdür altında çalışmaktadır:</p>
                  <p>
                    <strong>Yahya Chebib</strong>
                  </p>
                  <p>Chebib Ailesi olarak, Suriye'de meydana gelen korkunç koşullar nedeniyle, tesislerimizi yeni adresimize taşıdık.</p>
                  <p>Chebib Textile olarak Tekstil endüstrisinde işimizi sürdürüyoruz.</p>
                  <div class="post post-list">
                    <div class="box" style="width:auto !important;">
                      <p class="title-top">The Chebib Group olarak üç sektörde hizmet vermekteyiz :</p>
                      <div class="list">
                        <p>
                          <strong>Chebib Textile</strong> tekstil alanında hizmet vermektedir.</p>
                        <p>
                          <strong>Chebib Printing</strong> giysiler ve kumaşlar alanında hizmet vermektedir.</p>
                        <p>
                          <strong>Chebib Real-Estate</strong> emlakve gayrimenkul alanında hizmet vermektedir.</p>
                      </div>
                    </div>
                  </div>
                  <p>Yukarıdaki işlemlerin kısa bir açıklaması:</p>
                  <p>Tekstil endüstrisi, ipliklerle başlayan ve hazır giyim ürünleri veya kumaşlarla sonuçlanan komple bir süreçtir. Bu işlemler örme, boyama, terbiye, kesme, dikiş ve paketleme işlemlerine dayanmaktadır.</p>
                  <p>Bu süreçleri, Avrupa'daki Engelbert-Strauss, Frankie Garage, Alpha Industries gibi çok tanınmış firmalar için ihracatçı ve taşeron olarak üretim hatlarımızda yürütmekteyiz. Puma AG, C & A, Tchibo, Palco-Schiesser ve adını burada sayamadığımız bir çok kaliteli markayla çalışmaktayız.</p>
                  <p>Ürettiğimiz ürünleri Almanya, İtalya, Rusya ve Kanada gibi ülkelere ihraç etmekteyiz.</p>
                  <p>Baskı süreci, hazır giyim ve kumaşlardaki tekstil baskıları için eksiksiz bir baskı evidir. Su bazlı, reaktif boyalar gibi en iyi maddeleri ve yardımcıları kullanıyoruz.</p>
                  <p id="textile">Gayrimenkul şirketimiz kiralama, kira ve satış alanlarında hizmet vermektedir.</p>
                  <p>Daha fazla bilgi için lütfen bizimle iletişime geçmekten çekinmeyin.</p>
                </div>
                <div class="content v2">
                  <h4 class="title">Chebib Textil</h4>
                  <p class="v1">Suriyeli tekstil şirketi, ipliklerle başlayan ve tam hazır giyim eşyası ile tamamlanan komple bir zincirdir. Dikey işlem örme, boyama, terbiye, kesme, dikiş ve paketleme işlemlerine dayanmaktadır.</p>
                  <div class="post post-list">
                    <div class="box" style="width:auto !important;">
                      <p class="title-top">K. Maraş'ta bulunan şirketimiz bu alanlarda hizmet vermektedir:</p>
                      <div class="list">
                        <p>Tasarım deseni</p>
                        <p>Laboratuvar testleri</p>
                        <p>Kalite kontrol AQL 5.0 ve 2.5</p>
                        <p id="printing">Kesme</p>
                        <p>Dikiş</p>
                        <p>Paketleme</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="real-estate" class="content v2">
                  <h4 class="title">Chebib Printing</h4>
                  <p id="goals" class="v1">Baskı Şirketi, Gaziantep ve K. Maraş'taki hazır giyim ve kumaş üzerine her türlü tekstil baskılarını yapmak için tam donanımlı bir basımevidir..</p>
                </div>
                <div class="content v2">
                  <h4 class="title">Chebib Real-Estate</h4>
                  <p class="v1">Dubai'de hizmet vermektedir.</p>
                </div>
                <div class="content v2">
                  <div class="post post-list">
                    <div class="box" style="width:auto !important;">
                      <h4 class="title">Gelecek Yatırım Hedeflerimiz :</h4>
                      <div class="list">
                        <p>Örgü Fabrikası</p>
                        <p id="photos">Bitirme Hatları</p>
                        <p>Boyahane</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="choose-us">
                <h4 class="header-photos">Konfeksiyon:</h4>
                <div class="flat-icon-post margin-top-31">
                  <div class="flat-icon">
                    <div class="post popup-gallery">
                      <div class="item">
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/2.png" title="01">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/2.png" alt="01">
                        </a>
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/5.png" title="02">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/5.png" alt="02">
                        </a>
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/1.png" title="03">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/1.png" alt="03">
                        </a>
                      </div>
                      <div class="item">
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/10.png" title="04">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/10.png" alt="04">
                        </a>
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/11.png" title="05">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/11.png" alt="05">
                        </a>
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/9.png" title="06">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/9.png" alt="06">
                        </a>
                      </div>
                      <div class="item">
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/7.png" title="07">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/7.png" alt="07">
                        </a>
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/8.png" title="08">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/8.png" alt="08">
                        </a>
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/4.png" title="09">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/4.png" alt="09">
                        </a>
                      </div>
                      <div class="item">
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/6.png" title="10">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/6.png" alt="10">
                        </a>
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/12.png" title="11">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/12.png" alt="11">
                        </a>
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/3.png" title="12">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/3.png" alt="12">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="choose-us">
                <h4 class="header-photos">Baskı:</h4>
                <div class="flat-icon-post margin-top-31">
                  <div class="flat-icon">
                    <div class="post popup-gallery">
                      <div class="item">
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/2.png" title="01">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/2.png" alt="01">
                        </a>
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/5.png" title="02">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/5.png" alt="02">
                        </a>
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/1.png" title="03">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/1.png" alt="03">
                        </a>
                      </div>
                      <div class="item">
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/10.png" title="04">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/10.png" alt="04">
                        </a>
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/11.png" title="05">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/11.png" alt="05">
                        </a>
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/9.png" title="06">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/9.png" alt="06">
                        </a>
                      </div>
                      <div class="item">
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/7.png" title="07">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/7.png" alt="07">
                        </a>
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/8.png" title="08">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/8.png" alt="08">
                        </a>
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/4.png" title="09">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/4.png" alt="09">
                        </a>
                      </div>
                      <div class="item">
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/6.png" title="10">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/6.png" alt="10">
                        </a>
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/12.png" title="11">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/12.png" alt="11">
                        </a>
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/3.png" title="12">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/3.png" alt="12">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.col-md-9 -->
          </div>
          <!-- /.wrap-main-post -->
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

  <script>
    $(document).ready(function () {
      $('.popup-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
          enabled: true,
          navigateByImgClick: true,
          preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
          tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
          titleSrc: function (item) {
            return item.el.attr('title') + '<small>by Chebib Tekstil</small>';
          }
        }
      });
    });
  </script>

</body>

</html>