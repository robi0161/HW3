<?php
require_once("util-db.php");
require_once("model-album.php");

$pageTitle = "Album";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']){
    case "Add":
      insertAlbum($_POST['alName'], $_POST['alYear']);
      break;
  }
}

$album = selectAlbum();
include "view-album.php";
include "view-footer.php";
?>
