<?php
require_once("util-db.php");
require_once("model-album.php");

$pageTitle = "Album";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']){
    case "Add":
      
  }
}

$album = selectAlbum();
include "view-album.php";
include "view-footer.php";
?>
