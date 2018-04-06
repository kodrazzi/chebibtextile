<div id="grid-gallery" class="grid-gallery">
  <section class="grid-wrap">
    <ul class="grid" style="display:flex; flex-direction:row; flex-wrap:wrap;">
      <?php
      $sorgu = $db->query("SELECT * FROM sliders WHERE is_deleted=0",PDO::FETCH_ASSOC) or die (mysql_error());
      if ( $sorgu->rowCount() ){
        foreach ($sorgu as $sliders)
        {
        ?>
          <li>
            <div class="filigran-container">
              <img class="filigran-image" src="./../assets/img/slides/<?php echo $sliders['slider_photo_name']; ?>" alt="img-<?php echo $sliders['slider_photo_name']; ?>" width="260px" height="162px">
              <a href="main.php?p=edit-slider&id=<?php echo $sliders['id']; ?>">
                <div class="overlay overlay-left">
                  <div class="filigran-text"><i class="material-icons">border_color</i></div>
                </div>
              </a>
              <a href="delete-slider.php?id=<?php echo $sliders['id']; ?>">
                <div class="overlay overlay-right">
                  <div class="filigran-text">-</div>
                </div>
              </a>
            </div>
          </li>
        <?php 
        }
      }?>
      <a href="main.php?p=add-slider">
        <li>
        <figure class="photo-add">
            +
        </figure>
        </li>
      </a>
    </ul>
  </section>
</div>