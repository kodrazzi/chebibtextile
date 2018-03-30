<div class="card">
  <div class="card-content">
    <form enctype="multipart/form-data" action="add-referance-upload.php" method="POST" class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input id="firma" name="firma" type="text" class="validate">
          <label for="firma" class="">Firma Adı</label>
        </div>
      </div>
      <div class="row">
        <div class="file-field input-field">
          <div class="btn teal lighten-1">
            <span>Dosya</span>
            <input type="file" name="file">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Upload a photo">
          </div>
        </div>
        <button type="submit" value="send" class="waves-effect waves-light btn">Gönder</button>
    </form>
  </div>
</div>