<div class="card">
  <div class="card-content">
    <form action="aboutUs-menu-update.php" method="POST" id="aboutUs-update" class="col s12">
      <?php
      $sorgu = $db->query("SELECT * FROM aboutUs ",PDO::FETCH_ASSOC) or die (mysql_error());
      if ( $sorgu->rowCount() ){

        foreach ($sorgu as $db_aboutUs) 
        { ?>
        <div class="row">
          <div class="input-field col s12">
            <input id="aboutUs-sidebar-tr" name="aboutUs-sidebar-tr" type="text" class="validate" value="<?php echo $db_aboutUs['sidebar-tr']; ?>">
            <label for="aboutUs-sidebar-tr" class="">Menü Başlığı</label>
          </div>
          <div class="input-field col s12">
            <textarea id="aboutUs-sidebar-tr-text" name="aboutUs-sidebar-tr-text" class="materialize-textarea" length="5000" class="validate"><?php echo $db_aboutUs['text-tr']; ?></textarea>
            <label for="aboutUs-sidebar-tr-text" class="">İçerik</label>
            <span class="character-counter" style="float: right; font-size: 12px; height: 1px;"></span>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="aboutUs-sidebar-en" name="aboutUs-sidebar-en" type="text" class="validate" value="<?php echo $db_aboutUs['sidebar-en']; ?>">
            <label for="aboutUs-sidebar-en" class="">Menu Header</label>
          </div>
          <div class="input-field col s12">
            <textarea id="aboutUs-sidebar-en-text" name="aboutUs-sidebar-en-text" class="materialize-textarea" length="5000" class="validate"><?php echo $db_aboutUs['text-en']; ?></textarea>
            <label for="aboutUs-sidebar-en-text" class="">Content</label>
            <span class="character-counter" style="float: right; font-size: 12px; height: 1px;"></span>
          </div>
        </div>
        <input name="id" type="hidden" value="<?php echo $db_aboutUs['id']; ?>" />
        <?php
        }
      }
      ?>

      <button type="submit" value="send" class="waves-effect waves-light btn">Gönder</button>
    </form>
  </div>
</div>