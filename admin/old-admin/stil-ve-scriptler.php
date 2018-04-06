<?php 
  include "header.php";
  include "functions.php";
  
  $baglan=$db->query("SELECT * FROM ozelScriptler", PDO::FETCH_ASSOC);
  if ( $baglan->rowCount()) {
    foreach( $baglan as $row) {
      $headscript = $row['headScripti'];
      $bodyscript = $row['bodyScripti'];
    }
  }
  $db=null;
?>

<div class="content-wrapper">
  <section class="content-header">
    <h1>Özel Stil ve Script<small>Ayarları</small></h1>
    <ol class="breadcrumb">
      <li><a href="index.html"><i class="fa fa-dashboard"></i> Kontrol Paneli</a></li>
      <li class="active">Özel Stil ve Scriptler</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <form role="form" action="ozel-scriptler.php" method="post">
          <div class="box box-solid">
            <!-- Box Header -->
            <!-- ================================================== -->
            <div class="box-header with-border">
              <div class="col-sm-6 col-xs-12">
                <h3 class="box-title">Özel Stil ve Script Ekle</h3>
              </div>
              <div class="col-sm-6 col-xs-12 text-right">
                <button class="btn btn-primary ajax" type="submit">Kaydet</button>
              </div>
            </div>
            <!-- Box Body -->
            <!-- ================================================== -->
            <div class="box-body pad">
              <!-- Head Tagı Öncesi -->
              <!-- ================================================== -->
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <label>01 - "/head>" tagı öncesi</label>
                </div>
                <div class="col-sm-9 col-xs-12">
                    <textarea id="editor1" class="form-control" name="editor1" rows="15" cols="75" placeholder="Kodlarınızı yukarıdaki 'Kaynak' butonu ile gelen ekrana yapıştırabilirsiniz." ><?php echo $headscript; ?></textarea>
                </div>
              </div>
              <div class="clearfix"></div>
              <hr>
              <!-- Body Tagı Öncesi -->
              <!-- ================================================== -->
              <div class="form-group">
                <div class="col-sm-3 col-xs-12">
                  <label>02 - "/body>" tagı öncesi</label>
                </div>
                <div class="col-sm-9 col-xs-12">
                  <textarea id="editor2" class="form-control" name="editor2" rows="15" cols="75" placeholder="Kodlarınızı yukarıdaki 'Kaynak' butonu ile gelen ekrana yapıştırabilirsiniz." ><?php echo $bodyscript; ?></textarea>
                </div>
              </div>
            </div>
            <!-- Box Footer -->
            <!-- ================================================== -->
            <div class="box-footer">
              <div class="col-sm-6 col-xs-12">
                <p class="box-title">Özel Stil ve Script Ekle</p>
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
