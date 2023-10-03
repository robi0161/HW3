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
  while ($songs =$Songs->fetch_assoc()) {
   ?>
    <tr>
      <td><?php echo $songs['genre_id']; ?></td>
      <td><?php echo $songs['genre_name']; ?></td>
      <td><?php echo $songs['genre_description']; ?></td>
      <td><?php echo $songs['title']; ?></td>
      <td><?php echo $songs['producer']; ?></td>
      <td><?php echo $songs['language']; ?></td>
    </tr>
  <?php
  }
 ?>
    </tbody>
  </table>
</div>
