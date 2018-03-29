<div class="card">
  <div class="card-content">
    <form action="gallery-photo-add-upload.php" method="POST" class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input id="slogan-1" name="slogan-1" type="text" class="validate">
          <label for="slogan-1" class="">Foto Adı</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <div class="select-wrapper">
            <span class="caret">▼</span>
            <select class="initialized">
              <option value="1">Konfeksyon</option>
              <option value="2">Baskı</option>
            </select>
          </div>
          <label>Foto Çeşidi</label>
        </div>
      </div>
      <div class="row">
        <div class="file-field input-field">
          <div class="btn teal lighten-1">
            <span>Resim</span>
            <input type="file">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Upload a photo">
          </div>
        </div>
        <button type="submit" value="send" class="waves-effect waves-light btn">Kaydet</button>
    </form>
    </div>
  </div>
