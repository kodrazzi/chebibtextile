<?php include "header.php" ?>

<div class="content-wrapper">
  <section class="content-header">
    <h1>500 Hata!</h1>
    <ol class="breadcrumb">
      <li><a href="index.html"><i class="fa fa-dashboard"></i> Kontrol Paneli</a></li>
      <li class="active">500 Hata!</li>
    </ol>
    <section class="content">
      <div class="error-page">
        <h2 class="headline">500</h2>
        <div class="error-content">
          <h3><i class="fa fa-warning"></i> Birşeyler yanlış gitti.</h3>
          <p>
            Biz bunu çözmeye çalışırken, siz isterseniz
            <a href="index.html">Anasayfaya dönebilir</a> ya da arama çubuğunu kullanabilirsiniz.
          </p>
          <form class="search-form">
            <div class="input-group">
              <input class="form-control" type="text" name="search" placeholder="Arama yap">
              <div class="input-group-btn">
                <button class="btn btn-primary btn-flat" type="submit" name="submit"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
  </section>
</div>

<?php include "footer.php" ?>