<h1>Songs by Genre</h1>
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
  while ($song =$songs->fetch_assoc()) {
   ?>
    <tr>
      <td><?php echo $song['genre_id']; ?></td>
      <td><?php echo $song['genre_name']; ?></td>
      <td><?php echo $song['genre_description']; ?></td>
      <td><?php echo $song['title']; ?></td>
      <td><?php echo $song['producer']; ?></td>
      <td><?php echo $song['language']; ?></td>
    </tr>
  <?php
  }
 ?>
    </tbody>
  </table>
</div>
