<div id="grid-gallery" class="grid-gallery">
  <section class="grid-wrap">
    <h5>Konfeksiyon :</h5>
    <ul class="grid" style="display:flex; flex-direction:row; flex-wrap:wrap;">
      <?php
      $sorgu = $db->query("SELECT * FROM gallery WHERE kind = '1'",PDO::FETCH_ASSOC) or die (mysql_error());
      if ( $sorgu->rowCount() ){
        foreach ($sorgu as $photo)
        {
        ?>
        <a href="gallery-photo-delete.php?id=<?php echo $photo['id']; ?>">
        <li style="position:relative;">
          <figure style="margin:5px; z-index:0;">
            <img src="./../assets/img/about/<?php echo $photo['photo_name']; ?>.jpg" alt="img-<?php echo $photo['photo_name']; ?>" width="260px">
          </figure>
          <div class="filigran">
              -
            </div>
          </li>
        </a>
        <?php 
        }
      }?>
      <a href="main.php?p=gallery-photo-add">
        <li>
        <figure class="photo-add">
            +
        </figure>
        </li>
      </a>
    </ul>
    <h5>Baskı :</h5>
    <ul class="grid" style="display:flex; flex-direction:row; flex-wrap:wrap;">
      <?php
      $sorgu = $db->query("SELECT * FROM gallery WHERE kind = '2'",PDO::FETCH_ASSOC) or die (mysql_error());
      if ( $sorgu->rowCount() ){
        foreach ($sorgu as $photo)
        {
        ?>
        <a href="gallery-photo-delete.php?id=<?php echo $photo['id']; ?>">
          <li style="position:relative;">
            <figure style="margin:5px; z-index:0;">
              <img src="./../assets/img/about/<?php echo $photo['photo_name']; ?>.jpg" alt="img-<?php echo $photo['photo_name']; ?>" width="260px">
            </figure>
            <div class="filigran">
              -
            </div>
          </li>
        </a>
        <?php 
        }
      }?>
      <a href="main.php?p=gallery-photo-add">
      <li>
        <figure class="photo-add">
            +
        </figure>
      </li>
      </a>
    </ul>
  </section>
</div>