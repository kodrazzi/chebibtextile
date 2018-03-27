<?php 
include "header.php";
include "functions.php";

$baglan = $db->query("SELECT * FROM galeri", PDO::FETCH_ASSOC);

if ( $baglan->rowCount() ){
     foreach( $baglan as $row ){
        $galeriBolumBasligi =$row['galeriBolumBasligi'];
        $galeriBolumAciklamasi=$row['galeriBolumAciklamasi'];
        $galeri1Resim=$row['galeri1Resim'];
        $galeri1CalismaAdi=$row['galeri1CalismaAdi'];
        $galeri2Resim=$row['galeri2Resim'];
        $galeri2CalismaAdi=$row['galeri2CalismaAdi'];
        $galeri3Resim=$row['galeri3Resim'];
        $galeri3CalismaAdi=$row['galeri3CalismaAdi'];
        $galeri4Resim=$row['galeri4Resim'];
        $galeri4CalismaAdi=$row['galeri4CalismaAdi'];
        $galeri5Resim=$row['galeri5Resim'];
        $galeri5CalismaAdi=$row['galeri5CalismaAdi'];
        $galeri6Resim=$row['galeri6Resim'];
        $galeri6CalismaAdi=$row['galeri6CalismaAdi'];
        $galeri7Resim=$row['galeri7Resim'];
        $galeri7CalismaAdi=$row['galeri7CalismaAdi'];
        $galeri8Resim=$row['galeri8Resim'];
        $galeri8CalismaAdi=$row['galeri8CalismaAdi'];
     }
}
?>

