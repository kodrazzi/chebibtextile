<?php require_once('./config/config.php'); ?>
<footer>
  <!-- Footer -->
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="footer-logo">
            <img src="./assets/img/logo-footer.png" alt="image" width="155" height="55">
            <div class="im-map">
              <h5 class="title"><?php echo $lang['footer-experience-title']; ?></h5>
              <p><?php echo $lang['footer-experience-text']; ?></p>
              <div class="map">
                <a href="iletisim.php#map">
                  <i class="fa fa-map-marker"></i><?php echo $lang['footer-experience-address']; ?></a>
              </div>
            </div>
          </div>
          <!-- footer-logo -->
        </div>
        <!-- col-md-4 -->

        <div class="col-md-2">
          <div class="widget widget-follow-us">
            <div class="title-link v3">
              <h5 class="widget-title"><?php echo $lang['footer-social']; ?></h5>
            </div>
            <ul class="follow-us">
              <li class="facebook">
                <a href="#"> Facebook</a>
              </li>
              <li class="twiter">
                <a href="#"> Instagram</a>
              </li>
              <li class="linkedIn">
                <a href="#"> LinkedIn</a>
              </li>
<!--               <li class="google">
                <a href="#"> Google Plus </a>
              </li>
              <li class="youtube">
                <a href="#"> Youtube</a>
              </li> -->
            </ul>
          </div>
        </div>
        <!-- col-md-2 -->

        <div class="col-md-3">
          <div class="widget widget-our-services">
            <div class="title-link v4">
              <h5 class="widget-title"><?php echo $lang['footer-ourServices']; ?></h5>
            </div>
            <ul class="our_services">
              <li class="facebook">
                <a href="hakkimizda.php#textile"><?php echo $lang['footer-ourServices-1']; ?></a>
              </li>
              <li class="twitch">
                <a href="hakkimizda.php#textile"><?php echo $lang['footer-ourServices-2']; ?></a>
              </li>
              <li class="google">
                <a href="hakkimizda.php#textile"><?php echo $lang['footer-ourServices-3']; ?></a>
              </li>
              <li class="linkedIn">
                <a href="hakkimizda.php#textile"><?php echo $lang['footer-ourServices-4']; ?></a>
              </li>
              <li class="youtube">
                <a href="hakkimizda.php#printing"><?php echo $lang['footer-ourServices-5']; ?></a>
              </li>
            </ul>
          </div>
        </div>
        <!-- col-md-3 -->

        <div class="col-md-3">
          <div class="widget widget-subscribe-us">
            <div class="title-link v4">
              <h5 class="widget-title"><?php echo $lang['footer-followUs-title']; ?></h5>
            </div>
            <p><?php echo $lang['footer-followUs-text']; ?></p>
            <div class="widget subscribe-search">
              <form id="subscribe-form" method="post" action="#" data-mailchimp="true">
                <div id="subscribe-content">
                  <input type="text" tabindex="2" id="subscribe-email" name="subscribe-email" class="mailchimp-email" placeholder="<?php echo $lang['footer-followUs-placeholder']; ?>">
                  <button type="button" id="subscribe-button" class="submit-button bg-gold">
                    <i class="fa fa-envelope-open-o"></i>
                  </button>
                </div>
                <div id="subscribe-msg"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
  <!-- footer -->

  <!-- Bottom -->
  <div class="bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="container-bottom">
            <div class="copyright flex-container">
              <div class="flex-1-center">
                <a href="http://www.tarzyazilim.com.tr/" target="_blank">TARZ
                  <img style="margin-bottom:5px;" src="./assets/img/tarz-logo-15.png"><?php echo $lang['footer-tarz-software']; ?>
                </a>
              </div>
              <div class="flex-footer-chebib">
                <?php echo $lang['footer-chebib']; ?>© 2018
              </div>
            </div>
          </div>
          <!-- /.container-bottom -->
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </div>
  <!-- Bottom -->

  <!-- Go Top -->
  <a class="go-top">
    <i class="fa fa-arrow-up color-gold" aria-hidden="true"></i>
  </a>
  <!-- Go Top -->
</footer>