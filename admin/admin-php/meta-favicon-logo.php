<?php 
include "header.php";
include "functions.php";

$baglan = $db->query("SELECT * FROM logofav", PDO::FETCH_ASSOC);

if ( $baglan->rowCount() ){
     foreach( $baglan as $row ){
        $siteadi = $row['siteBasligi'];
        $siteAciklamasi =$row['siteAciklamasi'];
        $logo =$row['logo'];
        $sosyalMedya63 =$row['sosyalMedya63'];
        $sosyalMedya88 =$row['sosyalMedya88'];
        $fav18 =$row['favicon1818'];
        $fav32=$row['favicon3232'];
        $fav16 =$row['favicon1616'];
     }
}
?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>Site Başlığı, Site Açıklaması, Favicon ve Logo<small>Ayarları</small></h1>
    <ol class="breadcrumb">
      <li><a href="dashboard-01.html"><i class="fa fa-dashboard"></i> Kontrol Paneli</a></li>
      <li class="active">Site Başlığı, Site Açıklaması, Favicon ve Logo</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <form role="form" action="guncelle.php" method="post" enctype="multipart/form-data">
          <div class="box box-solid">
            <!-- Box Header -->
            <!-- ================================================== -->
            <div class="box-header with-border">
              <div class="col-sm-6 col-xs-12">
                <h3 class="box-title">Site Başlığı, Site Açıklaması, Favicon ve Logo</h3>
              </div>
              <div class="col-sm-6 col-xs-12 text-right">
                <button class="btn btn-primary" type="submit">Kaydet</button>
              </div>
            </div>
            <!-- Box Body -->
            <!-- ================================================== -->
            <div class="box-body">
              <!-- Site Başlığı -->
              <!-- ================================================== -->
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <label>01 - Site Başlığı</label>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <textarea class="form-control" rows="3" name="site-basligi" placeholder="Site başlığını yazınız"><?php echo  $siteadi; ?></textarea>
                </div>
              </div>
              <div class="clearfix"></div>
              <hr>
              <!-- Site Açıklaması -->
              <!-- ================================================== -->
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <label>02 - Site Açıklaması</label>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <textarea class="form-control" rows="3" name="site-aciklamasi" placeholder="Site açıklamasını yazınız"><?php echo  $siteAciklamasi; ?></textarea>
                </div>
              </div>
              <div class="clearfix"></div>
              <hr>
              <!-- Logo -->
              <!-- ================================================== -->
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <label>03 - Logo</label>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="min-width: 200px; min-height: 150px;">
                    <?php if(!empty($logo)) { ?>
                      <img src="img/<?php echo $logo; ?>" />
                      <?php } ?>
                    </div>
                    <div class="input-group">
                      <div class="input-group-addon btn btn-default btn-file">
                        <span class="fileinput-new"> Resim Seç </span>
                        <span class="fileinput-exists"> Değiştir </span>
                        <input type="file" name="logoCek">
                      </div>
                      <a class="input-group-addon btn btn-danger" href="javascript:;" data-dismiss="fileinput"> Kaldır</a>
                      <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                        <i class="fa fa-file fileinput-exists"></i>
                        <span class="fileinput-filename"><?php echo $logo; ?></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <hr>
              <!-- Sosyal Medya Resmi 600x300 -->
              <!-- ================================================== -->
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <label>04 - Sosyal Medya Resmi (600x300)</label>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="min-width: 200px; min-height: 150px;">
                    <?php if(!empty($sosyalMedya63)) { ?>
                      <img src="img/<?php echo $sosyalMedya63; ?>" />
                    <?php } ?>
                    </div>
                    <div class="input-group">
                      <div class="input-group-addon btn btn-default btn-file">
                        <span class="fileinput-new"> Resim Seç </span>
                        <span class="fileinput-exists"> Değiştir </span>
                        <input type="file" name="sosyalMedya63">
                      </div>
                      <a class="input-group-addon btn btn-danger" href="javascript:;" data-dismiss="fileinput"> Kaldır</a>
                      <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                        <i class="fa fa-file fileinput-exists"></i>
                        <span class="fileinput-filename"><?php echo $sosyalMedya63; ?></span>
                      </div>
                    </div>
                  </div>
                  <p class="help-block">*Resim boyutu 600x300 pixel ve .jpg uzantılı olmalıdır.</p>
                </div>
              </div>
              <div class="clearfix"></div>
              <hr>
              <!-- Sosyal Medya Resmi 80x80 -->
              <!-- ================================================== -->
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <label>05 - Sosyal Medya Resmi (80x80)</label>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="min-width: 200px; min-height: 150px;">
                    <?php if(!empty($sosyalMedya88)) { ?>
                      <img src="img/<?php echo $sosyalMedya88; ?>" />
                    <?php } ?>
                    </div>
                    <div class="input-group">
                      <div class="input-group-addon btn btn-default btn-file">
                        <span class="fileinput-new"> Resim Seç </span>
                        <span class="fileinput-exists"> Değiştir </span>
                        <input type="file" name="sosyalMedya88">
                      </div>
                      <a class="input-group-addon btn btn-danger" href="javascript:;" data-dismiss="fileinput"> Kaldır</a>
                      <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                        <i class="fa fa-file fileinput-exists"></i>
                        <span class="fileinput-filename"><?php echo $sosyalMedya88; ?></span>
                      </div>
                    </div>
                  </div>
                  <p class="help-block">*Resim boyutu 80x80 pixel ve .jpg uzantılı olmalıdır.</p>
                </div>
              </div>
              <div class="clearfix"></div>
              <hr>
              <!-- Favicon 180x180 -->
              <!-- ================================================== -->
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <label>06 - Favicon (180x180)</label>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="min-width: 200px; min-height: 150px;">
                    <?php if(!empty($fav18)) { ?>
                      <img src="img/<?php echo $fav18; ?>" />
                    <?php } ?>
                    </div>
                    <div class="input-group">
                      <div class="input-group-addon btn btn-default btn-file">
                        <span class="fileinput-new"> Resim Seç </span>
                        <span class="fileinput-exists"> Değiştir </span>
                        <input type="file" name="favicon1818">
                      </div>
                      <a class="input-group-addon btn btn-danger" href="javascript:;" data-dismiss="fileinput"> Kaldır</a>
                      <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                        <i class="fa fa-file fileinput-exists"></i>
                        <span class="fileinput-filename"><?php echo $fav18; ?></span>
                      </div>
                    </div>
                  </div>
                  <p class="help-block">*Resim boyutu 180x180 pixel ve .jpg ya da .png uzantılı olmalıdır.</p>
                </div>
              </div>
              <div class="clearfix"></div>
              <hr>
              <!-- Favicon 32x32 -->
              <!-- ================================================== -->
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <label>07 - Favicon (32x32)</label>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="min-width: 200px; min-height: 150px;">
                    <?php if(!empty($fav32)) { ?>
                      <img src="img/<?php echo $fav32; ?>" />
                    <?php } ?>
                    </div>
                    <div class="input-group">
                      <div class="input-group-addon btn btn-default btn-file">
                        <span class="fileinput-new"> Resim Seç </span>
                        <span class="fileinput-exists"> Değiştir </span>
                        <input type="file" name="favicon3232">
                      </div>
                      <a class="input-group-addon btn btn-danger" href="javascript:;" data-dismiss="fileinput"> Kaldır</a>
                      <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                        <i class="fa fa-file fileinput-exists"></i>
                        <span class="fileinput-filename"><?php echo $fav32; ?></span>
                      </div>
                    </div>
                  </div>
                  <p class="help-block">*Resim boyutu 180x180 pixel ve .jpg ya da .png uzantılı olmalıdır.</p>
                </div>
              </div>
              <div class="clearfix"></div>
              <hr>
              <!-- Favicon 16x16 -->
              <!-- ================================================== -->
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <label>08 - Favicon (16x16)</label>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="min-width: 200px; min-height: 150px;">
                    <?php if(!empty($fav16)) { ?>
                      <img src="img/<?php echo $fav16; ?>" />
                    <?php } ?>
                    </div>
                    <div class="input-group">
                      <div class="input-group-addon btn btn-default btn-file">
                        <span class="fileinput-new"> Resim Seç </span>
                        <span class="fileinput-exists"> Değiştir </span>
                        <input type="file" name="favicon1616">
                      </div>
                      <a class="input-group-addon btn btn-danger" href="javascript:;" data-dismiss="fileinput"> Kaldır</a>
                      <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                        <i class="fa fa-file fileinput-exists"></i>
                        <span class="fileinput-filename"><?php echo $fav16; ?></span>
                      </div>
                    </div>
                  </div>
                  <p class="help-block">*Resim boyutu 180x180 pixel ve .jpg ya da .png uzantılı olmalıdır.</p>
                </div>
              </div>
            </div>
            <!-- Box Footer -->
            <!-- ================================================== -->
            <div class="box-footer">
              <div class="col-sm-6 col-xs-12">
                <p class="box-title">Site Başlığı, Site Açıklaması, Favicon ve Logo</p>
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