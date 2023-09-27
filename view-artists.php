<h1>Artists</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Hometown</th>
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
    </tr>
  <?php
  }
 ?>
    </tbody>
  </table>
</div>
