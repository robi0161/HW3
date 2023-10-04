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
  $Genress = SelectGenresByArtist();
?>
      </p>
      <p class="card-text"><small class="text-body-secondary">HomeTown: <?php echo $artist['hometown']; ?></small></p>
    </div>
  </div>
    <tr>
      <td><?php echo $artist['artist_id']; ?></td>
      <td><?php echo $artist['artist_name']; ?></td>
      <td><?php echo $artist['hometown']; ?></td>
      <td><a href="Genres-with-Artists.php?id=<?php echo $artist['artist_id']; ?>">Discography</a></td>
    </tr>
  <?php
  }
 ?>
</div>
 
