<h1>Artists with Genres</h1>
<div class="card-group">
 <?php
 while ($artist = $Artists->fetch_assoc()) {
   ?>
      <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $artist['artist_name']; ?></h5>
      <p class="card-text">
      <ul class="list-group">
<?php
 $Genres = selectGenresWithArtists($artist['artist_id']);
   while ($Genre =  $Genres->fetch_assoc()) {
   ?>
      <li class="list-group-item"><?php echo $song['genre_name']; ?> - <?php echo $song['title']; ?> - <?php echo $song['producer']; ?> - <?php echo $song['language']; ?></li>
       <?php
   }
?>
     </ul>
      </p>
      <p class="card-text"><small class="text-body-secondary">HomeTown: <?php echo $artist['hometown']; ?></small></p>
    </div>
  </div>
  <?php
  }
 ?>
</div>
 
