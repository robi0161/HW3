<div class="row">
 <div class="col">
<h1>Artists with Genres</h1>
 </div>
 <div class= "col-auto">
   <?php
   include "view-artists-with-genres-newform.php";
  ?>
 </div>
</div>
<div class="card-group">
 <?php
 while ($artist = $Artists->fetch_assoc()) {
   ?>
      <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $artist['artist_name']; ?></h5>
      <p class="card-text">
      <ul class="list-group">
      <th></th>
      <th></th>
<?php
$Genres = selectGenresWithArtists($artist['artist_id']);
   while ($genre =  $Genres->fetch_assoc()) {
   ?>
      <li class="list-group-item"><?php echo $genre['genre_name']; ?> - <?php echo $genre['title']; ?> - <?php echo $genre['producer']; ?> - <?php echo $genre['language']; ?></li>
     <td>
  <?php
   include "view-artists-with-genres-editform.php";
  ?>
       </td> 
       <td>
     <form method="post" action="">
          <input type="hidden" name="sid" value="<?php echo $song['song_id']; ?>">
           <input type="hidden" name="actionType" value="Delete">
           <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?');">
           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
           <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
            </svg>
          </button>
      </form>
     </td>
       <?php
   }
?>
     </ul>
      </p>
      <p class="card-text"><small class="text-body-secondary">HomeTown: <?php echo $artist['hometown']; ?></small></p>
     <td>
      
     </td>
   
    </div>
  </div>
  <?php
  }
 ?>
</div>
 
