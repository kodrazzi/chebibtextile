<?php require_once('./config/config.php'); ?>

<!DOCTYPE html>
<html lang="tr">

<head>
  <!-- Title -->
  <title>
    <?php echo $lang['pageAboutUs'] . " | " . $lang['title']; ?>
  </title>
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
                  <a href="index.php">
                    <?php echo $lang['pageHome']; ?>
                  </a>
                </li>
                <li>
                  <!-- class="home" -->
                  <a href="hakkimizda.php">
                    <?php echo $lang['pageAboutUs']; ?>
                  </a>
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
              <h3 class="title" style="text-align:center;">
                <?php echo $lang['aboutUs-title']; ?>
              </h3>
            </div>
          </div>
          <div class="wrap-main-post">
            <div class="col-md-3">
              <div class="sidebar">
                <div class="widget widget-categories team">
                  <ul class="categories">
                    <li>
                      <a href="#tanitim">
                        <?php echo $lang['aboutUs-sidebar-1']; ?>
                      </a>
                    </li>
                    <li>
                      <a href="#textile">
                        <?php echo $lang['aboutUs-sidebar-2']; ?>
                      </a>
                    </li>
                    <li>
                      <a href="#printing">
                        <?php echo $lang['aboutUs-sidebar-3']; ?>
                      </a>
                    </li>
                    <li>
                      <a href="#real-estate">
                        <?php echo $lang['aboutUs-sidebar-4']; ?>
                      </a>
                    </li>
                    <li>
                      <a href="#goals">
                        <?php echo $lang['aboutUs-sidebar-5']; ?>
                      </a>
                    </li>
                    <li>
                      <a href="#photos">
                        <?php echo $lang['aboutUs-sidebar-6']; ?>
                      </a>
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
                  <p>
                    <?php echo $lang['aboutUs-content-1']; ?>
                  </p>
                  <p>
                    <?php echo $lang['aboutUs-content-2']; ?>
                  </p>
                  <p>
                    <?php echo $lang['aboutUs-content-3']; ?>
                  </p>
                  <p>
                    <?php echo $lang['aboutUs-content-4']; ?>
                  </p>
                  <p>
                    <strong>Yahya Chebib</strong>
                  </p>
                  <p>
                    <?php echo $lang['aboutUs-content-5']; ?>
                  </p>
                  <p>
                    <?php echo $lang['aboutUs-content-6']; ?>
                  </p>
                  <div class="post post-list">
                    <div class="box" style="width:auto !important;">
                      <p class="title-top">
                        <?php echo $lang['aboutUs-content-7']; ?>
                      </p>
                      <div class="list">
                        <p>
                          <?php echo $lang['aboutUs-content-8']; ?>
                        </p>
                        <p>
                          <?php echo $lang['aboutUs-content-9']; ?>
                        </p>
                        <p>
                          <?php echo $lang['aboutUs-content-10']; ?>
                        </p>
                      </div>
                    </div>
                  </div>
                  <p>
                    <?php echo $lang['aboutUs-content-11']; ?>
                  </p>
                  <p>
                    <?php echo $lang['aboutUs-content-12']; ?>
                  </p>
                  <p>
                    <?php echo $lang['aboutUs-content-13']; ?>
                  </p>
                  <p>
                    <?php echo $lang['aboutUs-content-14']; ?>
                  </p>
                  <p>
                    <?php echo $lang['aboutUs-content-15']; ?>
                  </p>
                  <p id="textile">
                    <?php echo $lang['aboutUs-content-16']; ?>
                  </p>
                  <p>
                    <?php echo $lang['aboutUs-content-17']; ?>
                  </p>
                </div>
                <div class="content v2">
                  <h4 class="title">
                    <?php echo $lang['aboutUs-sidebar-2']; ?>
                  </h4>
                  <p class="v1">
                    <?php echo $lang['aboutUs-sidebar-2-text-1']; ?>
                  </p>
                  <div class="post post-list">
                    <div class="box" style="width:auto !important;">
                      <p class="title-top">
                        <?php echo $lang['aboutUs-sidebar-2-text-2']; ?>
                      </p>
                      <div class="list">
                        <p>
                          <?php echo $lang['aboutUs-sidebar-2-list-1']; ?>
                        </p>
                        <p>
                          <?php echo $lang['aboutUs-sidebar-2-list-2']; ?>
                        </p>
                        <p>
                          <?php echo $lang['aboutUs-sidebar-2-list-3']; ?>
                        </p>
                        <p id="printing">
                          <?php echo $lang['aboutUs-sidebar-2-list-4']; ?>
                        </p>
                        <p>
                          <?php echo $lang['aboutUs-sidebar-2-list-5']; ?>
                        </p>
                        <p>
                          <?php echo $lang['aboutUs-sidebar-2-list-6']; ?>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="real-estate" class="content v2">
                  <h4 class="title">
                    <?php echo $lang['aboutUs-sidebar-3']; ?>
                  </h4>
                  <p id="goals" class="v1">
                    <?php echo $lang['aboutUs-sidebar-3']; ?>
                  </p>
                </div>
                <div class="content v2">
                  <h4 class="title">
                    <?php echo $lang['aboutUs-sidebar-4']; ?>
                  </h4>
                  <p class="v1">
                    <?php echo $lang['aboutUs-sidebar-4-text']; ?>
                  </p>
                </div>
                <div class="content v2">
                  <div class="post post-list">
                    <div class="box" style="width:auto !important;">
                      <h4 class="title">
                        <?php echo $lang['aboutUs-sidebar-5-title']; ?>
                      </h4>
                      <div class="list">
                        <p>
                          <?php echo $lang['aboutUs-sidebar-5-list-1']; ?>
                        </p>
                        <p id="photos">
                          <?php echo $lang['aboutUs-sidebar-5-list-2']; ?>
                        </p>
