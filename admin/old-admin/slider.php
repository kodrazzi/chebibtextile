<?php 
include "header.php"; 
include "functions.php";
$baglan = $db->query("SELECT * FROM slider", PDO::FETCH_ASSOC);

if ( $baglan->rowCount() ){
  foreach( $baglan as $row ){
    $slayt1 = $row['slayt1Resim'];
    $slayt1Yazi = $row['slayt1Yazisi'];
    $slayt2=$row['slayt2Resim'];
    $slayt2Yazi=$row['slayt2Yazisi'];
    $slayt3=$row['slayt3Resim'];
    $slayt3Yazi=$row['slayt3Yazisi'];
  }
}
?>

<div class="content-wrapper">
  <section class="content-header">
    <h1>Slider<small>Ayarları</small></h1>
    <ol class="breadcrumb">
      <li><a href="index.html"><i class="fa fa-dashboard"></i> Kontrol Paneli</a></li>
      <li class="active">Slider</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <form role="form" action="slayt-guncelle.php" method="post" enctype="multipart/form-data">
          <div class="box box-solid">
            <!-- Box Header -->
            <!-- ================================================== -->
            <div class="box-header with-border">
              <div class="col-sm-6 col-xs-12">
                <h3 class="box-title">Slider</h3>
              </div>
              <div class="col-sm-6 col-xs-12 text-right">
                <button class="btn btn-primary ajax" type="submit">Kaydet</button>
              </div>
            </div>
            <!-- Box Body -->
            <!-- ================================================== -->
            <div class="box-body">
              <!-- Slayt 1 Medya-->
              <!-- ================================================== -->
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <label>01 - Slider Medya</label>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="min-width: 200px; min-height: 150px;">
                    <?php if(!empty($slayt1)) { ?>
                      <img src="img/<?php echo $slayt1; ?>" />
                    <?php } ?>
                    </div>
                    <div class="input-group">
                      <div class="input-group-addon btn btn-default btn-file">
                        <span class="fileinput-new"> Resim Seç </span>
                        <span class="fileinput-exists"> Değiştir </span>
                        <input type="file" name="slayt1">
                      </div>
                      <a class="input-group-addon btn btn-danger" href="javascript:;" data-dismiss="fileinput"> Kaldır</a>
                      <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                        <i class="fa fa-file fileinput-exists"></i>
                        <span class="fileinput-filename"><?php echo $slayt1; ?></span>
                      </div>
                    </div>
                    <p class="help-block">*Resim boyutu 1920x1080 pixel ve .jpg ya da .png uzantılı olmalıdır.</p>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <!-- Slayt 1 Mesaj -->
              <!-- ================================================== -->
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <div class="form-group">
                    <label>01 - Slider mesajınızı yazın</label>
                  </div>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="form-group">
                    <textarea class="form-control" rows="1" name="slayt1" placeholder="Slider mesajını yazın."><?php echo $slayt1Yazi; ?></textarea>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <hr>
              <!-- Slayt 2 Medya-->
              <!-- ================================================== -->
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <label>02 - Slider Medya</label>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="min-width: 200px; min-height: 150px;">
                    <?php if(!empty($slayt2)) { ?>
                      <img src="img/<?php echo $slayt2; ?>" />
                    <?php } ?>
                    </div>
                    <div class="input-group">
                      <div class="input-group-addon btn btn-default btn-file">
                        <span class="fileinput-new"> Resim Seç </span>
                        <span class="fileinput-exists"> Değiştir </span>
                        <input type="file" name="slayt2">
                      </div>
                      <a class="input-group-addon btn btn-danger" href="javascript:;" data-dismiss="fileinput"> Kaldır</a>
                      <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                        <i class="fa fa-file fileinput-exists"></i>
                        <span class="fileinput-filename"></span>
                      </div>
                    </div>
                    <p class="help-block">*Resim boyutu 1920x1080 pixel ve .jpg ya da .png uzantılı olmalıdır.</p>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <!-- Slayt 2 Mesaj -->
              <!-- ================================================== -->
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <div class="form-group">
                    <label>02 - Slider mesajınızı yazın</label>
                  </div>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="form-group">
                  <textarea class="form-control" rows="1" name="slayt2" placeholder="Slider mesajını yazın."><?php echo $slayt2Yazi; ?></textarea>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <hr>
              <!-- Slayt 3 Medya-->
              <!-- ================================================== -->
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <label>03 - Slider Medya</label>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="min-width: 200px; min-height: 150px;">
                    <?php if(!empty($slayt3)) { ?>
                      <img src="img/<?php echo $slayt3; ?>" />
                    <?php } ?>
                    </div>
                    <div class="input-group">
                      <div class="input-group-addon btn btn-default btn-file">
                        <span class="fileinput-new"> Resim Seç </span>
                        <span class="fileinput-exists"> Değiştir </span>
                        <input type="file" name="slayt3">
                      </div>
                      <a class="input-group-addon btn btn-danger" href="javascript:;" data-dismiss="fileinput"> Kaldır</a>
                      <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                        <i class="fa fa-file fileinput-exists"></i>
                        <span class="fileinput-filename"></span>
                      </div>
                    </div>
                    <p class="help-block">*Resim boyutu 1920x1080 pixel ve .jpg ya da .png uzantılı olmalıdır.</p>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <!-- Slayt 3 Mesaj -->
              <!-- ================================================== -->
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <div class="form-group">
                    <label>03 - Slider mesajınızı yazın</label>
                  </div>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="form-group">
                  <textarea class="form-control" rows="1" name="slayt3" placeholder="Slider mesajını yazın."><?php echo $slayt3Yazi; ?></textarea>
                  </div>
                </div>
              </div>
            </div>
            <!-- Box Footer -->
            <!-- ================================================== -->
            <div class="box-footer">
              <div class="col-sm-6 col-xs-12">
                <p class="box-title">Slider</p>
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