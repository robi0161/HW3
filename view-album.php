<div class="row">
  <div class="col">
    <h1> Best Selling Albums of All Time</h1>
    </div>
    <div class ="col-auto">
      
  </div>
</div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Release Year</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($albums = $album->fetch_assoc()) {
  ?>
   <tr>
     <td><?php echo $albums['album_id']; ?></td>
     <td><?php echo $albums['album_name']; ?></td>
     <td><?php echo $albums['release_year']; ?></td>
   </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
