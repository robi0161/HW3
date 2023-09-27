<h1>Artists</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Description</th>
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
    </tr>
  <?php
  }
 ?>
    </tbody>
  </table>
</div>
