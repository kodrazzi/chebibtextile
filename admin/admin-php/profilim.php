<?php 
include "header.php";
include "functions.php";
?>

<div class="content-wrapper">

 
  <section class="content-header">
  <h4>Profil Düzenle</h4>
    <ol class="breadcrumb"> 
      <li><a href="main.php"><i class="fa fa-dashboard"></i> Kontrol Paneli</a></li>
      <li><a href="kullanici-yonetimi.php"><i class="fa fa-user"></i> Kullanıcı Yönetimi</a></li>
      <li class="active"></li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-sm-4 col-xs-12">
        <div class="box box-solid">
          <div class="box-body box-profile"><img class="profile-user-img img-responsive img-circle" src="img/" alt=">">
            <h3 class="profile-username text-center"></h3>
            <p class="text-muted text-center">Admin</p>
            <ul class="list-group list-group-unbordered">
              <li class="list-group-item"><b>Kullanıcı Adı:</b><a class="pull-right"></a></li>
              <li class="list-group-item"><b>E-Posta:</b><a class="pull-right"></a></li>
              <li class="list-group-item"><b>Parola:</b><a class="pull-right"></a></li>
              <li class="list-group-item"><b>Üyelik Tarihi:</b><a class="pull-right"></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-8 col-xs-12">
        <div class="box box-solid">
          <form role="form" action="profil-guncelle.php?id=" method="post" enctype="multipart/form-data">
            <!-- Box Header -->
            <!-- ================================================== -->
            <div class="box-header with-border">
              <div class="col-sm-6 col-xs-12">
                <h3 class="box-title">Bilgileri Düzenle</h3>
              </div>
              <div class="col-sm-6 col-xs-12 text-right">
                <button class="btn btn-primary ajax" type="submit">Kaydet</button>
              </div>
            </div>
            <!-- Box Body -->
            <!-- ================================================== -->
            <div class="box-body">
              <div class="form-group">
                <div class="row">
                  <div class="col-xs-12">
                    <label class="col-sm-2 control-label" for="inputName">Profil Resminiz</label>
                    <div class="col-sm-10">
                      <div class="form-group">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                          <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="min-width: 200px; min-height: 150px;">
                            <img src="img/" />
                          </div>
                          <div class="input-group">
                            <div class="input-group-addon btn btn-default btn-file">
                              <span class="fileinput-new"> Resim Seç </span>
                              <span class="fileinput-exists"> Değiştir </span>
                              <input type="file" name="profilFoto">
                            </div>
                            <a class="input-group-addon btn btn-danger" href="javascript:;" data-dismiss="fileinput"> Kaldır</a>
                            <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                              <i class="fa fa-file fileinput-exists"></i>
                              <span class="fileinput-filename"></span>
                            </div>
                          </div>
                          <p class="help-block">*Resim boyutu 125x125 pixel ve .jpg uzantılı olmalıdır.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-xs-12">
                    <label class="col-sm-2 control-label" for="inputName">Adınız</label>
                    <div class="col-sm-10">
                      <input name="adi" class="form-control" id="inputName" type="text" placeholder="Adınızı yazın" value="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-xs-12">
                    <label class="col-sm-2 control-label" for="inputLastName">Soyadınız</label>
                    <div class="col-sm-10">
                      <input name="soyadi" class="form-control" id="inputLastName" type="text" placeholder="Soyadınızı yazın" value="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-xs-12">
                    <label class="col-sm-2 control-label" for="inputUserName">Kullanıcı Adınız</label>
                    <div class="col-sm-10">
                      <input name="kullaniciAdi" class="form-control" id="inputName" type="text" placeholder="Kullanıcı adınızı yazın" value="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-xs-12">
                    <label class="col-sm-2 control-label" for="inputEmail">E-Posta Adresiniz</label>
                    <div class="col-sm-10">
                      <input name="email" class="form-control" id="inputName" type="email" placeholder="E-posta adresinizi yazın" value="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-xs-12">
                    <label class="col-sm-2 control-label" for="password">Parolanız</label>
                    <div class="col-sm-10">
                      <input name="sifre" class="form-control" id="inputExperience" placeholder="Şifrenizi yazın" value="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Box Footer -->
            <!-- ================================================== -->
            <div class="box-footer">
              <div class="col-sm-6 col-xs-12">
                <p class="box-title">Bilgileri Düzenle</p>
              </div>
              <div class="col-sm-6 col-xs-12 text-right">
                <button class="btn btn-primary ajax" type="submit">Kaydet</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>



<?php include "footer.php" ?>
<script type="text/javascript">
  $(function () {
    $('#example1').DataTable()
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
</script>