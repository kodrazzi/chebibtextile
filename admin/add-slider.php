<div class="card">
  <div class="card-content">
    <form enctype="multipart/form-data" action="add-slider-upload.php" method="POST" class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input id="slogan-1-tr" name="slogan-1-tr" type="text" class="validate">
          <label for="slogan-1-tr" class="">Slogan Başlığı</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="slogan-2-tr" name="slogan-2-tr" type="text" class="validate">
          <label for="slogan-2-tr" class="">Slogan Yazısı</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="slogan-1-en" name="slogan-1-en" type="text" class="validate">
          <label for="slogan-1-en" class="">Slider Header</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="slogan-2-en" name="slogan-2-en" type="text" class="validate">
          <label for="slogan-2-en" class="">Slider Text</label>
        </div>
      </div>
      <div class="row">
        <div class="file-field input-field">
          <div class="btn teal lighten-1">
            <span>Dosya</span>
            <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
            <input type="file" name="add-slider-upload">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Upload a photo">
          </div>
        </div>
        <button type="submit" value="send" class="waves-effect waves-light btn">Gönder</button>
    </form>
  </div>
</div>
