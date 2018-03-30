<div class="card">
  <div class="card-content">
    <form enctype="multipart/form-data" action="gallery-photo-add-upload.php" method="POST" class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input id="photo_name" name="photo_name" type="text" class="validate">
          <label for="photo_name" class="">Foto Adı</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <div class="select-wrapper">
            <span class="caret">▼</span>
            <select name="kind" class="initialized">
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
            <input type="file" name="file">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Upload a photo">
          </div>
        </div>
        <button type="submit" value="send" class="waves-effect waves-light btn">Kaydet</button>
    </form>
    </div>
  </div>
