<div class="row">
 <div class="col">
<h1>Artists</h1>
  </div>
  <div class="col-auto">
  <?php
   include "view-artists-newform.php";
  ?>
  </div>
</div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Hometown</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
 <?php
  while ($artist = $Artists->fetch_assoc()) {
   ?>
    <tr>
      <td><?php echo $artist['artist_id']; ?></td>
      <td><?php echo $artist['artist_name']; ?></td>
      <td><?php echo $artist['hometown']; ?></td>
      <td><a href="Genres-with-Artists.php?id=<?php echo $artist['artist_id']; ?>">Discography</a></td>
    </tr>
  <?php
  }
 ?>
    </tbody>
  </table>
</div>
