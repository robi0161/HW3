<h1>Genres by Artists</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Description</th>
      <th>Title</th>
      <th>Producer</th>
      <th>Language</th>
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
      <td><?php echo $genre['title']; ?></td>
      <td><?php echo $genre['producer']; ?></td>
      <td><?php echo $genre['language']; ?></td>
    </tr>
  <?php
  }
 ?>
    </tbody>
  </table>
</div>
