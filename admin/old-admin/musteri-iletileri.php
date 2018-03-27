<?php 
  include "header.php";
  include "functions.php";
  
  $baglan=$db->query("SELECT * FROM musteriİletileri", PDO::FETCH_ASSOC);
  if ( $baglan->rowCount()) {
      foreach( $baglan as $row) {
            
       $musteri1Adi=$row['musteri1Adi'];
       $musteri1Mesaji=$row['musteri1Mesaji'];
       $musteri2Adi=$row['musteri2Adi'];
       $musteri2Mesaji=$row['musteri2Mesaji'];
       $musteri3Adi=$row['musteri3Adi'];
       $musteri3Mesaji=$row['musteri3Mesaji'];
       $musteri4Adi=$row['musteri4Adi'];
       $musteri4Mesaji=$row['musteri4Mesaji'];
       $musteri5Adi=$row['musteri5Adi'];
       $musteri5Mesaji=$row['musteri5Mesaji'];
            
    }
  }
 
?>

<div class="content-wrapper">
  <section class="content-header">
    <h1>Müşteri İletileri<small>Ayarları</small></h1>
    <ol class="breadcrumb">
      <li><a href="dashboard-01.html"><i class="fa fa-dashboard"></i> Kontrol Paneli</a></li>
      <li class="active">Müşteri İletileri</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <form role="form" action="musteri-iletileri-guncelle.php" method="post">
          <div class="box box-solid">
            <!-- Box Header -->
            <!-- ================================================== -->
            <div class="box-header with-border">
              <div class="col-sm-6 col-xs-12">
                <h3 class="box-title">Müşteri İletileri</h3>
              </div>
              <div class="col-sm-6 col-xs-12 text-right">
                <button class="btn btn-primary ajax" type="submit">Kaydet</button>
              </div>
            </div>
            <!-- Box Body -->
            <!-- ================================================== -->
            <div class="box-body">
              <!-- 01 - Müşteri Mesajı -->
              <!-- ================================================== -->
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <div class="form-group">
                    <label>01 - Müşteri Mesajı</label>
                  </div>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="form-group">
                    <label>Müşteri adını yazınız.</label>
                    <input name="musteri1Adi" class="form-control" type="text" placeholder="Müşteri adı" value="<?php echo $musteri1Adi; ?>">
                  </div>
                  <div class="form-group">
                    <label>Müşteri mesajını yazınız.</label>
                    <textarea name="musteri1Mesaji" class="form-control" rows="3" placeholder="Müşteri mesajı"><?php echo $musteri1Mesaji; ?></textarea>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <hr>
              <!-- 02 - Müşteri Mesajı -->
              <!-- ================================================== -->
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <div class="form-group">
                    <label>02 - Müşteri Mesajı</label>
                  </div>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="form-group">
                    <label>Müşteri adını yazınız.</label>
                    <input name="musteri2Adi" class="form-control" type="text" placeholder="Müşteri adı" value="<?php echo $musteri2Adi; ?>">
                  </div>
                  <div class="form-group">
                    <label>Müşteri mesajını yazınız.</label>
                    <textarea name="musteri2Mesaji" class="form-control" rows="3" placeholder="Müşteri mesajı"><?php echo $musteri2Mesaji; ?></textarea>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <hr>
              <!-- 03 - Müşteri Mesajı -->
              <!-- ================================================== -->
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <div class="form-group">
                    <label>03 - Müşteri Mesajı</label>
                  </div>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="form-group">
                    <label>Müşteri adını yazınız.</label>
                    <input name="musteri3Adi" class="form-control" type="text" placeholder="Müşteri adı" value="<?php echo $musteri3Adi; ?>">
                  </div>
                  <div class="form-group">
                    <label>Müşteri mesajını yazınız.</label>
                    <textarea name="musteri3Mesaji" class="form-control" rows="3" placeholder="Müşteri mesajı"><?php echo $musteri3Mesaji; ?></textarea>
                  </div>
                </div>
              </div>
            </div>
            <!-- 04 - Müşteri Mesajı -->
              <!-- ================================================== -->
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <div class="form-group">
                    <label>04 - Müşteri Mesajı</label>
                  </div>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="form-group">
                    <label>Müşteri adını yazınız.</label>
                    <input name="musteri4Adi" class="form-control" type="text" placeholder="Müşteri adı" value="<?php echo $musteri4Adi; ?>">
                  </div>
                  <div class="form-group">
                    <label>Müşteri mesajını yazınız.</label>
                    <textarea name="musteri4Mesaji" class="form-control" rows="3" placeholder="Müşteri mesajı"><?php echo $musteri4Mesaji; ?></textarea>
                  </div>
                </div>
              </div>
            </div>
            <!-- 05 - Müşteri Mesajı -->
              <!-- ================================================== -->
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <div class="form-group">
                    <label>05 - Müşteri Mesajı</label>
                  </div>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="form-group">
                    <label>Müşteri adını yazınız.</label>
                    <input name="musteri5Adi" class="form-control" type="text" placeholder="Müşteri adı" value="<?php echo $musteri5Adi; ?>">
                  </div>
                  <div class="form-group">
                    <label>Müşteri mesajını yazınız.</label>
                    <textarea name="musteri5Mesaji" class="form-control" rows="3" placeholder="Müşteri mesajı"><?php echo $musteri5Mesaji; ?></textarea>
                  </div>
                </div>
              </div>
            </div>
            <!-- Box Footer -->
            <!-- ================================================== -->
            <div class="box-footer">
              <div class="col-sm-6 col-xs-12">
                <p class="box-title">Müşteri İletileri</p>
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
