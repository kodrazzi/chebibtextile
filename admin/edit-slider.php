<div class="card">
  <div class="card-content">
    <form enctype="multipart/form-data" action="add-slider-upload.php" method="POST" class="col s12">
    <?php
      $id = $_GET['id'];
      $sorgu = $db->query("SELECT * FROM sliders WHERE id='".$id."'",PDO::FETCH_ASSOC) or die (mysql_error());
      if ( $sorgu->rowCount() ){
        foreach ($sorgu as $sliders)
        {
        ?>
      <div class="row">
        <img src="./../assets/img/slides/<?php echo $sliders['slider_photo_name']; ?>" alt="img-<?php echo $sliders['slider_photo_name']; ?>" width="100%" />
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="slogan-1-tr" name="slogan-1-tr" type="text" class="validate" value="<?php echo $sliders['slogan_1_tr']; ?>">
          <label for="slogan-1-tr" class="active">Slogan Başlığı</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="slogan-2-tr" name="slogan-2-tr" type="text" class="validate" value="<?php echo $sliders['slogan_2_tr']; ?>">
          <label for="slogan-2-tr" class="active">Slogan Yazısı</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="slogan-1-en" name="slogan-1-en" type="text" class="validate" value="<?php echo $sliders['slogan_1_en']; ?>">
          <label for="slogan-1-en" class="active">Slider Header</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="slogan-2-en" name="slogan-2-en" type="text" class="validate" value="<?php echo $sliders['slogan_2_en']; ?>">
          <label for="slogan-2-en" class="active">Slider Text</label>
        </div>
      </div>
      <div class="row">
        <div class="file-field input-field">
          <div class="btn teal lighten-1">
            <span>Dosya</span>
            <!--<input type="hidden" name="MAX_FILE_SIZE" value="3000000000" />-->
            <input type="file" name="file">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Upload a photo">
          </div>
        </div>
        <button type="submit" value="send" class="waves-effect waves-light btn">Güncelle</button>
        <?php
        }
      }?>
    </form>
  </div>
</div>