<div class="content-wrapper">
  <section class="content-header">
    <h1>Galeri<small>Ayarları</small></h1>
    <ol class="breadcrumb">
      <li><a href="index.html"><i class="fa fa-dashboard"></i> Kontrol Paneli</a></li>
      <li class="active">Galeri</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <form role="form" action="guncelle-galeri.php" method="post" enctype="multipart/form-data">
          <div class="box box-solid">
            <!-- Box Header -->
            <!-- ================================================== -->
            <div class="box-header with-border">
              <div class="col-sm-6 col-xs-12">
                <h3 class="box-title">Galeri</h3>
              </div>
              <div class="col-sm-6 col-xs-12 text-right">
                <button class="btn btn-primary ajax" type="submit">Kaydet</button>
              </div>
            </div>
            <!-- Box Body -->
            <!-- ================================================== -->
            <div class="box-body">
              <!-- 01 - Bölüm Başlığı ve Açıklama -->
              <!-- ================================================== -->
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <div class="form-group">
                    <label>01 - Bölüm başlığı ve açıklama</label>
                  </div>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="form-group">
                    <label>Bölüm başlığını yazınız.</label>
                    <input name="galeriBolumBasligi" class="form-control" type="text" placeholder="Bölüm başlığını yazınız." value="<?php echo $galeriBolumBasligi; ?>">
                  </div>
                  <div class="form-group">
                    <label>Bölüm açıklamasını yazınız.</label>
                    <input name="galeriBolumAciklamasi" class="form-control" type="text" placeholder="Bölüm mesajını yazınız." value="<?php echo $galeriBolumAciklamasi; ?>">
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <hr>
              <!-- 02 - Galeri İçeriği -->
              <!-- ================================================== -->
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <div class="form-group">
                    <label>02 - Galeri İçeriği</label>
                  </div>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="min-width: 200px; min-height: 150px;">
                    <?php if(!empty($galeri1Resim)) { ?>
                      <img src="img/<?php echo $galeri1Resim; ?>" />
                      <?php } ?>
                    </div>
                    <div class="input-group">
                      <div class="input-group-addon btn btn-default btn-file">
                        <span class="fileinput-new"> Resim Seç </span>
                        <span class="fileinput-exists"> Değiştir </span>
                        <input type="file" name="galeri1Resim">
                      </div>
                      <a class="input-group-addon btn btn-danger" href="javascript:;" data-dismiss="fileinput"> Kaldır</a>
                      <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                        <i class="fa fa-file fileinput-exists"></i>
                        <span class="fileinput-filename"><?php echo $galeri1Resim; ?></span>
                      </div>
                    </div>
                    <p class="help-block">*Resim boyutu 350x480 pixel ve .jpg ya da .png uzantılı olmalıdır.</p>
                  </div>
                  <div class="form-group">
                    <label>Çalışmanın adını yazınız.</label>
                    <input name="galeri1CalismaAdi" class="form-control" type="text" placeholder="Çalışma adı" value="<?php echo $galeri1CalismaAdi; ?>">
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <hr>
              <!-- 03 - Galeri İçeriği -->
              <!-- ================================================== -->
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <div class="form-group">
                    <label>03 - Galeri İçeriği</label>
                  </div>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="min-width: 200px; min-height: 150px;">
                    <?php if(!empty($galeri2Resim)) { ?>
                      <img src="img/<?php echo $galeri2Resim; ?>" />
                      <?php } ?>
                    </div>
                    <div class="input-group">
                      <div class="input-group-addon btn btn-default btn-file">
                        <span class="fileinput-new"> Resim Seç </span>
                        <span class="fileinput-exists"> Değiştir </span>
                        <input type="file" name="galeri2Resim">
                      </div>
                      <a class="input-group-addon btn btn-danger" href="javascript:;" data-dismiss="fileinput"> Kaldır</a>
                      <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                        <i class="fa fa-file fileinput-exists"></i>
                        <span class="fileinput-filename"><?php echo $galeri2Resim; ?></span>
                      </div>
                    </div>
                    <p class="help-block">*Resim boyutu 350x480 pixel ve .jpg ya da .png uzantılı olmalıdır.</p>
                  </div>
                  <div class="form-group">
                    <label>Çalışmanın adını yazınız.</label>
                    <input name="galeri2CalismaAdi" class="form-control" type="text" placeholder="Çalışma adı" value="<?php echo $galeri2CalismaAdi; ?>">
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <hr>
              <!-- 04 - Galeri İçeriği -->
              <!-- ================================================== -->
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <div class="form-group">
                    <label>04 - Galeri İçeriği</label>
                  </div>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="min-width: 200px; min-height: 150px;">
                    <?php if(!empty($galeri3Resim)) { ?>
                      <img src="img/<?php echo $galeri3Resim; ?>" />
                      <?php } ?>
                    </div>
                    <div class="input-group">
                      <div class="input-group-addon btn btn-default btn-file">
                        <span class="fileinput-new"> Resim Seç </span>
                        <span class="fileinput-exists"> Değiştir </span>
                        <input type="file" name="galeri3Resim">
                      </div>
                      <a class="input-group-addon btn btn-danger" href="javascript:;" data-dismiss="fileinput"> Kaldır</a>
                      <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                        <i class="fa fa-file fileinput-exists"></i>
                        <span class="fileinput-filename"><?php echo $galeri3Resim; ?></span>
                      </div>
                    </div>
                    <p class="help-block">*Resim boyutu 350x480 pixel ve .jpg ya da .png uzantılı olmalıdır.</p>
                  </div>
                  <div class="form-group">
                    <label>Çalışmanın adını yazınız.</label>
                    <input name="galeri3CalismaAdi" class="form-control" type="text" placeholder="Çalışma adı" value="<?php echo $galeri3CalismaAdi; ?>">
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <hr>
              <!-- 05 - Galeri İçeriği -->
              <!-- ================================================== -->
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <div class="form-group">
                    <label>05 - Galeri İçeriği</label>
                  </div>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="min-width: 200px; min-height: 150px;">
                    <?php if(!empty($galeri4Resim)) { ?>
                      <img src="img/<?php echo $galeri4Resim; ?>" />
                      <?php } ?>
                    </div>
                    <div class="input-group">
                      <div class="input-group-addon btn btn-default btn-file">
                        <span class="fileinput-new"> Resim Seç </span>
                        <span class="fileinput-exists"> Değiştir </span>
                        <input type="file" name="galeri4Resim">
                      </div>
                      <a class="input-group-addon btn btn-danger" href="javascript:;" data-dismiss="fileinput"> Kaldır</a>
                      <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                        <i class="fa fa-file fileinput-exists"></i>
                        <span class="fileinput-filename"><?php echo $galeri4Resim; ?></span>
                      </div>
                    </div>
                    <p class="help-block">*Resim boyutu 350x480 pixel ve .jpg ya da .png uzantılı olmalıdır.</p>
                  </div>
                  <div class="form-group">
                    <label>Çalışmanın adını yazınız.</label>
                    <input name="galeri4CalismaAdi" class="form-control" type="text" placeholder="Çalışma adı" value="<?php echo $galeri4CalismaAdi; ?>">
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <hr>
              <!-- 06 - Galeri İçeriği -->
              <!-- ================================================== -->
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <div class="form-group">
                    <label>06 - Galeri İçeriği</label>
                  </div>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="min-width: 200px; min-height: 150px;">
                    <?php if(!empty($galeri5Resim)) { ?>
                      <img src="img/<?php echo $galeri5Resim; ?>" />
                      <?php } ?>
                    </div>
                    <div class="input-group">
                      <div class="input-group-addon btn btn-default btn-file">
                        <span class="fileinput-new"> Resim Seç </span>
                        <span class="fileinput-exists"> Değiştir </span>
                        <input type="file" name="galeri5Resim">
                      </div>
                      <a class="input-group-addon btn btn-danger" href="javascript:;" data-dismiss="fileinput"> Kaldır</a>
                      <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                        <i class="fa fa-file fileinput-exists"></i>
                        <span class="fileinput-filename"><?php echo $galeri5Resim; ?></span>
                      </div>
                    </div>
                    <p class="help-block">*Resim boyutu 350x480 pixel ve .jpg ya da .png uzantılı olmalıdır.</p>
                  </div>
                  <div class="form-group">
                    <label>Çalışmanın adını yazınız.</label>
                    <input name="galeri5CalismaAdi" class="form-control" type="text" placeholder="Çalışma adı" value="<?php echo $galeri5CalismaAdi; ?>">
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <hr>
              <!-- 07 - Galeri İçeriği -->
              <!-- ================================================== -->
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <div class="form-group">
                    <label>07 - Galeri İçeriği</label>
                  </div>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="min-width: 200px; min-height: 150px;">
                    <?php if(!empty($galeri6Resim)) { ?>
                      <img src="img/<?php echo $galeri6Resim; ?>" />
                      <?php } ?>
                    </div>
                    <div class="input-group">
                      <div class="input-group-addon btn btn-default btn-file">
                        <span class="fileinput-new"> Resim Seç </span>
                        <span class="fileinput-exists"> Değiştir </span>
                        <input type="file" name="galeri6Resim">
                      </div>
                      <a class="input-group-addon btn btn-danger" href="javascript:;" data-dismiss="fileinput"> Kaldır</a>
                      <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                        <i class="fa fa-file fileinput-exists"></i>
                        <span class="fileinput-filename"><?php echo $galeri6Resim; ?></span>
                      </div>
                    </div>
                    <p class="help-block">*Resim boyutu 350x480 pixel ve .jpg ya da .png uzantılı olmalıdır.</p>
                  </div>
                  <div class="form-group">
                    <label>Çalışmanın adını yazınız.</label>
                    <input name="galeri6CalismaAdi" class="form-control" type="text" placeholder="Çalışma adı" value="<?php echo $galeri6CalismaAdi; ?>">
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <hr>
              <!-- 08 - Galeri İçeriği -->
              <!-- ================================================== -->
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <div class="form-group">
                    <label>08 - Galeri İçeriği</label>
                  </div>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="min-width: 200px; min-height: 150px;">
                    <?php if(!empty($galeri7Resim)) { ?>
                      <img src="img/<?php echo $galeri7Resim; ?>" />
                      <?php } ?>
                    </div>
                    <div class="input-group">
                      <div class="input-group-addon btn btn-default btn-file">
                        <span class="fileinput-new"> Resim Seç </span>
                        <span class="fileinput-exists"> Değiştir </span>
                        <input type="file" name="galeri7Resim">
                      </div>
                      <a class="input-group-addon btn btn-danger" href="javascript:;" data-dismiss="fileinput"> Kaldır</a>
                      <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                        <i class="fa fa-file fileinput-exists"></i>
                        <span class="fileinput-filename"><?php echo $galeri7Resim; ?></span>
                      </div>
                    </div>
                    <p class="help-block">*Resim boyutu 350x480 pixel ve .jpg ya da .png uzantılı olmalıdır.</p>
                  </div>
                  <div class="form-group">
                    <label>Çalışmanın adını yazınız.</label>
                    <input name="galeri7CalismaAdi" class="form-control" type="text" placeholder="Çalışma adı" value="<?php echo $galeri7CalismaAdi; ?>">
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <hr>
              <!-- 09 - Galeri İçeriği -->
              <!-- ================================================== -->
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <div class="form-group">
                    <label>09 - Galeri İçeriği</label>
                  </div>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="min-width: 200px; min-height: 150px;">
                    <?php if(!empty($galeri8Resim)) { ?>
                      <img src="img/<?php echo $galeri8Resim; ?>" />
                      <?php } ?>
                    </div>
                    <div class="input-group">
                      <div class="input-group-addon btn btn-default btn-file">
                        <span class="fileinput-new"> Resim Seç </span>
                        <span class="fileinput-exists"> Değiştir </span>
                        <input type="file" name="galeri8Resim">
                      </div>
                      <a class="input-group-addon btn btn-danger" href="javascript:;" data-dismiss="fileinput"> Kaldır</a>
                      <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                        <i class="fa fa-file fileinput-exists"></i>
                        <span class="fileinput-filename"><?php echo $galeri8Resim; ?></span>
                      </div>
                    </div>
                    <p class="help-block">*Resim boyutu 350x480 pixel ve .jpg ya da .png uzantılı olmalıdır.</p>
                  </div>
                  <div class="form-group">
                    <label>Çalışmanın adını yazınız.</label>
                    <input name="galeri8CalismaAdi" class="form-control" type="text" placeholder="Çalışma adı" value="<?php echo $galeri8CalismaAdi; ?>">
                  </div>
                </div>
              </div>
            </div>
            <!-- Box Footer -->
            <!-- ================================================== -->
            <div class="box-footer">
              <div class="col-sm-6 col-xs-12">
                <p class="box-title">Galeri</p>
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