<?php
require_once("util-db.php");
require_once("model-album.php");

$pageTitle = "Album";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']){
    case "Add":
      if (insertAlbum($_POST['alName'], $_POST['alYear'])){
           echo '<div class="alert alert-success" role="alert">Album Added</div>';
      }else{
        '<div class="alert alert-danger" role="alert">Error</div>';
      }    
      break;
   case "Delete":
      if(deleteAlbum($_POST['alid'])) {
        echo '<div class="alert alert-success" role="alert">Album Deleted</div>';
      } else{
         echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
  }
}

$album = selectAlbum();
include "view-album.php";
include "view-footer.php";
?>
