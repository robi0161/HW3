<div class="row">
 <div class="col">
<h1>Artists with Genres</h1>
 </div>
 <div class= "col-auto">
  
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
   while ($genre =  $Genres->fetch_assoc()) {
   ?>
      <li class="list-group-item"><?php echo $genre['genre_name']; ?> - <?php echo $genre['title']; ?> - <?php echo $genre['producer']; ?> - <?php echo $genre['language']; ?></li>
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
 
