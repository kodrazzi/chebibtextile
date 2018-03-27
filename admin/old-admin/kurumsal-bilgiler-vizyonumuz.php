<?php 
include "header.php"; 
include "functions.php";
$baglan = $db->query("SELECT * FROM vizyonumuz", PDO::FETCH_ASSOC);

if ( $baglan->rowCount() ){
  foreach( $baglan as $row ){
    $resimLink = $row['resimLinki'];
    $icerik =$row['icerik'];
  }
}
?>

<div class="content-wrapper">
  <section class="content-header">
    <h1>Kurumsal Bilgiler<small>Ayarları</small></h1>
    <ol class="breadcrumb">
      <li><a href="dashboard-01.html"><i class="fa fa-dashboard"></i> Kontrol Paneli</a></li>
      <li><a href="kurumsal-bilgiler.html"><i class="fa fa-group"></i> Kurumsal Bilgiler</a></li>
      <li class="active">Vizyonumuz</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <form role="form" action="vizyonumuz-guncelle.php" method="post" enctype="multipart/form-data">
          <div class="box box-solid">
            <!-- Box Header -->
            <!-- ================================================== -->
            <div class="box-header with-border">
              <div class="col-sm-6 col-xs-12">
                <h3 class="box-title">Vizyonumuz</h3>
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
                  <label>01 - Öne Çıkan Resim</label>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="min-width: 200px; min-height: 150px;">
                    <?php if(!empty($resimLink)) { ?>
                      <img src="img/<?php echo $resimLink; ?>" />
                      <?php } ?>
                    </div>
                    <div class="input-group">
                      <div class="input-group-addon btn btn-default btn-file">
                        <span class="fileinput-new"> Resim Seç </span>
                        <span class="fileinput-exists"> Değiştir </span>
                        <input type="file" name="resimLinki">
                      </div>
                      <a class="input-group-addon btn btn-danger" href="javascript:;" data-dismiss="fileinput"> Kaldır</a>
                      <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                        <i class="fa fa-file fileinput-exists"></i>
                        <span class="fileinput-filename"><?php echo $resimLink; ?></span>
                      </div>
                    </div>
                    <p class="help-block">*Resim boyutu 560x360 pixel ve .jpg ya da .png uzantılı olmalıdır.</p>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <hr>
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <div class="form-group">
                    <label>02 - İçerik</label>
                  </div>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <div class="form-group">
                    <label>Bölüm ile ilgili içerik ekleyin.</label>
                     <textarea id="editor6" name="editor" rows="15" cols="75"><?php echo $icerik; ?></textarea>
                  </div>
                </div>
              </div>
            </div>
            <!-- Box Footer -->
            <!-- ================================================== -->
            <div class="box-footer">
              <div class="col-sm-6 col-xs-12">
                <p class="box-title">Vizyonumuz</p>
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
    CKEDITOR.replace('editor6');
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