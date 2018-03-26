<?php 
include "header.php"; 
include "functions.php";
$baglan = $db->query("SELECT * FROM hizmetlerimiz", PDO::FETCH_ASSOC);

if ( $baglan->rowCount() ){
  foreach( $baglan as $row ){
    $oneCikanResim=$row['oneCikanResim'];
    $bolumBasligi=$row['bolumBasligi'];
    $bolumMesaji=$row['bolumMesaji'];
    $hizmet1Icon=$row['hizmet1Icon'];
    $hizmet1Baslik=$row['hizmet1Baslik'];
    $hizmet1Icerik=$row['hizmet1Icerik'];
    $hizmet2Icon=$row['hizmet2Icon'];
    $hizmet2Baslik=$row['hizmet2Baslik'];
    $hizmet2Icerik=$row['hizmet2Icerik'];
    $hizmet3Icon=$row['hizmet3Icon'];
    $hizmet3Baslik=$row['hizmet3Baslik'];
    $hizmet3Icerik=$row['hizmet3Icerik'];
    $hizmet4Icon=$row['hizmet4Icon'];
    $hizmet4Baslik=$row['hizmet4Baslik'];
    $hizmet4Icerik=$row['hizmet4Icerik'];

  }
}
?>

<div class="content-wrapper">
  <section class="content-header">
    <h1>Hizmetlerimiz<small>Ayarları</small></h1>
    <ol class="breadcrumb">
      <li><a href="index.html"><i class="fa fa-dashboard"></i> Kontrol Paneli</a></li>
      <li class="active">Hizmetlerimiz</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <form role="form" action="hizmetlerimiz-guncelle.php" method="post" enctype="multipart/form-data">
          <div class="box box-solid">
            <!-- Box Header -->
            <!-- ================================================== -->
            <div class="box-header with-border">
              <div class="col-sm-6 col-xs-12">
                <h3 class="box-title">Hizmetlerimiz</h3>
              </div>
              <div class="col-sm-6 col-xs-12 text-right">
                <button class="btn btn-primary ajax" type="submit">Kaydet</button>
              </div>
            </div>
            <!-- Box Body -->
            <!-- ================================================== -->
            <div class="box-body">
              <!-- 01 - Öne Çıkan Resim -->
              <!-- ================================================== -->
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <div class="form-group">
                    <label>01 - Öne Çıkan Resim</label>
                  </div>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="min-width: 200px; min-height: 150px;">
                      <?php if(!empty($oneCikanResim)) { ?>
                      <img src="img/<?php echo $oneCikanResim; ?>" />
                      <?php } ?>
                    </div>
                    <div class="input-group">
                      <div class="input-group-addon btn btn-default btn-file">
                        <span class="fileinput-new"> Resim Seç </span>
                        <span class="fileinput-exists"> Değiştir </span>
                        <input type="file" name="oneCikanResim">
                      </div>
                      <a class="input-group-addon btn btn-danger" href="javascript:;" data-dismiss="fileinput"> Kaldır</a>
                      <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                        <i class="fa fa-file fileinput-exists"></i>
                        <span class="fileinput-filename"><?php echo $oneCikanResim; ?></span>
                      </div>
                    </div>
                    <p class="help-block">*Resim boyutu 350x480 pixel ve .jpg ya da .png uzantılı olmalıdır.</p>
                  </div>
                  <div class="form-group">
                    <label>Bölüm başlığını yazınız.</label>
                    <textarea name="bolumBasligi" cols="30" rows="1" class="form-control" placeholder="Bölüm başlığını yazınız."><?php echo $bolumBasligi; ?> </textarea> 
                  </div>
                  <div class="form-group">
                    <label>Bölüm mesajını yazınız.</label>
                    <textarea name="bolumMesaji" rows="1" class="form-control" placeholder="Bölüm mesajını yazınız."><?php echo $bolumMesaji; ?></textarea> 
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <hr>
              <!-- 02 - Hizmet İçeriği -->
              <!-- ================================================== -->
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <div class="form-group">
                    <label>02 - Hizmet İçeriği</label>
                  </div>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="form-group"><i class="fa <?php echo $hizmet1Icon; ?> fa-3x"></i></div>
                  <div class="form-group">
                    <input class="form-control" type="text" placeholder="<?php echo $hizmet1Icon; ?>" disabled="">
                  </div>
                  <div class="form-group">
                    <label>Hizmet ikonunun adını yazınız.</label>
                    <textarea name="icon1" cols="30" rows="1" class="form-control" placeholder="Örnek: fa-star"><?php echo $hizmet1Icon; ?></textarea> 
                    <p class="help-block">http://fontawesome.io/cheatsheet/ adresini ziyaret ederek ikon seçebilirsiniz.</p>
                  </div>
                  <div class="form-group">
                    <label>Hizmet başlığını yazınız.</label>
                    <textarea name="hizmet1Baslik" cols="30" rows="1"class="form-control" placeholder="Hizmet başlığı"><?php echo $hizmet1Baslik; ?> </textarea> 
                  </div>
                  <div class="form-group">
                    <label>Hizmet içeriğini yazınız.</label>
                    <textarea name="hizmet1Icerik" class="form-control" cols="30" rows="1" placeholder="Hizmet içeriği"><?php echo $hizmet1Icerik; ?></textarea>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <hr>
              <!-- 03 - Hizmet İçeriği -->
              <!-- ================================================== -->
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <div class="form-group">
                    <label>03 - Hizmet İçeriği</label>
                  </div>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="form-group"><i class="fa <?php echo $hizmet2Icon; ?> fa-3x"></i></div>
                  <div class="form-group">
                    <input class="form-control" type="text" placeholder="<?php echo $hizmet2Icon; ?>" disabled="">
                  </div>
                  <div class="form-group">
                    <label>Hizmet ikonunun adını yazınız.</label>
                    <textarea name="icon2" cols="30" rows="1" class="form-control" placeholder="Örnek: fa-star"><?php echo $hizmet2Icon; ?></textarea> 
                    <p class="help-block">http://fontawesome.io/cheatsheet/ adresini ziyaret ederek ikon seçebilirsiniz.</p>
                  </div>
                  <div class="form-group">
                    <label>Hizmet başlığını yazınız.</label>
                    <textarea name="hizmet2Baslik" cols="30" rows="1"class="form-control" placeholder="Hizmet başlığı"><?php echo $hizmet2Baslik; ?></textarea> 
                  </div>
                  <div class="form-group">
                    <label>Hizmet içeriğini yazınız.</label>
                    <textarea name="hizmet2Icerik" class="form-control" rows="1" placeholder="Hizmet içeriği"><?php echo $hizmet2Icerik; ?></textarea>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <hr>
              <!-- 04 - Hizmet İçeriği -->
              <!-- ================================================== -->
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <div class="form-group">
                    <label>04 - Hizmet İçeriği</label>
                  </div>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="form-group"><i class="fa <?php echo $hizmet3Icon; ?> fa-3x"></i></div>
                  <div class="form-group">
                    <input class="form-control" type="text" placeholder="<?php echo $hizmet3Icon; ?>" disabled="">
                  </div>
                  <div class="form-group">
                    <label>Hizmet ikonunun adını yazınız.</label>
                    <textarea name="hizmet3Icon" cols="30" rows="1" class="form-control" placeholder="Örnek: fa-legal"><?php echo $hizmet3Icon; ?></textarea> 
                    <p class="help-block">http://fontawesome.io/cheatsheet/ adresini ziyaret ederek ikon seçebilirsiniz.</p>
                  </div>
                  <div class="form-group">
                    <label>Hizmet başlığını yazınız.</label>
                    <textarea name="hizmet3Baslik" cols="30" rows="1" class="form-control" placeholder="Hizmet başlığı"><?php echo $hizmet3Baslik; ?></textarea> 
                  </div>
                  <div class="form-group">
                    <label>Hizmet içeriğini yazınız.</label>
                    <textarea name="hizmet3Icerik" class="form-control" cols="30" rows="1" placeholder="Hizmet içeriği"><?php echo $hizmet3Icerik; ?></textarea>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <hr>
              <!-- 05 - Hizmet İçeriği -->
              <!-- ================================================== -->
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <div class="form-group">
                    <label>05 - Hizmet İçeriği</label>
                  </div>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="form-group"><i class="fa <?php echo $hizmet4Icon; ?> fa-3x"></i></div>
                  <div class="form-group">
                    <input class="form-control" type="text" placeholder="<?php echo $hizmet4Icon; ?>" disabled="">
                  </div>
                  <div class="form-group">
                    <label>Hizmet ikonunun adını yazınız.</label>
                    <textarea name="hizmet4Icon" cols="30" rows="1" class="form-control" placeholder="Örnek: fa-bed"><?php echo $hizmet4Icon; ?></textarea> 
                    <p class="help-block">http://fontawesome.io/cheatsheet/ adresini ziyaret ederek ikon seçebilirsiniz.</p>
                  </div>
                  <div class="form-group">
                    <label>Hizmet başlığını yazınız.</label>
                    <textarea name="hizmet4Baslik" cols="30" rows="1" class="form-control" placeholder="Hizmet başlığı"><?php echo $hizmet4Baslik; ?></textarea>
                  </div>
                  <div class="form-group">
                    <label>Hizmet içeriğini yazınız.</label>
                    <textarea name ="hizmet4Icerik" class="form-control" cols="30" rows="1" placeholder="Hizmet içeriği"><?php echo $hizmet4Icerik; ?></textarea>
                  </div>
                </div>
              </div>
            </div>
            <!-- Box Footer -->
            <!-- ================================================== -->
            <div class="box-footer">
              <div class="col-sm-6 col-xs-12">
                <p class="box-title">Hizmetlerimiz</p>
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