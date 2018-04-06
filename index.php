<?php require_once('./config/config.php'); ?>

<!DOCTYPE html>
<html lang="tr">

<head>
  <!-- Title -->
  <title><?php echo $lang['pageHome'] . " | " . $lang['title']; ?></title>
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
  <!-- Carousel Start -->
  <div id="ct_carousel__hero" class="fullwidthbanner-container ct_carousel__hero">
    <div class="ct_carousel__hero--item">
      <div class="ct_carousel__hero--item__content">
        <h2><?php echo $lang['hero-slogan-1-1']; ?></h2>
        <p><?php echo $lang['hero-slogan-1-2']; ?></p>
      </div>
      <img class="ct_carousel__hero--item__media" src="./assets/img/slides/konfeksiyon-41.jpg" alt="item">
    </div>
    <div class="ct_carousel__hero--item">
      <div class="ct_carousel__hero--item__content">
        <h2><?php echo $lang['hero-slogan-2-1']; ?></h2>
        <p><?php echo $lang['hero-slogan-2-2']; ?></p>
      </div>
      <img class="ct_carousel__hero--item__media" src="./assets/img/slides/konfeksiyon-42.jpg" alt="item">
    </div>
    <div class="ct_carousel__hero--item">
      <div class="ct_carousel__hero--item__content">
        <h2><?php echo $lang['hero-slogan-3-1']; ?></h2>
        <p><?php echo $lang['hero-slogan-3-2']; ?></p>
      </div>
      <img class="ct_carousel__hero--item__media" src="./assets/img/slides/baskı-02.jpg" alt="item">
    </div>
    <div class="ct_carousel__hero--item">
      <div class="ct_carousel__hero--item__content">
        <h2><?php echo $lang['hero-slogan-4-1']; ?></h2>
        <p><?php echo $lang['hero-slogan-4-2']; ?></p>
      </div>
      <img class="ct_carousel__hero--item__media" src="./assets/img/slides/konfeksiyon-44.jpg" alt="item">
    </div>
    <div class="ct_carousel__hero--item">
      <div class="ct_carousel__hero--item__content">
        <h2><?php echo $lang['hero-slogan-5-1']; ?></h2>
        <p><?php echo $lang['hero-slogan-5-2']; ?></p>
      </div>
      <img class="ct_carousel__hero--item__media" src="./assets/img/slides/baskı-21.jpg" alt="item">
    </div>
  </div>
  <!-- Carousel End -->

  <section class="flat-row no-padding-bottom">
    <div class="flat-choose-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="choose-us">
              <div class="flat-icon-post">
                <div class="flat-icon">
                  <div class="post" style="overflow:hidden;">
                    <div class="item">
                      <div class="iconbox icon-left v1">
                        <div class="thumb">
                          <img src="./assets/img/about/1.jpg" alt="image">
                          <div class="overlay"></div>
                        </div>
                        <div class="icon-post">
                          <div class="box-title">
                            <h4 class="title"><?php echo $lang['section-planning-title']; ?></h4>
                            <div class="box-content">
                              <p><?php echo $lang['section-planning-text']; ?></p>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="iconbox icon-left v1">
                        <div class="thumb">
                          <img src="./assets/img/about/2.jpg" alt="image">
                          <div class="overlay"></div>
                        </div>
                        <div class="icon-post">
                          <div class="box-title">
                            <h4 class="title"><?php echo $lang['section-financal-title']; ?></h4>
                            <div class="box-content">
                              <p><?php echo $lang['section-financal-text']; ?></p>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="iconbox icon-left v1">
                        <div class="thumb">
                          <img src="./assets/img/about/3.jpg" alt="image">
                          <div class="overlay"></div>
                        </div>
                        <div class="icon-post">
                          <div class="box-title">
                            <h4 class="title"><?php echo $lang['section-commerce-title']; ?></h4>
                            <div class="box-content">
                              <p><?php echo $lang['section-commerce-text']; ?></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="flat-row no-padding">
    <div class="flat-fun-fact">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="iteam-fact v1">
              <div class="num-fact">
                <p>2</p>
              </div>
              <div class="text-fact">
                <h4 class="title">CHEBIB
                  <br><?php echo $lang['section-info-1-1']; ?></h4>
                <a href="iletisim.php#map" class="comment-reply" style="word-wrap:break-word;"><?php echo $lang['section-info-1-2']; ?>
                  <i class="fa fa-chevron-right"></i>
                </a>
              </div>
            </div>

            <div class="iteam-fact v2">
              <div class="num-fact">
                <p>+1<?php echo $lang['section-info-2-1']; ?></p>
              </div>
              <div class="text-fact">
                <h4 class="title"><?php echo $lang['section-info-2-2']; ?></h4>
                <a href="#" class="comment-reply"><?php echo $lang['section-info-2-3']; ?>
                  <i class="fa fa-chevron-right"></i>
                </a>
              </div>
            </div>

            <div class="iteam-fact v3">
              <div class="num-fact">
                <p>58</p>
              </div>
              <div class="text-fact">
                <h4 class="title"><?php echo $lang['section-info-3-1']; ?></h4>
                <a href="hakkimizda.php" class="comment-reply"><?php echo $lang['section-info-3-2']; ?>
                  <i class="fa fa-chevron-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="flat-row portfolio-row-page">
    <!-- Portfolio Fullwidth -->
    <div class="container">
      <div class="portfolio-index1">
        <div class="row">
          <div class="col-md-12">
            <div class="title-section style1">
              <h3 class="title"><?php echo $lang['section-workingArea-title']; ?></h3>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="flat-portfolio v1">
              <ul class="portfolio-filter">
                <li class="active v1 bg-gold-before menu-link">
                  <a class="title-edited" data-filter="*" href="#"><?php echo $lang['section-workingArea-all']; ?></a>
                </li>
                <li class="bg-gold-before menu-link">
                  <a class="title-edited" data-filter=".tekstil" href="#"><?php echo $lang['section-workingArea-1']; ?></a>
                </li>
                <li class="bg-gold-before menu-link">
                  <a class="title-edited" data-filter=".hazir" href="#"><?php echo $lang['section-workingArea-2']; ?></a>
                </li>
                <li class="bg-gold-before menu-link">
                  <a class="title-edited" data-filter=".ic" href="#"><?php echo $lang['section-workingArea-3']; ?></a>
                </li>
                <li class="bg-gold-before menu-link">
                  <a class="title-edited" data-filter=".is" href="#"><?php echo $lang['section-workingArea-4']; ?></a>
                </li>
                <li class="bg-gold-before menu-link">
                  <a class="title-edited" data-filter=".baski" href="#"><?php echo $lang['section-workingArea-5']; ?></a>
                </li>
              </ul>
              <!-- /.project-filter -->

              <div class="portfolio-wrap clearfix">
                <div class="item v1 tekstil hazir">
                  <div class="item-content">
                    <div class="thumb">
                      <img src="./assets/img/portfolio/home1/1.png" alt="image">
                    </div>
                    <div class="link-v1">
                      <h5 class="title title-edited color-gold"><?php echo $lang['section-workingArea-1']; ?></h5>
                      <p><?php echo $lang['section-workingArea-1-text']; ?></p>
                    </div>
                  </div>
                </div>

                <div class="item v1 tekstil ic">
                  <div class="item-content">
                    <div class="thumb">
                      <img src="./assets/img/portfolio/home1/2.png" alt="image">
                    </div>
                    <div class="link-v1">
                      <h5 class="title title-edited color-gold"><?php echo $lang['section-workingArea-3']; ?></h5>
                      <p><?php echo $lang['section-workingArea-3-text']; ?></p>
                    </div>
                  </div>
                </div>

                <div class="item v1 tekstil is">
                  <div class="item-content">
                    <div class="thumb">
                      <img src="./assets/img/portfolio/home1/3.png" alt="image">
                    </div>
                    <div class="link-v1">
                      <h5 class="title title-edited color-gold"><?php echo $lang['section-workingArea-4']; ?></h5>
                      <p><?php echo $lang['section-workingArea-4-text']; ?></p>
                    </div>
                  </div>
                </div>

                <div class="item v1 baski">
                  <div class="item-content">
                    <div class="thumb">
                      <img src="./assets/img/portfolio/home1/4.png" alt="image">
                    </div>
                    <div class="link-v1">
                      <h5 class="title title-edited color-gold"><?php echo $lang['section-workingArea-5']; ?></h5>
                      <p><?php echo $lang['section-workingArea-5-text']; ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.portfolio-wrap -->
            </div>
            <!-- /.flat-portfolio -->
          </div>
          <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.portfolio-index1 -->
    </div>
    <!-- /.container -->
  </section>

  <div class="page-title parallax parallax1">
    <div class="overlay"></div>
    <div class="container">
      <div class="flat-talk">
        <div class="row">
          <div class="col-md-12">
            <div class="title-section style1">
              <?php echo $lang['parallax-slogan']; ?>
            </div>
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- flat-talk -->
    </div>
    <!-- container -->
  </div>

  <section id="flat-clients" class="flat-row no-padding">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="ct_clients">
            <a href="http://agtextiles.com/en" class="ct_clients__media" target="_blank" href="#">
              <img src="./assets/img/clients/ag-textile.png" alt="image-client">
            </a>
            <a href="http://www.cnatextiles.com/" class="ct_clients__media" target="_blank" href="#">
              <img src="./assets/img/clients/ca-textile.png" alt="image-client">
            </a>
            <a href="http://www.palcounderwear.gr/" class="ct_clients__media" target="_blank" href="#">
              <img src="./assets/img/clients/palco.png" alt="image-client">
            </a>
            <a href="https://tr.puma.com/" class="ct_clients__media" target="_blank" href="#">
              <img src="./assets/img/clients/puma.png" alt="image-client">
            </a>
            <a href="https://www.tchibo.com.tr/" class="ct_clients__media" target="_blank" href="#">
              <img src="./assets/img/clients/tchibo.png" alt="image-client">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer Section -->
  <?php require_once('./components/footer.php'); ?>
  <!-- Javascript -->
  <?php require_once('./components/scripts.php'); ?>
  <script>
    $('#ct_carousel__hero').slick({
      dots: true,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      speed: 1000,
      autoplaySpeed: 5000,
      fade: true,
      cssEase: 'linear'
    });
  </script>
  <script>
    $('.ct_clients').slick({
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 1,
      autoplay: true,
      speed: 1000,
      autoplaySpeed: 5000,
      responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 425,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  </script>
</body>

</html>