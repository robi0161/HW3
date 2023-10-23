<div class="row">
 <div class="col">
<h1>Genres</h1>
  </div>
  <div class="col-auto">
  <?php
   include "view-genres-newform.php";
  ?>
  </div>
</div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Description</th>
      <th></th>
      </tr>
    </thead>
    <tbody>
 <?php
  while ($genre =$Genres->fetch_assoc()) {
   ?>
    <tr>
      <td><?php echo $genre['genre_id']; ?></td>
      <td><?php echo $genre['genre_name']; ?></td>
      <td><?php echo $genre['genre_description']; ?></td>
      <td>
        <form method="post" action="songs-by-genre.php">
           <input type="hidden" name="gid" value="<?php echo $genre['genre_id']; ?>">
          <button type="submit" class="btn btn-primary">Songs</button>
      </form>
      </td>
    </tr>
  <?php
  }
 ?>
    </tbody>
  </table>
</div>
