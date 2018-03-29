<div class="card">
  <div class="card-content">
    <form action="add-slider-upload.php" method="POST" class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input id="slogan-1" name="slogan-1" type="text" class="validate">
          <label for="slogan-1" class="">Slogan Başlığı</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="slogan-2" name="slogan-2" type="text" class="validate">
          <label for="slogan-2" class="">Slogan Yazısı</label>
        </div>
      </div>
      <div class="row">
        <div class="file-field input-field">
          <div class="btn teal lighten-1">
            <span>Dosya</span>
            <input type="file">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Upload a photo">
          </div>
        </div>
        <button type="submit" value="send" class="waves-effect waves-light btn">Gönder</button>
    </form>
  </div>
</div>
