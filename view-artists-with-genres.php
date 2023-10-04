<h1>Artists with Genres</h1>
<div class="card-group">
 <?php
  while ($artist = $Artists->fetch_assoc()) {
   ?>
      <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $artist['artist_name']; ?></h5>
      <p class="card-text">
<?php
  $Genress = selectGenresWithArtists($artist['artist_id']);
   while ($Genree =  $Genress->fetch_assoc()) {
   ?>
    <?php
   }
?>
      </p>
      <p class="card-text"><small class="text-body-secondary">HomeTown: <?php echo $artist['hometown']; ?></small></p>
    </div>
  </div>
  <?php
  }
 ?>
</div>
 
