<?php
require_once("util-db.php");
require_once("model-artists.php");

$pageTitle = "Artists";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']){
    case "Add":
      if(insertArtists($_POST['aName'], $_POST['aHome'])) {
        echo '<div class="alert alert-success" role="alert">Artist Added</div>';
      } else{
         echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Edit":
      if(updateGenre($_POST['aName'], $_POST['aHome'], $_POST['aid'])) {
        echo '<div class="alert alert-success" role="alert">Artist Edited</div>';
      } else{
         echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
       case "Delete":
      if(deleteGenre($_POST['aid'])) {
        echo '<div class="alert alert-success" role="alert">Artist Deleted</div>';
      } else{
         echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
  }
}

$Artists = selectArtists();
include "view-artists.php";
include "view-footer.php";
?>