<!--                         <p>
                          <?php /* echo $lang['aboutUs-sidebar-5-list-3']; */ ?>
                        </p> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="choose-us">
                <h4 class="header-photos">
                  <?php echo $lang['aboutUs-sidebar-6-textile']; ?>
                </h4>
                <div class="flat-icon-post margin-top-31">
                  <div class="flat-icon">
                    <div class="post popup-gallery">
                      <div class="item">
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/2.png" title="01">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/2.png" alt="01">
                        </a>
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/6.png" title="02">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/6.png" alt="02">
                        </a>
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/12.png" title="03">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/12.png" alt="03">
                        </a>
                      </div>
                      <div class="item">
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/9.png" title="04">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/9.png" alt="04">
                        </a>
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/7.png" title="05">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/7.png" alt="05">
                        </a>
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/4.png" title="06">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/4.png" alt="06">
                        </a>
                      </div>
                      <div class="item">
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/3.png" title="07">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/3.png" alt="07">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="choose-us">
                <h4 class="header-photos">
                  <?php echo $lang['aboutUs-sidebar-6-printing']; ?>
                </h4>
                <div class="flat-icon-post margin-top-31">
                  <div class="flat-icon">
                    <div class="post popup-gallery">
                      <div class="item">
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/1.png" title="09">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/1.png" alt="09">
                        </a>
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/10.png" title="10">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/10.png" alt="10">
                        </a>
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/11.png" title="11">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/11.png" alt="11">
                        </a>
                      </div>
                      <div class="item">
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/13.png" title="12">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/13.png" alt="12">
                        </a>
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/14.png" title="13">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/14.png" alt="13">
                        </a>
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/15.png" title="14">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/15.png" alt="14">
                        </a>
                      </div>
                      <div class="item">
                        <a class="iconbox icon-left v1 margin-0" href="./assets/img/about/home1/5.png" title="15">
                          <img class="border-radius-3 thumb box-shadow" src="./assets/img/about/home1/5.png" alt="15">
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