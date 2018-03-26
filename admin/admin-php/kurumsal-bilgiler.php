<?php 
  include "header.php";
  include "functions.php";
  
  $baglan=$db->query("SELECT * FROM genelBilgiler", PDO::FETCH_ASSOC);
  if ( $baglan->rowCount()) {
      foreach( $baglan as $row) {
            
       $facebook=$row['facebook']; 
       $instagram =$row['instagram'];  
       $googlePlus =$row['googlePlus'];
       $youtube=$row['youtube'];
       $twitter=$row['twitter'];
       $foursquare =$row['foursquare'];
       $telefon = $row['telefon'];
       $email = $row['email'];
       $acikAdres = $row['acikAdres'];
       $googleMaps = $row['googleMaps'];
            
    }
  }
 
?>

<div class="content-wrapper">
  <section class="content-header">
    <h1>Kurumsal Bilgiler<small>Ayarları</small></h1>
    <ol class="breadcrumb">
      <li><a href="dashboard-01.html"><i class="fa fa-dashboard"></i> Kontrol Paneli</a></li>
      <li class="active">Kurumsal Bilgiler</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <form class="form" role="form" action="kurumsal-genel-bilgiler.php" method="post">
          <div class="box box-solid">
            <!-- Box Header -->
            <!-- ================================================== -->
            <div class="box-header with-border">
              <div class="col-sm-6 col-xs-12">
                <h3 class="box-title">Kurumsal Bilgiler</h3>
              </div>
              <div class="col-sm-6 col-xs-12 text-right">
                <button class="btn btn-primary ajax" type="submit">Kaydet</button>
              </div>
            </div>
            <!-- Box Body -->
            <!-- ================================================== -->
            <div class="box-body pad">
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <div class="form-group">
                    <label>01 - Sosyal Hesaplar</label>
                  </div>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="form-group">
                    <div class="input-group"><span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                      <input name="facebook" class="form-control" type="text" value="<?php echo $facebook; ?>" placeholder="Facebook profil/sayfa linkini yapıştırın.">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group"><span class="input-group-addon"><i class="fa fa-instagram"></i></span>
                      <input name="instagram" class="form-control" type="text" value="<?php echo $instagram; ?>" placeholder="İnstagram profil/sayfa linkini yapıştırın.">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group"><span class="input-group-addon"><i class="fa fa-google-plus"></i></span>
                      <input name="googlePlus" class="form-control" type="text" value="<?php echo $googlePlus; ?>" placeholder="Google Plus profil/sayfa linkini yapıştırın.">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group"><span class="input-group-addon"><i class="fa fa-youtube-play"></i></span>
                      <input name="youtube" class="form-control" type="text" value="<?php echo $youtube; ?>" placeholder="Youtube profil/sayfa linkini yapıştırın.">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group"><span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                      <input name="twitter" class="form-control" type="text" value="<?php echo $twitter; ?>" placeholder="Twitter profil/sayfa linkini yapıştırın.">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group"><span class="input-group-addon"><i class="fa fa-foursquare"></i></span>
                      <input name="foursquare" class="form-control" type="text" value="<?php echo $foursquare; ?>" placeholder="Foursquare profil/sayfa linkini yapıştırın.">
                    </div>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <hr>
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <div class="form-group">
                    <label>02 - İletişim Bilgileri</label>
                  </div>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="form-group">
                    <div class="input-group"><span class="input-group-addon"><i class="fa fa-phone"></i></span>
                      <input name="telefon" class="form-control" type="text" value="<?php echo $telefon; ?>" placeholder="Telefon numaranızı yazınız">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                      <input name="email" class="form-control" type="text" value="<?php echo $email; ?>" placeholder="E-Posta adresinizi yazınız">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Açık adresiniz</label>
                      <textarea name="acikAdres" id="editor3" name="editor3" rows="15" cols="75"><?php echo $acikAdres; ?></textarea>
                  </div>
                  <div class="form-group">
                    <label>Adresinizin Google Maps iFrame kodu</label>
                      <textarea name="googleMaps" id="editor4" class="form-control" name="editor4" rows="15" cols="75" placeholder="Adresinizin Google Maps iFrame kodunu yapıştırın."><?php echo $googleMaps; ?></textarea>
                  </div>
                </div>
              </div>
            </div>
            <!-- Box Footer -->
            <!-- ================================================== -->
            <div class="box-footer">
              <div class="col-sm-6 col-xs-12">
                <p class="box-title">Kurumsal Bilgiler</p>
              </div>
              <?php if(isset($_GET['sonuc'])==true){ ?>
              <?php if($_GET["sonuc"] =="gecersiz-islem") { ?>
              <div class='trigger-empty'></div>
              <?php } ?>

              <?php if($_GET["sonuc"] =="kaydedildi") { ?>
              <div class='trigger-success'></div>
              <?php } ?>

              <?php if($_GET["sonuc"] =="kayıt-basarisiz") { ?>
              <div class='trigger-error'></div>
              <?php } ?>
              <?php } ?>
              <div class="col-sm-6 col-xs-12 text-right">
                <button class="btn btn-primary ajax" type="submit">Kaydet</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>

<?php include "footer.php" ?>
<script type="text/javascript">
  $(function () {
    CKEDITOR.replace('editor3');
  })
</script>
<script>
  $('.trigger-success').show(function () {
    iziToast.success({
      title: 'Başarılı!',
      message: 'Yaptığınız değişiklikler kaydedildi.',
      position: 'topRight',
      transitionIn: 'bounceInLeft'
    });

  });
  $('.trigger-error').show(function () {
    iziToast.error({
      title: 'Başarısız!',
      message: 'Yaptığınız değişiklikler kaydedilmedi.',
      position: 'topRight',
      transitionIn: 'fadeInDown'
    });
  });

  $('.trigger-empty').show(function () {
    iziToast.error({
      title: 'Geçersiz İşlem!',
      message: 'Herhangi bir değişiklik yapılmadı.',
      position: 'topRight',
      transitionIn: 'fadeInDown'
    });
  });
</script>
