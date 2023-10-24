<?php
require_once("util-db.php");
require_once("model-artists-with-genres.php");

$pageTitle = "Artists With Genres";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']){
    case "Add":
      if(insertSong($_POST['aid'], $_POST['gid'], $_POST['title'], $_POST['language'], $_POST['producer'])) {
        echo '<div class="alert alert-success" role="alert">Song Added</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
     
    case "Delete":
      if(DeleteSong($_POST['sid'])) {
        echo '<div class="alert alert-success" role="alert">Song Deleted</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
  
  }
}


$Artists = selectArtists();
include "view-artists-with-genres.php";
include "view-footer.php";
?>
